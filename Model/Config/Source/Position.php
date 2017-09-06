<?php
/**
 * Copyright © 2016 MagestyApps. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagestyApps\FBComments\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;
use MagestyApps\FBComments\Helper\Data;

class Position implements OptionSourceInterface
{
    public function toOptionArray()
    {
        return [
            [
                'value' => Data::POSITION_AFTER_ALL,
                'label' => __('Bottom of the page')
            ],
            [
                'value' => Data::POSITION_AFTER_DESCRIPTION,
                'label' => __('After product description')
            ],
            [
                'value' => Data::POSITION_AFTER_SHORT_DESCRIPTION,
                'label' => __('After short description')
            ],
            [
                'value' => Data::POSITION_TAB,
                'label' => __('In a separate tab')
            ]
        ];
    }
}
