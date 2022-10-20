<?php echo str_replace('sub-menu', 'p-side-menu__sub', wp_nav_menu(
    array(
        'theme_location' => 'category_nav',
        'menu_class'    => 'p-side-menu',
        'container_id'  => 'side-nav',
        'container_class'   => 'p-side-nav',
        'echo' => false,
    ))
);?>
