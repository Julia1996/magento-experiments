define([
    'jquery',
    'uiComponent',
    'ko'
], function ($, Component, ko){
    'use strict';
    return Component.extend({
        defaults: {
            template: 'Training_ModuleWithUI/component1',
            canDisplay: false,
            // canTextBeDisplayed: false,
            canTextBeDisplayedDefault: false
        },
        canTextBeDisplayed: ko.observable(false),
        initialize: function() {
            this._super();
            this.canTextBeDisplayed(this.canTextBeDisplayedDefault);
            return this;
        },
        environment: 'default',
        getEnvironment: function () {
            return this.environment;
        },
        canDisplay2: false,
        getTemplate2: function() {
            return 'Training_ModuleWithUI/component_custom';
        },
        getTemplate3: function() {
            return 'Training_ModuleWithUI/component_custom_custom';
        },
        clickShowHide: function() {
            // this.canTextBeDisplayed = !this.canTextBeDisplayed; // as regular variable
            this.canTextBeDisplayed(!this.canTextBeDisplayed()); // as observable
        }
    });
});
