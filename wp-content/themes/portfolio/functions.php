<?php
add_action('wp_enqueue_scripts', 'portfolio_media');
add_action('after_setup_theme', 'portfolio_menu');
add_filter('show_admin_bar', '__return_false');

function portfolio_media(){
    wp_enqueue_style('portfolio-style',get_stylesheet_uri());
    wp_enqueue_script('script3', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js', [], null, true);
    wp_enqueue_script('script4', get_template_directory_uri() . '/assets/js/script.js', ['jquery'], null, true);
    wp_enqueue_script('script5', get_template_directory_uri() . '/assets/js/ajax.js', ['jquery'], null, true);
    $translation_array = array( 'templateUrl' => get_template_directory_uri() );
    wp_localize_script( 'script5', 'object_name', $translation_array );

}
function portfolio_menu(){
    register_nav_menu( "portfolio-top", "навигация");
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support( 'post-formats', array('aside','gallery','image'));
}