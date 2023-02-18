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

var config = {
    paths: {
        socialProvider: 'Deloitte_SocialLogin/js/provider',
        socialPopupForm: 'Deloitte_SocialLogin/js/popup'
    },
    map: {
        '*': {
            'Magento_Checkout/js/proceed-to-checkout': 'Deloitte_SocialLogin/js/proceed-to-checkout'
        }
    }
};
