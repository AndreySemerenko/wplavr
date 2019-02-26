<?php

include_once (__DIR__) . "/inc/test-widget-recent-posts.php";

add_action('wp_enqueue_scripts', 'test_media');
add_action('after_setup_theme', 'test_menu');
add_action('widgets_init', 'test_widgets');


add_filter('the_content', 'change_content');
add_filter('pre_get_document_title', 'change_title');
add_filter('widget_text', 'do_shortcode');
add_shortcode('test_recent', 'test_recent');


function test_recent($atts)
{
    $atts = shortcode_atts(array(
        "cnt" => 5
    ),$atts);
    $str = "";
    $args = array(
        'numberposts' => $atts['cnt'],
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'post'
    );
    global $post;
    $posts = get_posts();

    foreach( $posts as $post ){
        setup_postdata();
        $href = get_the_permalink();
        $title = get_the_title();
        $str .= "<div><a href='$href'>$title</a></div>";

        // формат вывода the_title() ...
    }

    wp_reset_postdata();
    return $str . '--- заголовки записей'; 
}


    function test_media()
    {
        wp_enqueue_style('test1_style', get_stylesheet_uri());
        wp_enqueue_style('slider', get_template_directory_uri() . '/assets/css/coin-slider.css');
        wp_enqueue_script('script1', get_template_directory_uri() . '/assets/js/cufon-yui.js', [], null, true);
        wp_enqueue_script('script2', get_template_directory_uri() . '/assets/js/cufon-times.js', [], null, true);
        wp_enqueue_script('script5', get_template_directory_uri() . '/assets/js/coin-slider.min.js', [], null, true);
    }

    function test_menu()
    {
        register_nav_menu("top", "Верхнее");
        register_nav_menu("right-top", "Sidebar Menu");
        register_nav_menu("right-bottom", "Sponsors");

    }

    function test_widgets()
    {
        register_sidebar([
            'name' => 'Sidebar Right',
            'id' => 'sidebar-right',
            'description' => 'Правая колонка',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => "</div>\n"
        ]);
        register_widget('Test_Widget_Recent_Posts');
    }

    function change_content($content)
    {
        return $content .= 'фильтр отработал';
    }

    function change_title($title)
    {
        return $title;
    }