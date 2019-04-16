<?php
/**
 * Copyright © 2017 MagestyApps. All rights reserved.
 *  * See COPYING.txt for license details.
 */

namespace MagestyApps\FBComments\Block;

use Magento\Framework\View\Element\Template;
use MagestyApps\FBComments\Helper\Data;

class CommentsTab extends Comments
{
    /**
     * @return string
     */
    protected function _toHtml()
    {
        if ($this->helper->getBlockPosition() != Data::POSITION_TAB) {
            return '';
        }

        return parent::_toHtml();
    }
}
