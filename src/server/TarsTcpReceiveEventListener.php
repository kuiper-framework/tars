<?php

/*
 * This file is part of the Kuiper package.
 *
 * (c) Ye Wenbin <wenbinye@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace kuiper\tars\server;

use kuiper\event\EventListenerInterface;
use kuiper\rpc\exception\InvalidRequestException;
use kuiper\rpc\RpcRequestHandlerInterface;
use kuiper\rpc\RpcServerRequestInterface;
use kuiper\rpc\server\RpcServerRequestFactoryInterface;
use kuiper\rpc\server\ServerRequestHolder;
use kuiper\swoole\event\ReceiveEvent;
use kuiper\tars\core\TarsRequestInterface;
use kuiper\tars\exception\TarsRequestException;
use kuiper\tars\stream\ResponsePacket;
use Psr\Http\Message\ServerRequestFactoryInterface;
use Webmozart\Assert\Assert;

class TarsTcpReceiveEventListener implements EventListenerInterface
{
    public function __construct(
        private readonly ServerRequestFactoryInterface $httpRequestFactory,
        private readonly RpcServerRequestFactoryInterface $serverRequestFactory,
        private readonly RpcRequestHandlerInterface $requestHandler)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function __invoke(object $event): void
    {
        Assert::isInstanceOf($event, ReceiveEvent::class);
        /** @var ReceiveEvent $event */
        $server = $event->getServer();
        $sender = static function (string $data) use ($event, $server) {
            $server->send($event->getClientId(), $data);
        };

        $connectionInfo = $server->getConnectionInfo($event->getClientId());
        Assert::notNull($connectionInfo, 'cannot get connection info');
        $uri = sprintf('//%s:%d', 'localhost', $connectionInfo->getServerPort());
        $request = $this->httpRequestFactory->createServerRequest('POST', $uri, $connectionInfo->toArray());
        $request->getBody()->write($event->getData());
        try {
            /** @var TarsRequestInterface|RpcServerRequestInterface $serverRequest */
            $serverRequest = $this->serverRequestFactory->createRequest($request);
        } catch (TarsRequestException $e) {
            $sender((string) $this->createInvalidTarsRequestResponse($e)->encode());

            return;
        } catch (InvalidRequestException $e) {
            $sender((string) $this->createInvalidRequestResponse($e)->encode());

            return;
        }
        ServerRequestHolder::setRequest($serverRequest);
        $sender((string) $this->requestHandler->handle($serverRequest)->getBody());
    }

    public function getSubscribedEvent(): string
    {
        return ReceiveEvent::class;
    }

    private function createInvalidTarsRequestResponse(TarsRequestException $e): ResponsePacket
    {
        $packet = new ResponsePacket();

        $requestPacket = $e->getPacket();
        $packet->iRequestId = $requestPacket->iRequestId;
        $packet->iVersion = $requestPacket->iVersion;
        $packet->cPacketType = $requestPacket->cPacketType;
        $packet->iMessageType = $requestPacket->iMessageType;
        $packet->iRet = $e->getCode();
        $packet->sResultDesc = $e->getMessage();
        $packet->sBuffer = '';

        return $packet;
    }

    private function createInvalidRequestResponse(InvalidRequestException $e): ResponsePacket
    {
        $packet = new ResponsePacket();
        $packet->iRet = $e->getCode();
        $packet->sResultDesc = $e->getMessage();
        $packet->sBuffer = '';

        return $packet;
    }
}
