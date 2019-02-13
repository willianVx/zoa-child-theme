<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
        wp_enqueue_script('custom_render_logo', get_stylesheet_directory_uri() . '/js/custom_render_logo.js','jquery', 1.0, true);
        wp_enqueue_script('global_bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.js','jquery', 1.4, true);
        wp_enqueue_script('global_bootstrap.main', get_stylesheet_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js','jquery', 1.4, true);
        wp_enqueue_script('global_modal_subscribeform', get_stylesheet_directory_uri() . '/js/global_modal_subscribeform.js','jquery', 1.4, true);
        wp_enqueue_script('zoa_custom_click_drag_scroll', get_stylesheet_directory_uri() . '/zoa-child-custom/js/click_and_drag_scroll.js','jquery', 1.4, true);
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION
require ('zoa-child-custom/child-footer.php');
require ('zoa-child-custom/modal_subscribeform.php');
//require ('zoa-child-custom/zoa-child_custom_content.php');
require ('zoa-child-custom/zoa-child-load-post.php');

//Carrega template para páginas customizadas
/*
function zoa_child_custom_content_init(){
    $dir = plugin_dir_path( __FILE__ );
    $page = get_page_by_title('news');
    if (is_page($page->ID)) {
        include($dir."/zoa-child-custom/zoa-child_custom_content.php");
    }
}
add_action( 'the_content', 'zoa_child_custom_content_init');
*/
function zoa_child_custom_content($content){
    $page = get_page_by_title('news');
    if (is_page($page->ID)) {
        $content = conteudo_news();
    }
    return $content;
}
add_filter('the_content', 'zoa_child_custom_content');


//Carrega tamanho personalizado para imagens 
add_action( 'after_setup_theme', 'zoa_img_theme_setup' );
function zoa_img_theme_setup() {
    add_image_size( 'instaarts-custom-size', 720, 720); // (cropped)
}