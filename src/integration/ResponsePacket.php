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

/**
 * NOTE: This class is auto generated by Tars Generator (https://github.com/wenbinye/tars-generator).
 *
 * Do not edit the class manually.
 * Tars Generator version: 0.6
 */

namespace kuiper\tars\integration;

use kuiper\tars\attribute\TarsProperty;

final class ResponsePacket
{
    /**
     * @var int
     */
    #[TarsProperty(type: "short", order: 1)]
    public readonly int $iVersion;

    /**
     * @var int
     */
    #[TarsProperty(type: "byte", order: 2)]
    public readonly int $cPacketType;

    /**
     * @var int
     */
    #[TarsProperty(type: "int", order: 3)]
    public readonly int $iRequestId;

    /**
     * @var int
     */
    #[TarsProperty(type: "int", order: 4)]
    public readonly int $iMessageType;

    /**
     * @var int
     */
    #[TarsProperty(type: "int", order: 5)]
    public readonly int $iRet;

    /**
     * @var string
     */
    #[TarsProperty(type: "vector<byte>", order: 6)]
    public readonly string $sBuffer;

    /**
     * @var string[]
     */
    #[TarsProperty(type: "map<string,string>", order: 7)]
    public readonly array $status;

    /**
     * @var string|null
     */
    #[TarsProperty(type: "string", order: 8)]
    public readonly ?string $sResultDesc;

    /**
     * @var string[]|null
     */
    #[TarsProperty(type: "map<string,string>", order: 9)]
    public readonly ?array $context;

    public function __construct(
        int $iVersion,
        int $cPacketType,
        int $iRequestId,
        int $iMessageType,
        int $iRet,
        string $sBuffer,
        array $status,
        ?string $sResultDesc = null,
        ?array $context = null
    ) {
          $this->iVersion = $iVersion;
          $this->cPacketType = $cPacketType;
          $this->iRequestId = $iRequestId;
          $this->iMessageType = $iMessageType;
          $this->iRet = $iRet;
          $this->sBuffer = $sBuffer;
          $this->status = $status;
          $this->sResultDesc = $sResultDesc;
          $this->context = $context;
    }
}
