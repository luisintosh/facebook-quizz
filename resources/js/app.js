
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('../theme/showtracker/vendor/jquery.cookie/jquery.cookie');
window.Swiper = require('../theme/showtracker/vendor/swiper/js/swiper');
require('./libs/jquery.restfulizer');
window.Dropzone = require('./libs/dropzone/dropzone');

// Init all datatables
$(document).ready(function () {
    $('.dt').DataTable();
});

// Page scripts
require('./scripts/quiz');
