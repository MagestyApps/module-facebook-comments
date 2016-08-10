<?php
/**
 * Copyright © 2016 MagestyApps. All rights reserved.
 *  * See COPYING.txt for license details.
 */

namespace MagestyApps\FBComments\Model\Config\Source;

use MagestyApps\FBComments\Helper\Data;

class OrderBy
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