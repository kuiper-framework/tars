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

final class StatPropInfo
{
    /**
     * @TarsProperty(order=0, required=true, type="string")
     *
     * @var string|null
     */
    public $policy;

    /**
     * @TarsProperty(order=1, required=true, type="string")
     *
     * @var string|null
     */
    public $value;
}