'use strict';

jQuery(window).on('load',function(){
    if(window.matchMedia('(min-width:680px)').matches){
        jQuery('.js-main-visual').children('img').attr('src','wp-content/themes/humburger-WP/image/main-visual.jpg' );
    }else{
        jQuery('.js-main-visual').children('img').attr('src','wp-content/themes/humburger-WP/image/main-visual-SP.jpg');
    };
});

jQuery(window).resize(function($){
    if(window.matchMedia('(min-width:680px)').matches){
        jQuery('.js-main-visual').children('img').attr('src','wp-content/themes/humburger-WP/image/main-visual.jpg' );
    }else{
        jQuery('.js-main-visual').children('img').attr('src','wp-content/themes/humburger-WP/image/main-visual-SP.jpg');
    };
});