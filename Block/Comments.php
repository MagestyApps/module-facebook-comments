<?php

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

    protected $_coreRegistry;

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

    public function getHref()
    {
        /** @todo remove debug */
        return 'https://developers.facebook.com/docs/plugins/comments#configurator';

        $product = $this->getProduct();

        $product->setDoNotUseCategoryId(true);
        $product->setRequestPath('');

        $url = $product->getProductUrl();

        return $url;
    }

    public function getColorScheme()
    {
        return $this->_helper->getColorScheme();
    }

    public function getNumPosts()
    {
        return $this->_helper->getNumPosts();
    }

    public function getOrderBy()
    {
        return $this->_helper->getOrderBy();
    }

    public function getWidth()
    {
        return $this->_helper->getWidth();
    }

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