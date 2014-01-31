<?php
/**
 * Enqueue Fonts
 * These functions offer native Wordpress methods of including the font libs.
 * Uncomment 'add_action' as needed
 */


/**
 * Google Fonts
 * Replace 'Google Font URL' with the correct url from Google
 */

function load_fonts() {
	wp_register_style('googleFonts', 'Google Font URL');
	wp_enqueue_style('googleFonts');
}

//add_action('wp_print_styles', 'load_fonts');


/**
 * Typekit Fonts
 * Replace XXXXXX.js with your unique kit code
 */

function theme_typekit() {
	wp_enqueue_script( 'theme_typekit', '//use.typekit.net/XXXXXX.js');
}

//add_action( 'wp_enqueue_scripts', 'theme_typekit' );

function theme_typekit_inline() {
	if ( wp_script_is( 'theme_typekit', 'done' ) ) {
		echo '<script type="text/javascript">try{Typekit.load();}catch(e){}</script>';
	}
}

//add_action( 'wp_head', 'theme_typekit_inline' );
