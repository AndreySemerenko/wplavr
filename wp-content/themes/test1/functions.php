<?php
add_action('wp_enqueue_scripts','test_media');
add_action('after_setup_theme','test_menu');
add_action('widgets_init','test_widgets');



function test_media() {
    wp_enqueue_style( 'test1_style', get_stylesheet_uri());
    wp_enqueue_style( 'slider', get_template_directory_uri() . '/assets/css/coin-slider.css' );
    wp_enqueue_script( 'script1', get_template_directory_uri() . '/assets/js/cufon-yui.js', [], null, true );
    wp_enqueue_script( 'script2', get_template_directory_uri() . '/assets/js/cufon-times.js', [], null, true );
    wp_enqueue_script( 'script3', get_template_directory_uri() . '/assets/js/jquery-1.4.2.min.js', [], null, true );
    wp_enqueue_script( 'script4', get_template_directory_uri() . '/assets/js/script.js',['jquery'], null, true );
    wp_enqueue_script( 'script5', get_template_directory_uri() . '/assets/js/coin-slider.min.js', [], null, true );
}
function test_menu(){
    register_nav_menu("top", "Верхнее");
    add_theme_support( 'post-thumbnails');
    add_theme_support( 'title-tag');
}
function test_widgets(){
    register_sidebar([
        'name' => 'Sidebar Right',
        'id' => 'sidebar-right',
        'description' => 'Правая колонка',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => "</div>\n"
    ]);}