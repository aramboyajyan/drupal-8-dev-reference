
/**
 * @file
 * Contains the JS for our sample assets module.
 */

(function ($, Drupal, drupalSettings) {
  "use strict";

  Drupal.behaviors.sampleAssetsBundleJS = {
    attach: function (context, settings) {
      console.log('sample_assets.bundle.js is loaded');
    }
  };

})(jQuery, Drupal, drupalSettings);
