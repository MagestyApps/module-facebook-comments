<?php
/**
 * Copyright © 2016 MagestyApps. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagestyApps\FBComments\Model\Config\Source;

use MagestyApps\FBComments\Helper\Data;

class ColorScheme
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