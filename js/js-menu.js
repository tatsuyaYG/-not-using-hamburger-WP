'use strict';

jQuery(document).ready(function ($) {
    var nav = $('#side-nav');
    var back = $('#wrapper');
    var gray = $('#grayOut');
    var button = $('#menu-button');
    var footer = $('#footer');

    $(window).on('load',function(){
        if (window.matchMedia('(min-width:1250px)').matches) {
            button.prop('disabled', true);
        } else {
            button.prop('disabled', false);
        };
    });

    $(window).resize(function () {
        if (window.matchMedia('(min-width:1250px)').matches) {
            button.prop('disabled', true);
        } else {
            button.prop('disabled', false);
        };
    });

    $('.js-menu').on('click', function () {
        if (nav.hasClass('is-open')) {
            nav.removeClass('is-open');
            back.removeClass('is-open');
            gray.removeClass('is-open');
            button.removeClass('is-open');
            footer.removeClass('is-open');
        } else {
            nav.addClass('is-open');
            back.addClass('is-open');
            gray.addClass('is-open');
            button.addClass('is-open');
            footer.addClass('is-open');
        };
    });
});