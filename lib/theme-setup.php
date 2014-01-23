<?php 
/**
 * Flexbones Theme Setup
 */

add_action( 'after_setup_theme', 'flexbones_setup' );

function flexbones_setup() {
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form' ) );
	//add_theme_support( 'automatic-feed-links' );
	//add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
	register_nav_menus( array( 'main_menu' => 'main menu' ) );
	register_sidebar();
}