<?php
/**
 * Dequeue Scripts
 */

function remove_wp_jquery() {
	//if statements prevents it deregistering in admin
	if( !is_admin() ) {
		wp_deregister_script('jquery');
		wp_deregister_script('jquery-ui');
	}
}

add_action('init', 'remove_wp_jquery'); // will deregister from head

/**
 * Enqueue Scripts
 */

function load_js() {

	// NAME / LOCATION / DEPENDENCIES (accepts array) / VERSION / IN FOOTER (true | false)
	
	wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', array(), '1.10.2', true );
	wp_register_script( 'jquery-ui','//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js', array(), '1.10.3', true);
	wp_register_script( 'modernizr', '//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js', array(), '2.6.2', false );
	wp_register_script( 'sitewide-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), '1.1', true );
	wp_register_script( 'gridtacular', get_template_directory_uri() . '/assets/js/gridtacular/gridtacular.js', array( 'jquery' ), '1', true );
	
	// Enqueue Scripts

	wp_enqueue_script( 'jquery' );
	//wp_enqueue_script( 'jquery-ui' );
	wp_enqueue_script( 'modernizr' );
	wp_enqueue_script( 'sitewide-scripts' );
	wp_enqueue_script( 'gridtacular' );

}
 
add_action('wp_enqueue_scripts', 'load_js'); // For use on the Front end (ie. Theme

/**
 * Localise Vars
 * Make specified PHP data available in your specified scripts
 */

function localize_vars() {

	$stylesheet_root = array( 'dir' => get_stylesheet_directory_uri() );
	wp_localize_script( 'sitewide-scripts', 'stylesheet_root', $stylesheet_root );
	wp_localize_script( 'gridtacular', 'stylesheet_root', $stylesheet_root );
}

add_action( 'wp_enqueue_scripts', 'localize_vars' );
