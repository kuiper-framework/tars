<?php

declare(strict_types=1);

namespace kuiper\tars\server;

use kuiper\rpc\ErrorHandlerInterface;
use kuiper\rpc\RpcRequestInterface;
use kuiper\rpc\RpcResponseInterface;
use kuiper\tars\client\TarsResponse;
use kuiper\tars\core\TarsRequestInterface;
use kuiper\tars\stream\ResponsePacket;
use Psr\Http\Message\ResponseFactoryInterface;

class ErrorHandler implements ErrorHandlerInterface
{
    /**
     * @var ResponseFactoryInterface
     */
    private $responseFactory;

    /**
     * ErrorHandler constructor.
     *
     * @param ResponseFactoryInterface $responseFactory
     */
    public function __construct(ResponseFactoryInterface $responseFactory)
    {
        $this->responseFactory = $responseFactory;
    }

    public function handle(RpcRequestInterface $request, \Throwable $error): RpcResponseInterface
    {
        /** @var TarsRequestInterface $request */
        $packet = ResponsePacket::createFromRequest($request);
        $packet->iRet = $error->getCode();
        $packet->sResultDesc = $error->getMessage();
        $packet->sBuffer = '';

        $response = $this->responseFactory->createResponse(500);
        $response->getBody()->write((string) $packet->encode());

        return new TarsResponse($request, $response, $packet);
    }
}
