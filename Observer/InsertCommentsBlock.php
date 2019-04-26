<?php
/**
 * Copyright © 2019 MagestyApps. All rights reserved.
 * See LICENSE.txt for license details.
 */

namespace MagestyApps\FBComments\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;
use Magento\Framework\View\Layout;
use MagestyApps\FBComments\Helper\Data;

class InsertCommentsBlock implements ObserverInterface
{
    /**
     * @var Data
     */
    protected $_helper;

    /**
     * InsertCommentsBlock constructor.
     * @param Data $helper
     */
    public function __construct(Data $helper)
    {
        $this->_helper = $helper;
    }

    /**
     * Insert fb_comments block based on position setting
     * Observes 'core_layout_render_element' event
     *
     * @param Observer $observer
     * @return $this
     */
    public function execute(Observer $observer)
    {
        if (!$this->_helper->isEnabled()) {
            return $this;
        }

        /** @var Layout $layout */
        $layout = $observer->getEvent()->getLayout();
        $elName = $observer->getEvent()->getElementName();
        $transport = $observer->getEvent()->getTransport();

        $commentsBlock = $layout->createBlock('MagestyApps\FBComments\Block\Comments');

        if (!$commentsBlock->getProduct() || !$commentsBlock->getProduct()->getId()) {
            return $this;
        }

        if (($this->_helper->getBlockPosition() == Data::POSITION_AFTER_DESCRIPTION
                && $elName == 'product.info.details')
            || ($this->_helper->getBlockPosition() == Data::POSITION_AFTER_ALL
                && $elName == 'content.aside')
            || ($this->_helper->getBlockPosition() == Data::POSITION_AFTER_SHORT_DESCRIPTION
                && $elName == 'product.info.overview')
        ) {
            $output = $transport->getOutput();
            $transport->setData('output', $output . $commentsBlock->toHtml());
        }

        return $this;
    }
}
