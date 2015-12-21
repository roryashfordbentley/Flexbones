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