<?php

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
    add_theme_support( 'post-thumbnails' );
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

function wpb_widgets_init() {

    register_sidebar(array(
        'name' => 'Custom Header Widget Area',
        'id' => 'custom-header-widget',
        'before_widget' => '<div class="chw-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="chw-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => 'Footer Sidebar 1',
        'id' => 'footer-sidebar-1',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => 'O nas',
        'id' => 'o-nas',
        'description' => 'O nas',
        'before_widget' => '<div id="one" class="two">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));
    register_sidebar(array(
        'name' => 'O naso',
        'id' => 'studio-text',
        'description' => 'Studia',
        'before_widget' => '<div id="one" class="two">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));
}

add_action('widgets_init', 'wpb_widgets_init', 0);
?>

<!--  -->