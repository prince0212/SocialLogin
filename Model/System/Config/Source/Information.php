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
 * Class Information
 *
 * @package Deloitte\SocialLogin\Model\System\Config\Source
 */
class Information implements ArrayInterface
{
    const INFO_EMAIL = 'email';
    const INFOR_NAME = 'name';
    const INFOR_PW   = 'password';

    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => self::INFO_EMAIL, 'label' => __('Email')],
            ['value' => self::INFOR_NAME, 'label' => __('Name')],
            ['value' => self::INFOR_PW, 'label' => __('Password')]
        ];
    }
}
