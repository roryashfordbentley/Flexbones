<?php
/**
 * Enqueue Stylesheets
 */

function stylesheet_loader() {	
	wp_register_style( 
		'page-style', 
		get_template_directory_uri() . '/style.css', 
		array(),
		'1.0',
		'all' 
	);

	wp_enqueue_style('page-style');
}

add_action('wp_enqueue_scripts', 'stylesheet_loader');