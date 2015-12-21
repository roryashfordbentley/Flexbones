<?php 
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