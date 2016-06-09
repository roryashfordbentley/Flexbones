<?php
/**
 * Flexbones Theme Setup
 */

function flexbones_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array( 
        'comment-list', 
        'comment-form', 
        'search-form', 
        'gallery', 
        'caption' 
    ));

    register_nav_menus(array(
        'main_menu' => 'main menu'
    ));

    register_sidebar(array('id'=>'sidebar-1')); 
}

add_action('after_setup_theme', 'flexbones_setup');

/**
 * Admin CSS
 *
 * Enque an additional admin stylesheet
 */

add_action('admin_enqueue_scripts', 'admin_css');
function admin_css() {
    wp_enqueue_style('admin-css', get_template_directory_uri() . '/style-admin.css');
}

