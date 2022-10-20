<!DOCTYPE html>
<html <?php language_attributes( ); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class( 'l-page-layout' );?>>
<?php wp_body_open(); ?>
    <button id="menu-button" class="p-menu-button js-menu">Menu</button>


    <div class="l-wrapper">
        <div id="wrapper" class="l-content-wrapper">
            <header class="l-header p-header">
                <h1 class="p-header__logo">
                    <a href="<?php echo esc_url( home_url()); ?>"><?php bloginfo( 'name' ); ?></a>
                </h1>
                <?php get_search_form(); ?>
            </header>