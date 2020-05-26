define([
  'jquery'
], function ($) {
  
  "use strict";
    return function (config, element) {
        console.log('i found attributes -> ',$("#additional > div").find(".col.label").length);
    };
});
