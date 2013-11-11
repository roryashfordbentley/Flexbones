<?php

/**
 * Flexbones Theme Setup
 */

add_action( 'after_setup_theme', 'flexbones_setup' );

function flexbones_setup() {

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style('editor-style.css?' . time());

	// Post Format support. You can also use the legacy "gallery" or "asides" (note the plural) categories.
	add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );

	// This theme uses post thumbnails
	add_theme_support( 'post-thumbnails' );

	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => 'Primary Navigation',
	) );
	
	//register sidebars
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
 * Remove Image Dimensions
 * stops wordpress adding inline width/height to images
 * (the_content)
 */

add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 ); 
add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 ); 
add_filter( 'the_content', 'remove_thumbnail_dimensions', 10 );

function remove_thumbnail_dimensions( $html ) { 
	$html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html ); return $html; 
}



/**
 * Hide Admin Bar
 */

add_filter('show_admin_bar', '__return_false');



/**
 * Sub Menu
 */
	
function sub_menu(){
	
	global $post;
	
	if($post){
		
		if($post->post_parent){
			$children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
		} else {
			$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
		} 
		
		if ($children) {
			echo '<ul>' . $children . '</ul>';
		}
	}
}



/**
 * Menu Parent Class
 * (wp_list_pages)
 */

function add_parent_class( $css_class, $page, $depth, $args ){
    if ( ! empty( $args['has_children'] ) )
        $css_class[] = 'parent slide_down';
    return $css_class;
}
add_filter( 'page_css_class', 'add_parent_class', 10, 4 );



/**
 * Menu Parent Class
 * (wp_nav_menu)
 */     

add_filter('wp_nav_menu_objects', function ($items) {

    $hasSub = function ($menu_item_id, $items) {
        foreach ($items as $item) {
            if ($item->menu_item_parent && $item->menu_item_parent == $menu_item_id) {
                return true;
            }
        }
        return false;
    };

    foreach ($items as $item) {
        if ($hasSub($item->ID, $items)) {
            $item->classes[] = 'parent';
        }
    }
    return $items;    

});



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


function barebones_load_js() {

 	/**
 	 * NAME / LOCATION / DEPENDENCIES (accepts array) / VERSION / IN FOOTER (true | false)
 	 */
  	
	// Jquery

  	wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', array(), '1.10.2', true );
  	wp_enqueue_script( 'jquery' );
  	
  	// Jquery UI

  	// wp_register_script('jquery-ui','//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js', array(), '1.10.3', true);
  	// wp_enqueue_script( 'jquery-ui' );

  	// Modernizr

  	wp_register_script( 'modernizr', '//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js', array(), '2.6.2', false );
  	wp_enqueue_script( 'modernizr' );

  	// Sitewide Scripts

  	wp_register_script( 'sitewide-scripts', get_template_directory_uri( ) . '/js/scripts.js', array( 'jquery' ), '1', true );
  	wp_enqueue_script( 'sitewide-scripts' );
  	
  	// Gridtacular

  	wp_register_script( 'gridtacular', get_template_directory_uri( ) . '/js/gridtacular.js', array( 'jquery' ), '1', true );
  	wp_enqueue_script( 'gridtacular' );   

  	// set the stylesheet directory uri to var 'stylesheet_root' and pass the var to documents that require it

  	$stylesheet_root = array( 'dir' => get_stylesheet_directory_uri() );
    wp_localize_script( 'sitewide-scripts', 'stylesheet_root', $stylesheet_root );
    wp_localize_script( 'gridtacular', 'stylesheet_root', $stylesheet_root );

	/* if ( is_front_page() ) {
		wp_enqueue_script('example');
	}*/
 
}
 
add_action('wp_enqueue_scripts', 'barebones_load_js'); // For use on the Front end (ie. Theme)



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

  // enqueing:
  wp_enqueue_style( 'page-style' );
}

add_action( 'wp_enqueue_scripts', 'stylesheet_loader' );



/**
 * Wrap images In a Div
 * (when inserting into editor)
 */

if( is_admin() ) {
 
    add_filter( 'image_send_to_editor', 'wp_image_wrap_init', 10, 8 );    
    function wp_image_wrap_init( $html, $id, $caption, $title, $align, $url, $size, $alt ) {
        return '<div class="content-image">'. $html .'</div>';
    }
 
}



/**
 * Get Attachment Atributes based on ID
 * @return Array()
 */

function wp_get_attachment( $attachment_id ) {

    $attachment = get_post( $attachment_id );
    
    return array(
        'alt'			=> get_post_meta( $attachment->ID, '_wp_attachment_image_alt', true ),
        'caption'		=> $attachment->post_excerpt,
        'description'	=> $attachment->post_content,
        'href'			=> get_permalink( $attachment->ID ),
        'src'			=> $attachment->guid,
        'title'			=> $attachment->post_title
    );
}

