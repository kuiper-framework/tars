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

namespace kuiper\tars\server\servant;

use kuiper\tars\annotation\TarsProperty;

final class TarsFile
{
    /**
     * @TarsProperty(order=0, required=true, type="string")
     *
     * @var string|null
     */
    public $name;

    /**
     * @TarsProperty(order=1, required=true, type="string")
     *
     * @var string|null
     */
    public $md5;

    /**
     * @TarsProperty(order=2, required=false, type="string")
     *
     * @var string|null
     */
    public $content;
}
