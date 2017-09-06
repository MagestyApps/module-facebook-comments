<?php
/**
 * Copyright © 2017 MagestyApps. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagestyApps\FBComments\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\Locale\ResolverInterface;
use MagestyApps\FBComments\Helper\Data;

class Config extends Template
{
    /**
     * @var ResolverInterface
     */
    private $localeResolver;

    /**
     * @var Data
     */
    private $helper;

    /**
     * Js constructor.
     * @param Template\Context $context
     * @param ResolverInterface $localeResolver
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        ResolverInterface $localeResolver,
        Data $helper,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->localeResolver = $localeResolver;
        $this->helper = $helper;
    }

    /**
     * @return string
     */
    public function getPluginLocale()
    {
        return $this->localeResolver->getLocale();
    }

    /**
     * @return mixed
     */
    public function getAppId()
    {
        return $this->helper->getAppId();
    }

    /**
     * Get url for JS snippet
     *
     * @return string
     */
    public function getJsUrl()
    {
        $url = "//connect.facebook.net/";
        $url .= $this->getPluginLocale();
        $url .= "/sdk.js#xfbml=1&version=v2.10";

        if ($appId = $this->getAppId()) {
            $url .= "&appId=".$appId;
        }

        return $url;
    }
}
