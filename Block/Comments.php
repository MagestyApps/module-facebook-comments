<?php
/**
 * Copyright © 2016 MagestyApps. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagestyApps\FBComments\Block;

use Magento\Catalog\Model\Product;
use Magento\Framework\View\Element\Template;
use MagestyApps\FBComments\Helper\Data;
use \Magento\Framework\Registry;

class Comments extends Template
{
    protected $_template = 'comments.phtml';

    /**
     * @var Data
     */
    protected $_helper;

    /**
     * @var Registry
     */
    protected $_coreRegistry;

    /**
     * Comments constructor.
     *
     * @param Template\Context $context
     * @param Data $helper
     * @param Registry $coreRegistry
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        Data $helper,
        Registry $coreRegistry,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->_helper = $helper;
        $this->_coreRegistry = $coreRegistry;
    }

    /**
     * @return Product|null
     */
    public function getProduct()
    {
        return $this->_coreRegistry->registry('current_product');
    }

    /**
     * Get url for facebook comments
     *
     * @return string
     */
    public function getHref()
    {
        //// uncomment for debug purposes
        //return 'https://developers.facebook.com/docs/plugins/comments#configurator';

        $product = $this->getProduct();

        $product->setDoNotUseCategoryId(true);
        $product->setRequestPath('');

        $url = $product->getProductUrl();

        return $url;
    }

    /**
     * @return mixed
     */
    public function getColorScheme()
    {
        return $this->_helper->getColorScheme();
    }

    /**
     * @return mixed
     */
    public function getNumPosts()
    {
        return $this->_helper->getNumPosts();
    }

    /**
     * @return mixed
     */
    public function getOrderBy()
    {
        return $this->_helper->getOrderBy();
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->_helper->getWidth();
    }

    /**
     * @return string
     */
    protected function _toHtml()
    {
        if (!$this->_helper->isEnabled()
            || !$this->getProduct()
            || !$this->getHref()
        ) {
            return '';
        }

        return parent::_toHtml();
    }
}