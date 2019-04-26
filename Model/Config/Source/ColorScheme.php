<?php
/**
 * Copyright © 2019 MagestyApps. All rights reserved.
 * See LICENSE.txt for license details.
 */

namespace MagestyApps\FBComments\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;
use MagestyApps\FBComments\Helper\Data;

class ColorScheme implements OptionSourceInterface
{
    public function toOptionArray()
    {
        return [
            [
                'value' => Data::COLOR_SCHEME_DARK,
                'label' => __('Dark')
            ],
            [
                'value' => Data::COLOR_SCHEME_LIGHT,
                'label' => __('Light')
            ]
        ];
    }
}
