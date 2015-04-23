<?php
/**
 * Flexbones Theme Setup
 */

function flexbones_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'gallery',
        'caption'
    ));
    register_nav_menus(array(
        'main_menu' => 'main menu'
    ));
    register_sidebar();
}

add_action('after_setup_theme', 'flexbones_setup');


/**
 * Shortcut to the assets folder
 * easier to read than get_stylesheet_directory_uri() . '/assets/folder'
 * direct output and get_output
 */

function get_assets($subdir){
    return get_stylesheet_directory_uri() .'/assets'.($subdir ? '/'. $subdir : '');
}

function assets($subdir){
    echo get_stylesheet_directory_uri() .'/assets'.($subdir ? '/'. $subdir : '');
}

add_image_size( 'tile', 300, 300, true );
add_image_size( 'tile--stacked', 300, 600, true );
add_image_size( 'billboard', 1200, 360, true );


/**
 * Split number value with commas
 * echo format_number(15000); # 15,000
 */
function format_number($number, $fractional=false) {
    if ($fractional) {
        $number = sprintf('%.2f', $number);
    }
    while (true) {
        $replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
        if ($replaced != $number) {
            $number = $replaced;
        } else {
            break;
        }
    }
    return $number;
}