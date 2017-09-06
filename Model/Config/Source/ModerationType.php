<?php
/**
 * Copyright © 2016 MagestyApps. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagestyApps\FBComments\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;
use MagestyApps\FBComments\Helper\Data;

class ModerationType implements OptionSourceInterface
{
    public function toOptionArray()
    {
        return [
            [
                'value' => Data::MODERATION_TYPE_NONE,
                'label' => __('No')
            ],
            [
                'value' => Data::MODERATION_TYPE_APP,
                'label' => __('via Facebook Application')
            ],
            [
                'value' => Data::MODERATION_TYPE_ACCOUNT,
                'label' => __('via Facebook Account')
            ],
        ];
    }
}
