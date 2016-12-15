/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import {ajax} from "jquery";

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

Vue.component('example', require('./components/Example.vue'));
// Vue.component('acheckbox', require('./components/Acheckbox.vue'));

const app = new Vue({
    el: '#app',
    // data: {
    //     message: 'Hello Vue.js!'
    // }
});

$('.vote-up-off').click(function () {
    $(this).toggleClass('vote-up-on');
    $(".vote-down-on").addClass('vote-down-off').removeClass('vote-down-on');
});

$('.vote-down-off').click(function () {
    $(this).toggleClass('vote-down-on');
    $(".vote-up-on").addClass('vote-up-off').removeClass('vote-up-on');
});

$(document).ready(function () {
    $('.vote-up-off').on('click', function () {
        let data = $("#id").val();
        ajax({
            url: upvote_url + data,
        }).done(function(data) {
            $('#votes').text(data);
            console.log(data);
        });
    });
    $('.vote-down-off').on('click', function () {
        let data = $("#id").val();
        ajax({
            url: downvote_url + data,
        }).done(function(data) {
            console.log(data);
            $('#votes').text(data);
        });
    });
});
