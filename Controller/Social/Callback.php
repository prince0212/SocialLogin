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

namespace Deloitte\SocialLogin\Controller\Social;

use Hybrid_Endpoint;

/**
 * Class Callback
 *
 * @package Deloitte\SocialLogin\Controller\Social
 */
class Callback extends AbstractSocial
{
    /**
     * @inheritdoc
     */
    public function execute()
    {
        $param = $this->getRequest()->getParams();

        if (isset($param['live.php'])) {
            $request = array_merge($param, ['hauth_done' => 'Live']);
        }
        if ($this->checkRequest('hauth_start', false)
            && (($this->checkRequest('error_reason', 'user_denied')
                    && $this->checkRequest('error', 'access_denied')
                    && $this->checkRequest('error_code', '200')
                    && $this->checkRequest('hauth_done', 'Facebook'))
                || ($this->checkRequest('hauth_done', 'Twitter') && $this->checkRequest('denied')))
        ) {
            return $this->_appendJs(sprintf('<script>window.close();</script>'));
        }
        if (isset($request)) {
            Hybrid_Endpoint::process($request);
        }

        Hybrid_Endpoint::process();
    }

    /**
     * @param $key
     * @param null $value
     *
     * @return bool|mixed
     */
    public function checkRequest($key, $value = null)
    {
        $param = $this->getRequest()->getParam($key, false);

        if ($value) {
            return $param === $value;
        }

        return $param;
    }
}
