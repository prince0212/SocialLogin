<?php
/**
 * Deloitte
 *
 * NOTICE OF LICENSE
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category  Deloitte
 * @package   Deloitte_SocialLogin
 */

namespace Deloitte\SocialLogin\Model\System\Config\Source;

use Magento\Framework\Option\ArrayInterface;

/**
 * Class Position
 *
 * @package Deloitte\SocialLogin\Model\System\Config\Source
 */
class Position implements ArrayInterface
{
    const PAGE_LOGIN  = 1;
    const PAGE_CREATE = 2;
    const PAGE_POPUP  = 3;
    const PAGE_AUTHEN = 4;

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => '', 'label' => __('-- Please Select --')],
            ['value' => self::PAGE_LOGIN, 'label' => __('Customer Login Page')],
            ['value' => self::PAGE_CREATE, 'label' => __('Customer Create Page')],
            ['value' => self::PAGE_POPUP, 'label' => __('Social Login Popup')],
            ['value' => self::PAGE_AUTHEN, 'label' => __('Customer Authentication Popup')]
        ];
    }
}
