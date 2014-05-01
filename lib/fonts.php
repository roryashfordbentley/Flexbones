<?php
/**
 * Enqueue Fonts
 * These functions offer native Wordpress methods of including the font libs.
 * Uncomment 'add_action' as needed
 */

function flexbones_typekit_js() {
	wp_enqueue_script( 'theme_typekit', '//use.typekit.net/gml7qhx.js.js');
}



function flexbones_typekit_inline() {
	if ( wp_script_is( 'flexbones_typekit_js', 'done' ) ) {
		echo '<script type="text/javascript">try{Typekit.load();}catch(e){}</script>';
	}
}

//add_action( 'wp_head', 'flexbones_typekit_inline' );
