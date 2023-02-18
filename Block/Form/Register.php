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

namespace Deloitte\SocialLogin\Block\Form;

/**
 * Class Register
 *
 * @package Deloitte\SocialLogin\Block\Form
 */
class Register extends \Magento\Customer\Block\Form\Register
{
    /**
     * @return $this
     */
    protected function _prepareLayout()
    {
        return $this;
    }
}
