<?php

declare(strict_types=1);

/**
 * NOTE: This class is auto generated by Tars Generator (https://github.com/wenbinye/tars-generator).
 *
 * Do not edit the class manually.
 * Tars Generator version: 1.0
 */

namespace kuiper\tars\integration;

use kuiper\tars\annotation\TarsProperty;

final class EndpointF
{
    /**
     * @TarsProperty(order=0, required=true, type="string")
     *
     * @var string|null
     */
    public $host;

    /**
     * @TarsProperty(order=1, required=true, type="int")
     *
     * @var int|null
     */
    public $port;

    /**
     * @TarsProperty(order=2, required=true, type="int")
     *
     * @var int|null
     */
    public $timeout;

    /**
     * @TarsProperty(order=3, required=true, type="int")
     *
     * @var int|null
     */
    public $istcp;

    /**
     * @TarsProperty(order=4, required=true, type="int")
     *
     * @var int|null
     */
    public $grid;

    /**
     * @TarsProperty(order=5, required=false, type="int")
     *
     * @var int|null
     */
    public $groupworkid;

    /**
     * @TarsProperty(order=6, required=false, type="int")
     *
     * @var int|null
     */
    public $grouprealid;

    /**
     * @TarsProperty(order=7, required=false, type="string")
     *
     * @var string|null
     */
    public $setId;

    /**
     * @TarsProperty(order=8, required=false, type="int")
     *
     * @var int|null
     */
    public $qos;

    /**
     * @TarsProperty(order=9, required=false, type="int")
     *
     * @var int|null
     */
    public $bakFlag;

    /**
     * @TarsProperty(order=11, required=false, type="int")
     *
     * @var int|null
     */
    public $weight;

    /**
     * @TarsProperty(order=12, required=false, type="int")
     *
     * @var int|null
     */
    public $weightType;
}