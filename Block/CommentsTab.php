<?php
/**
 * Copyright © 2016 MagestyApps. All rights reserved.
 *  * See COPYING.txt for license details.
 */

namespace MagestyApps\FBComments\Block;

use Magento\Framework\View\Element\Template;
use MagestyApps\FBComments\Helper\Data;

class CommentsTab extends Comments
{
    protected function _toHtml()
    {
        if ($this->_helper->getBlockPosition() != Data::POSITION_TAB) {
            return '';
        }

        return parent::_toHtml();
    }

}