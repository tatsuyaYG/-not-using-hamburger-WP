<?php

function humburger_setup()
{
    add_filter('show_admin_bar', '__return_false');   //ツールバーの非表示
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caotion',
    ));
    add_theme_support('post-thumbnails'); //アイキャッチ機能の有効化
    add_theme_support('title-tag');   //ページごとのタイトル取得
    add_theme_support('menus');   //カスタムメニューの有効化
    add_image_size('archive_thumbnail',650,450,true);   //画像サイズ指定
    register_nav_menus(array(
        'footer_nav' => esc_html__('footer navigation', 'rtbread'),
        'category_nav' => esc_html__('category navigation', 'rtbread'),
    ));
}
add_action('after_setup_theme', 'humburger_setup');

//フロント：ブロックエディタ用のcss
function block_editor_css(){
        //ブロックエディタ用のスタイル機能をテーマに追加
        add_theme_support( 'editor-styles' );
        add_editor_style( '/css/editor-style.css' );//ブロックエディタ用のcss読み込み  
        add_editor_style( '/css/style.css' );
}
add_action( 'after_setup_theme', 'block_editor_css');
//管理画面のブロックエディタ用cssの設定
add_action('admin_enqueue_scripts',function($hook_suffix){
if ('post.php' === $hook_suffix || 'post-new.php' === $hook_suffix) {
        $uri = get_template_directory_uri() . "/css/editor-style.css";
        wp_enqueue_style("smart-style", $uri, array(), wp_get_theme()->get('Version'));
    }
});
//管理画面プロックエディタ用のjs
add_action('enqueue_block_editor_assets',function(){
    wp_enqueue_script('new-theme-editor-js', get_theme_file_uri('/js/editor.js'),[
        'wp-element',
        'wp-rich-text',
        'wp-editor',
    ]);
});

//カテゴリー説明文でHTMLタグを使う
remove_filter('pre_them_description', 'wp_filter_kses');
//カテゴリー説明文から自動で付与されるpタグを除去
remove_filter('term_description', 'wpautop');

//jQuery読み込み
function humburger_enqueue_scripts()
{
    wp_enqueue_script('jquery');
    wp_enqueue_script(
        'humburger-main-visual',
        get_template_directory_uri() . '/js/js-main-visual.js',
        array(),
        '1.0.0',
        true
    );
    wp_enqueue_script(
        'humburger-menu',
        get_template_directory_uri() . '/js/js-menu.js',
        array(),
        '1.0.0',
        true
    );
};
//リセットcss読み込み
wp_enqueue_style(
    'reset-css',
    'https://unpkg.com/destyle.css@3.0.2/destyle.min.css',
    array(),
    '1.0.0'
);
//GoogleFont読み込み
wp_enqueue_style(
    'googlefonts',
    'https://fonts.googleapis.com/css2?family=M+PLUS+Code+Latin:wght@100;200;300;400;500;600;700&family=M+PLUS+1:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap',
    array(),
    '1.0.0'
);
//FontAwesome読み込み
wp_enqueue_style(
    'font-awesome',
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css',
    array(),
    '1.0.0'
);
//style.css読み込み
wp_enqueue_style(
    'humburger-styles',
    get_template_directory_uri() . '/css/style.css',
    array(),
    '1.0.0'
);
//エディタブロック用css
wp_enqueue_style(
    'editor-styles',
    get_template_directory_uri() . '/css/editor-style.css',
    array(),
    '1.0.0'
);
add_action('wp_enqueue_scripts', 'humburger_enqueue_scripts');

//ページネーション全体のクラス名指定
function custom_wp_pagenavi()
{
    $args = array(
        'wrapper_tag' => 'nav',
        'wrapper_class' => 'p-page-move--number'
    );
    wp_pagenavi($args);
}
//ページネーション数字部分クラス名指定
function custom_wp_pagenavi_class($class_name)
{
    switch($class_name) {
        case 'current':
            $class_name = 'p-page-move--number__item c-button--cornerGray-brown p-page-move__active';
            break;
        case 'larger':
            $class_name = 'p-page-move--number__item c-button--cornerGray-white';
            break;
        case 'smaller':
            $class_name = 'p-page-move--number__item c-button--cornerGray-white';
            break;
    }
    return $class_name;
}
add_filter('wp_pagenavi_class_current', 'custom_wp_pagenavi_class');
add_filter('wp_pagenavi_class_larger', 'custom_wp_pagenavi_class');
add_filter('wp_pagenavi_class_smaller', 'custom_wp_pagenavi_class');

//footer部分メニュー
function add_additional_class_on_li( $classes, $item, $args )
    {
        if (isset($args -> add_li_class)) {
            $classes[] = $args -> add_li_class;
        }
        return $classes;
    }
add_filter( 'nav_menu_css_class', 'add_additional_class_on_li', 1,3 );

//ブロックエディタにcssを適用する
