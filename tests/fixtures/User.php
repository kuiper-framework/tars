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
 * Tars Generator version: 1.0
 */

namespace kuiper\tars\fixtures;

use kuiper\tars\annotation\TarsProperty;

final class User
{
    /**
     * @TarsProperty(order=0, required=true, type="int")
     *
     * @var int|null
     */
    public $id;

    /**
     * @TarsProperty(order=1, required=true, type="string")
     *
     * @var string|null
     */
    public $name;
}
