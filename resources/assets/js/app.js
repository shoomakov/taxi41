// import router from './routes';
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('animate.css');
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

$('.m-phone').css('font-size', '30px');
$('#driver_line').css('height', '30px');

// $('#home-app-download')

$('#city_block').fadeOut();
$('#city_block').fadeIn(10000);

setInterval(function() {
  $(".m-phone").addClass("animated pulse");
}, 15000);
setInterval(function() {
  $(".m-phone").removeClass("animated pulse");
}, 16000);

const contact_form    = $('#contact_form3');
const success_message = $('#success-message');
const error_name      = $('#error-name');
const error_email     = $('#error-email');
const form_group      = $('.form-group');
success_message.hide();

contact_form.on("submit",function(event){

  $('#button_submit').css('background-color', '#ddd');

  $.ajax({
    url: "/contact-us",
    type : "post",
    data : contact_form.serialize(),
    success: function() {
      console.log('ok');
      // console.log(contact_form.serialize());
      $('#button_submit').css('background-color', '#F7D802');

      success_message.show('slow');
    },
    error: function(e) {
      const error_object = JSON.parse(e.responseText);
      const name_of_object = _.findLastKey(error_object, function(o) { return o.length == 1; });

      switch (name_of_object) {
        case 'name':
          let error_message = _.startCase(JSON.stringify(error_object.name));
          console.log(error_message);
          $(`#${name_of_object}`).addClass("has-error");
          error_name.html(error_message).show('slow');
          break;
        case 'email':
          console.log(_.startCase(error_object.email));
          $(`#${name_of_object}`).addClass("has-error");
          error_email.html(_.startCase(error_object.email)).show('slow');
          break;
        case 'message':
          console.log(_.startCase(error_object.message));
          $(`#${name_of_object}`).addClass("has-error");
          $('#error-message').html(_.startCase(error_object.message)).show('slow');
          break;
        default:

      }
      console.log(error_object);
      console.log(e);
    }

  });
  event.preventDefault();
});


// Vue.component('example', require('./components/Modal.vue'));
//
// const app = new Vue({
//     el: '#app',
// });

// register modal component
// Vue.component('modal', {
//   template: '#modal-template'
// })
//
// // start app
// const app = new Vue({
//   el: '#app',
//   data: {
//     showModal: false
//   }
// })
