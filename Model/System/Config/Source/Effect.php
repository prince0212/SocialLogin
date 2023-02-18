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
 * Class Effect
 *
 * @package Deloitte\SocialLogin\Model\System\Config\Source
 */
class Effect implements ArrayInterface
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'mfp-zoom-in', 'label' => __('Zoom')],
            ['value' => 'mfp-newspaper', 'label' => __('Newspaper')],
            ['value' => 'mfp-move-horizontal', 'label' => __('Horizontal move')],
            ['value' => 'mfp-move-from-top', 'label' => __('Move from top')],
            ['value' => 'mfp-3d-unfold', 'label' => __('3D unfold')],
            ['value' => 'mfp-zoom-out', 'label' => __('Zoom-out')]
        ];
    }
}
