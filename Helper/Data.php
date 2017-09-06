<?php
/**
 * Copyright © 2017 MagestyApps. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagestyApps\FBComments\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{
    const CONFIG_PATH_ENABLED       = 'magestyapps_fbcomments/general/enabled';
    const CONFIG_PATH_MODERATION_TYPE = 'magestyapps_fbcomments/general/moderation_type';
    const CONFIG_PATH_APP_ID        = 'magestyapps_fbcomments/general/app_id';
    const CONFIG_PATH_ADMINS        = 'magestyapps_fbcomments/general/admins';
    const CONFIG_PATH_POSITION      = 'magestyapps_fbcomments/design/block_position';
    const CONFIG_PATH_COLOR_SCHEME  = 'magestyapps_fbcomments/design/color_scheme';
    const CONFIG_PATH_NUM_POSTS     = 'magestyapps_fbcomments/design/num_posts';
    const CONFIG_PATH_ORDER_BY      = 'magestyapps_fbcomments/design/order_by';
    const CONFIG_PATH_WIDTH         = 'magestyapps_fbcomments/design/width';

    const MODERATION_TYPE_NONE      = 0;
    const MODERATION_TYPE_APP       = 1;
    const MODERATION_TYPE_ACCOUNT   = 2;

    const POSITION_AFTER_ALL                = 'after_all';
    const POSITION_AFTER_DESCRIPTION        = 'after_description';
    const POSITION_AFTER_SHORT_DESCRIPTION  = 'after_short_descr';
    const POSITION_TAB                      = 'tab';

    const COLOR_SCHEME_DARK     = 'dark';
    const COLOR_SCHEME_LIGHT    = 'light';

    const ORDER_BY_SOCIAL       = 'social';
    const ORDER_BY_REVERSE_TIME = 'reverse_time';
    const ORDER_BY_TIME         = 'time';

    /**
     * Get "Enable" setting
     *
     * @return bool
     */
    public function isEnabled()
    {
        return $this->scopeConfig->isSetFlag(self::CONFIG_PATH_ENABLED, 'store');
    }

    /**
     * Get "Moderate Reviews" setting
     *
     * @return mixed
     */
    public function getModerationType()
    {
        return $this->scopeConfig->getValue(self::CONFIG_PATH_MODERATION_TYPE, 'store');
    }

    /**
     * Get "Application ID" setting
     *
     * @return mixed
     */
    public function getAppId()
    {
        return $this->scopeConfig->getValue(self::CONFIG_PATH_APP_ID, 'store');
    }

    /**
     * Get "Admins" setting
     *
     * @return mixed
     */
    public function getAdmins()
    {
        return explode(',', $this->scopeConfig->getValue(self::CONFIG_PATH_ADMINS, 'store'));
    }

    /**
     * Get "Block Position" setting
     *
     * @return mixed
     */
    public function getBlockPosition()
    {
        return $this->scopeConfig->getValue(self::CONFIG_PATH_POSITION, 'store');
    }

    /**
     * Get "Color Scheme" setting
     *
     * @return mixed
     */
    public function getColorScheme()
    {
        return $this->scopeConfig->getValue(self::CONFIG_PATH_COLOR_SCHEME, 'store');
    }

    /**
     * Get "Number of Comments" setting
     *
     * @return mixed
     */
    public function getNumPosts()
    {
        return $this->scopeConfig->getValue(self::CONFIG_PATH_NUM_POSTS, 'store');
    }

    /**
     * Get "Default Order By" setting
     *
     * @return mixed
     */
    public function getOrderBy()
    {
        return $this->scopeConfig->getValue(self::CONFIG_PATH_ORDER_BY, 'store');
    }

    /**
     * Get "Width" setting
     *
     * @return mixed
     */
    public function getWidth()
    {
        return $this->scopeConfig->getValue(self::CONFIG_PATH_WIDTH, 'store');
    }
}
