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

namespace Deloitte\SocialLogin\Plugin\CustomerData;

use Magento\Checkout\CustomerData\Cart as CustomerCart;
use Deloitte\SocialLogin\Helper\Data as HelperData;

/**
 * Class Cart
 *
 * @package Deloitte\SocialLogin\Plugin\CustomerData
 */
class Cart
{
    /**
     * @var HelperData
     */
    protected $_helperData;

    /**
     * Cart constructor.
     *
     * @param HelperData $helperData
     */
    public function __construct(HelperData $helperData)
    {
        $this->_helperData = $helperData;
    }

    /**
     * @param CustomerCart $subject
     * @param $result
     *
     * @return mixed
     */
    public function afterGetSectionData(CustomerCart $subject, $result)
    {
        if ($this->_helperData->isEnabled() && $this->_helperData->isReplaceAuthModal()) {
            $result['isReplaceAuthModal'] = $this->_helperData->isReplaceAuthModal();
        }

        return $result;
    }
}
