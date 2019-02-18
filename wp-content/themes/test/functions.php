<?php
    add_action('wp_enqueue_scripts','test_media');
    add_action('after_setup_theme','test_menu');
    add_action('widgets_init','test_widgets');



    function test_media(){
        wp_enqueue_style('test_style',get_stylesheet_uri());
        wp_enqueue_script('test_script',get_template_directory_uri() . '/assets/js/script.js',['jquery'],null, true);
        wp_enqueue_script('test_jquery',get_template_directory_uri() . '/assets/js/jquery.js',[],null, true);
    }

    function test_menu(){

        register_nav_menu("top", "Верхнее");
        register_nav_menu("footer", "Для подвала");
        add_theme_support( 'post-thumbnails');
        add_theme_support( 'title-tag');

    }
    function test_widgets(){
        register_sidebar([
            'name' => 'Sidebar Right',
            'id' => 'sidebar-right',
            'description' => 'Правая колонка','before_widget' => '<li id="%1$s" class="widget %2$s">',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => "</div>\n"
        ]);
        register_sidebar([
            'name' => 'Sidebar Left',
            'id' => 'sidebar-left',
            'description' => 'Левая колонка',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => "</div>\n"
        ]);
    }
