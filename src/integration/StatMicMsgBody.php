<?php

declare(strict_types=1);

/*
 * This file is part of the Kuiper package.
 *
 * (c) Ye Wenbin <wenbinye@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * NOTE: This class is auto generated by Tars Generator (https://github.com/wenbinye/tars-generator).
 *
 * Do not edit the class manually.
 * Tars Generator version: 1.0
 */

namespace kuiper\tars\integration;

use kuiper\tars\annotation\TarsProperty;

final class StatMicMsgBody
{
    /**
     * @TarsProperty(order=0, required=true, type="int")
     *
     * @var int|null
     */
    public $count;

    /**
     * @TarsProperty(order=1, required=true, type="int")
     *
     * @var int|null
     */
    public $timeoutCount;

    /**
     * @TarsProperty(order=2, required=true, type="int")
     *
     * @var int|null
     */
    public $execCount;

    /**
     * @TarsProperty(order=3, required=true, type="map<int,int>")
     *
     * @var int[]|null
     */
    public $intervalCount;

    /**
     * @TarsProperty(order=4, required=true, type="long")
     *
     * @var int|null
     */
    public $totalRspTime;

    /**
     * @TarsProperty(order=5, required=true, type="int")
     *
     * @var int|null
     */
    public $maxRspTime;

    /**
     * @TarsProperty(order=6, required=true, type="int")
     *
     * @var int|null
     */
    public $minRspTime;
}
