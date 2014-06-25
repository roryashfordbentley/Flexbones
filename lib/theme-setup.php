<?php
/**
 * Flexbones Theme Setup
 */

function flexbones_setup() {
	add_theme_support('post-thumbnails');
	add_theme_support('html5', array('comment-list', 'comment-form', 'search-form'));
	//add_theme_support( 'automatic-feed-links' );
	//add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
	register_nav_menus(array('main_menu' => 'main menu'));
	register_sidebar();
}

add_action('after_setup_theme', 'flexbones_setup');

/**
 * Shortcut to the assets folder
 * easier to read than get_stylesheet_directory_uri() . '/assets/folder'
 * direct output and get_ output
 */

function get_assets($subdir){
	return get_stylesheet_directory_uri() .'/assets'.($subdir ? '/'. $subdir : '');
}

function assets($subdir){
	echo get_stylesheet_directory_uri() .'/assets'.($subdir ? '/'. $subdir : '');
}