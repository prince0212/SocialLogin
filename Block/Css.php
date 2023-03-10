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

namespace Deloitte\SocialLogin\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Deloitte\SocialLogin\Helper\Data as DataHelper;

/**
 * Class Css
 *
 * @package Deloitte\SocialLogin\Block
 */
class Css extends Template
{
    /**
     * @type DataHelper
     */
    protected $_helper;

    /**
     * Css constructor.
     *
     * @param Context $context
     * @param DataHelper $helper
     * @param array $data
     */
    public function __construct(
        Context $context,
        DataHelper $helper,
        array $data = []
    ) {
        $this->_helper = $helper;

        parent::__construct($context, $data);
    }

    /**
     * @return $this
     */
    protected function _prepareLayout()
    {
        if ($this->_helper->isEnabled()) {
            if ($this->_helper->getPopupLogin()) {
                $this->pageConfig->addPageAsset('Deloitte_SocialLogin::css/style.css');
                $this->pageConfig->addPageAsset('Deloitte_SocialLogin::css/grid.css');
                $this->pageConfig->addPageAsset('Deloitte_SocialLogin::css/font-awesome.min.css');
                $this->pageConfig->addPageAsset('Deloitte_SocialLogin::css/magnific-popup.css');
            } elseif (in_array(
                $this->_request->getFullActionName(),
                ['customer_account_login', 'customer_account_create', 'customer_account_index']
            )
            ) {
                $this->pageConfig->addPageAsset('Deloitte_SocialLogin::css/style.css');
                $this->pageConfig->addPageAsset('Deloitte_SocialLogin::css/font-awesome.min.css');
            }
        }

        return $this;
    }

    /**
     * @return DataHelper
     */
    public function helper()
    {
        return $this->_helper;
    }
}
