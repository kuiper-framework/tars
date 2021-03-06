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

namespace kuiper\tars\annotation;

/**
 * @Annotation
 * @Target({"PROPERTY"})
 */
final class TarsProperty
{
    /**
     * @Required()
     *
     * @var string
     */
    public $type;

    /**
     * @Required()
     *
     * @var int
     */
    public $order;

    /**
     * @var bool
     */
    public $required;
}
