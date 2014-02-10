<?php
/**
 * Enqueue Fonts
 * These functions offer native Wordpress methods of including the font libs.
 * Uncomment 'add_action' as needed
 */

/**
 * Google Fonts
 * Replace 'Google Font URL' with the correct url from Google
 * Uncomment add_action to use Google Fonts
 */

function flexbones_google_fonts() {
	wp_register_style('googleFonts', 'Google Font URL');
	wp_enqueue_style('googleFonts');
}

//add_action('wp_print_styles', 'flexbones_google_fonts');

/**
 * Typekit Fonts
 * Replace XXXXXX.js with your unique kit code
 * Uncomment add_action to use Google Fonts
 */

function flexbones_typekit_js() {
	wp_enqueue_script( 'theme_typekit', '//use.typekit.net/XXXXXX.js');
}

//add_action( 'wp_enqueue_scripts', 'flexbones_typekit_js' );

function flexbones_typekit_inline() {
	if ( wp_script_is( 'flexbones_typekit_js', 'done' ) ) {
		echo '<script type="text/javascript">try{Typekit.load();}catch(e){}</script>';
	}
}

//add_action( 'wp_head', 'flexbones_typekit_inline' );
