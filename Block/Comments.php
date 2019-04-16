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
    protected $helper;

    /**
     * @var Registry
     */
    protected $coreRegistry;

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
        $this->helper = $helper;
        $this->coreRegistry = $coreRegistry;
    }

    /**
     * @return Product|null
     */
    public function getProduct()
    {
        return $this->coreRegistry->registry('current_product');
    }

    /**
     * Get url for facebook comments
     *
     * @return string
     */
    public function getHref()
    {
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
        return $this->helper->getColorScheme();
    }

    /**
     * @return mixed
     */
    public function getNumPosts()
    {
        return $this->helper->getNumPosts();
    }

    /**
     * @return mixed
     */
    public function getOrderBy()
    {
        return $this->helper->getOrderBy();
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->helper->getWidth();
    }

    /**
     * @return string
     */
    protected function _toHtml()
    {
        if (!$this->helper->isEnabled()
            || !$this->getProduct()
            || !$this->getHref()
        ) {
            return '';
        }

        return parent::_toHtml();
    }
}
