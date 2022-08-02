<?php

class wpb_widget extends WP_Widget {
    function __construct() {
        parent::__construct(
            'wp_widget', __('Wp_test_theme', 'wp_widget_domain'),
            array( 'description' => __('Trying to create a test widget on wordpress', 'wp_widget_domain') ),
        );
    }
    public function widget($args, $instance) {
        $title = apply_filters('widget_title', $instance['title']);
        echo $args['before_widget'];
        if ( !empty($title) );
    }
    public function form($instance) {

    }
    public function update($new_instance, $old_instance) {

    }

}

function nes_add_styles()
{
    // $version = wp_get_theme()->get('Version');
    wp_enqueue_style('nes_styles', "https://cdnjs.cloudflare.com/ajax/libs/nes.css/2.3.0/css/nes.min.css", array(), '2.3.0', 'all');
    wp_enqueue_style('nes_custom_styles', get_template_directory_uri() . "/style.css", array('nes_styles'), '1.0', 'all');
}

function nes_add_scripts() {
    $version = wp_get_theme()->get('Version');
    wp_register_script('nes_scripts', get_template_directory_uri() . "/assets/js/main.js", array(), $version, true);
}

function nes_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
}

function nes_menus() {
    $locations = array(
        'primary' => 'Primary Menu',
    );
    register_nav_menus($locations);
}

add_action('init', 'nes_menus');
add_action('after_setup_theme', 'nes_theme_support');
add_action('wp_enqueue_scripts', 'nes_add_styles');
add_action('wp_enqueue_scripts', 'nes_add_scripts');

?>
<!--  -->