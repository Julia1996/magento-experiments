define([
    'jquery'
], function ($) {
    'use strict';
    return function (config, element) {
        $(element).click(function() {
            alert(config.alert_text);
        });
    }
});