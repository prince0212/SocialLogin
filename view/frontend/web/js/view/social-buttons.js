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
/*jshint browser:true jquery:true*/
/*global alert*/
define(
    [
        'jquery',
        'ko',
        'uiComponent',
        'socialProvider'
    ],
    function ($, ko, Component, socialProvider) {
        'use strict';

        /**
         * @type {{init: ko.bindingHandlers.socialButton.init}}
         */
        ko.bindingHandlers.socialButton = {
            init: function (element, valueAccessor, allBindings) {
                var config = {
                    url: allBindings.get('url'),
                    label: allBindings.get('label')
                };

                socialProvider(config, element);
            }
        };

        return Component.extend(
            {
                defaults: {
                    template: 'Deloitte_SocialLogin/social-buttons'
                },
                buttonLists: window.socialAuthenticationPopup,

                /**
                 * @returns {Array}
                 */
                socials: function () {
                    var socials = [];
                    $.each(
                        this.buttonLists, function (key, social) {
                            socials.push(social);
                        }
                    );

                    return socials;
                },

                /**
                 * @returns {boolean}
                 */
                isActive: function () {
                    return (typeof this.buttonLists !== 'undefined');
                }
            }
        );
    }
);
