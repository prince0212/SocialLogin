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
 * Class Popup
 *
 * @package Deloitte\SocialLogin\Model\System\Config\Source
 */
class Popup implements ArrayInterface
{
    const POPUP_LOGIN = 'popup_login';

    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => '', 'label' => __('None')],
            ['value' => self::POPUP_LOGIN, 'label' => __('Popup Login')]
        ];
    }
}
