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

/**
 * get components
 *
 * checks that a component exists and returns the component
 * if it exists.
 *
 */

function get_component($component){

    if(empty($component)){
        echo '<div style="background: #f00; color: white;"><strong>Missing Argument.</strong> Pass the name of the component folder e.g. "header"</div>';
        return false;
    }

    $component_path = get_stylesheet_directory() . '/components/' . $component . '/index.php';

    if(!file_exists($component_path) ){
        echo '<div style="background: #f00; color: white;"><strong>Component '. $component .' does not exist.</strong> Check the name and path are correct. Path = '. $component_path .'</div>';
        return false;
    }

    require_once( get_stylesheet_directory() . '/components/' . $component . '/index.php');

    return true;
}

/**
 * Remove hints provided on incorrect user logins.
 */

add_filter( 'login_errors', 'no_wordpress_errors' );

function no_wordpress_errors(){
    return 'Incorrect login details.';
}

