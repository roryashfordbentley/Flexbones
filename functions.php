<?php

/**
 * Flexbones Theme Setup
 */

add_action( 'after_setup_theme', 'flexbones_setup' );

function flexbones_setup() {
	add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );

	register_nav_menus( array(
		'primary' => 'Primary Navigation',
	) );
	
	register_sidebar();
}

/**
 * Remove Paragraphs Around Images
 * (the_content)
 */

function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('the_content', 'filter_ptags_on_images');

/**
 * Stop Tiny MCE editting br's
 */

function cbnet_tinymce_config( $init ) {

    // Don't remove line breaks
    $init['remove_linebreaks'] = false; 

    // Pass $init back to WordPress
    return $init;
}
add_filter('tiny_mce_before_init', 'cbnet_tinymce_config');

/**
 * Wrap images in a div
 * (when inserting into editor)
 */

if( is_admin() ) {
 
	add_filter( 'image_send_to_editor', 'wp_image_wrap_init', 10, 8 );    
	function wp_image_wrap_init( $html, $id, $caption, $title, $align, $url, $size, $alt ) {
		return '<div class="content-image flex-image">'. $html .'</div>';
	}
 
}

/**
 * Remove Image Dimensions
 * stops wordpress adding inline width/height to images
 * (the_content)
 */

function remove_thumbnail_dimensions( $html ) { 
	$html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html ); return $html; 
}

add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 ); 
add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 ); 
add_filter( 'the_content', 'remove_thumbnail_dimensions', 10 );

/**
 * Hide Admin Bar
 */

add_filter('show_admin_bar', '__return_false');

/**
 * Menu fix for realsies
 * First we add a custom walker to output the menu depth
 * then we strip out all the bloated default classes except for a few useful ones
 * Finally we replace the current active classes with a custom class
 */

class walker_texas_ranger extends Walker_Nav_Menu {
	function start_lvl(&$output, $depth = 1, $args=array()) {
		$depth = $depth + 1;
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul class=\"sub-menu sub-menu--" . $depth . "\">\n";
	}

}

//Deletes all CSS classes and id's, except for those listed in the array below
function custom_wp_nav_menu($var) {
	return is_array($var) ? array_intersect($var, array(
		//List of allowed menu classes
		'menu-item',
		'current_page_parent',
		'current_page_ancestor',
		'current_page_item',
		'current_page_parent',
		'current_page_ancestor'
		)
	) : '';
}
add_filter('nav_menu_css_class', 'custom_wp_nav_menu');
add_filter('nav_menu_item_id', 'custom_wp_nav_menu');
add_filter('page_css_class', 'custom_wp_nav_menu');

//Replaces "current-menu-item" with "active"

function menu_class_renamer($var){
	/**
	 * function to rename classes
	 * 
	 */
}


function change_active_class($text){
    $replace = array(
        //List of menu item classes that should be changed to "active"
        'current_page_item' => 'menu-item--active',
        //'current_page_parent' => 'menu-item--active',
        //'current_page_ancestor' => 'menu-item--active'
    );
    $text = str_replace(array_keys($replace), $replace, $text);
    return $text;
}
add_filter ('wp_nav_menu','change_active_class');


function change_parent_class($text){
    $replace = array(
        //List of menu item classes that should be changed to "active"
        'current-menu-parent' => 'menu-item--parent',
        'current-page-parent' => 'menu-item--parent',
        'current_page_parent' => 'menu-item--parent'
    );
    $text = str_replace(array_keys($replace), $replace, $text);
    return $text;
}
add_filter ('wp_nav_menu','change_parent_class');




//Deletes empty classes
function strip_empty_classes($menu) {
    $menu = str_replace('class=""','',$menu);
    return $menu;
}
add_filter ('nav_menu_css_class','strip_empty_classes');


/**
 * Dequeue Scripts
 */

//remove wordpress jquery

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

function flexbones_load_js() {

	/**
	 * Register Scripts
	 * NAME / LOCATION / DEPENDENCIES (accepts array) / VERSION / IN FOOTER (true | false)
	 */
	
	wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', array(), '1.10.2', true );
	wp_register_script( 'jquery-ui','//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js', array(), '1.10.3', true);
	wp_register_script( 'modernizr', '//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js', array(), '2.6.2', false );
	wp_register_script( 'sitewide-scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ), '1.1', true );
	wp_register_script( 'gridtacular', get_template_directory_uri() . '/js/gridtacular/gridtacular.js', array( 'jquery' ), '1', true );
	
	/**
	 * Enqueue Scripts
	 */

	wp_enqueue_script( 'jquery' );
	//wp_enqueue_script( 'jquery-ui' );
	wp_enqueue_script( 'modernizr' );
	wp_enqueue_script( 'sitewide-scripts' );
	wp_enqueue_script( 'gridtacular' );

	// Set the stylesheet directory uri to var 'stylesheet_root' and pass the var to documents that require it

	$stylesheet_root = array( 'dir' => get_stylesheet_directory_uri() );
	wp_localize_script( 'sitewide-scripts', 'stylesheet_root', $stylesheet_root );
	wp_localize_script( 'gridtacular', 'stylesheet_root', $stylesheet_root );

	/* if ( is_front_page() ) {
		wp_enqueue_script('example');
	}*/
 
}
 
add_action('wp_enqueue_scripts', 'flexbones_load_js'); // For use on the Front end (ie. Theme)

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

	 wp_enqueue_style( 'page-style' );
}

add_action( 'wp_enqueue_scripts', 'stylesheet_loader' );

/**
 * Get Attachment Atributes based on ID
 * @return Array()
 */

function wp_get_attachment( $attachment_id ) {

	$attachment = get_post( $attachment_id );
	
	return array(
		'alt'           => get_post_meta( $attachment->ID, '_wp_attachment_image_alt', true ),
		'caption'       => $attachment->post_excerpt,
		'description'   => $attachment->post_content,
		'href'          => get_permalink( $attachment->ID ),
		'src'			=> $attachment->guid,
		'title'			=> $attachment->post_title
	);
}