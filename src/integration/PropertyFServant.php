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

namespace kuiper\tars\integration;

use kuiper\tars\annotation\TarsClient;
use kuiper\tars\annotation\TarsParameter;
use kuiper\tars\annotation\TarsReturnType;

/**
 * @TarsClient("tars.tarsproperty.PropertyObj")
 */
interface PropertyFServant
{
    /**
     * 上报属性统计信息   Prop = property.
     *
     * @tars-param statmsg,             上报信息
     * @tars-return int,                返回0表示成功
     *
     * @TarsParameter(name="statmsg", type="map<StatPropMsgHead,StatPropMsgBody>")
     * @TarsReturnType("int")
     *
     * @param \kuiper\tars\type\StructMap $statmsg
     *
     * @return int
     */
    public function reportPropMsg($statmsg): int;
}
