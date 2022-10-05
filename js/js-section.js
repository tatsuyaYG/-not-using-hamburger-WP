'use strict';

$(function () {
    var takeout = $('#section1');
    var eatin = $('#section2');
    let padding;
    $(window).resize(function () {
        console.log('テイクアウト：' + takeout.width() + 'イートイン' + eatin.width());
    });
});