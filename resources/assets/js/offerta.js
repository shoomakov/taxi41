window.$ = window.jQuery = require('jquery');
require('animate.css');

$('.m-phone').css('font-size', '30px');
setInterval(function() {
  $(".m-phone").addClass("animated pulse");
}, 15000);
setInterval(function() {
  $(".m-phone").removeClass("animated pulse");
}, 16000);
