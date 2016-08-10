<?php
/**
 * Copyright © 2016 MagestyApps. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagestyApps\FBComments\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\Locale\ResolverInterface;

class Js extends Template
{
    /**
     * @var ResolverInterface
     */
    protected $_localeResolver;

    /**
     * Js constructor.
     * @param Template\Context $context
     * @param ResolverInterface $localeResolver
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        ResolverInterface $localeResolver,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->_localeResolver = $localeResolver;
    }

    /**
     * @return string
     */
    public function getPluginLocale()
    {
        return $this->_localeResolver->getLocale();
    }
}