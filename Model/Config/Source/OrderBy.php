<?php
/**
 * Copyright © 2017 MagestyApps. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagestyApps\FBComments\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;
use MagestyApps\FBComments\Helper\Data;

class OrderBy implements OptionSourceInterface
{
    public function toOptionArray()
    {
        return [
            [
                'value' => Data::ORDER_BY_SOCIAL,
                'label' => __('Social')
            ],
            [
                'value' => Data::ORDER_BY_REVERSE_TIME,
                'label' => __('Reverse Time')
            ],
            [
                'value' => Data::ORDER_BY_TIME,
                'label' => __('Time')
            ]
        ];
    }
}
