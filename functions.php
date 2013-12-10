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
			'main_menu' => 'main menu',
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
 * Hide Admin Bar
 */

	add_filter('show_admin_bar', '__return_false');

/**
 * The Flexbones mega menu!!!
 */

class walker_texas_ranger extends Walker_Nav_Menu {

	// value declared with walker
	//private $css_class_prefix;

	function __construct($css_class_prefix, $item_class_inheritance) {
		$this->css_class_prefix = $css_class_prefix;
		$this->item_class_inheritance = $item_class_inheritance;
	}

	/* check for children */

	function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ){
        $id_field = $this->db_fields['id'];
        if ( is_object( $args[0] ) ) {
            $args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
        }
        return parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }

	/**
	 * [start_lvl description]
	 */
	
	function start_lvl(&$output, $depth = 1, $args=array()) {
		$real_depth = $depth + 1;
		$indent = str_repeat("\t", $real_depth);

		$classes = array(
	        //$this->css_class_prefix . '__sub',
	       	$this->css_class_prefix . '__sub-menu',
	        $this->css_class_prefix . '__sub-menu--' . $real_depth
        );
	    $class_names = implode( ' ', $classes );

		$output .= "\n" . $indent . '<ul class="'. $class_names .'">' ."\n";
	}
  
	// add main/sub classes to li's and links
	 
	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		
		global $wp_query;
		
		$indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

		// class names
		// if the inheritance value is true add __item classes to all li's
		// regardless of depth (depth classes remain intact)
		
		if ($this->item_class_inheritance){
			$inherited_item_class = $this->css_class_prefix . '__item';
		} else {
			$inherited_item_class = '';
		}

		//parent class
		
		if ( $args->has_children ) {
			$parent_class = $this->css_class_prefix . '__item--parent';
        } else {
        	$parent_class = '';
        }

		// depth dependent classes
		
		$depth_classes = array(
		    ( $depth == 0 ? $this->css_class_prefix . '__item' : $this->css_class_prefix . '__sub-menu__item' ),
		    ( $depth >=1 ? $this->css_class_prefix . '__sub-menu--' . $depth . '--item' : '' ) 
		);
		
		$depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

		// passed classes
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		// $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) ); // original classes
		$current_page_class = in_array("current-menu-item",$item->classes) ? $this->css_class_prefix . '__item--active' : 'nope';
		$item_id_class = $this->css_class_prefix . '__item--'. $item->ID;

		// build Li's
		$output .= $indent . '<li class="' . $current_page_class . ' ' . $inherited_item_class .' ' . $depth_class_names . ' '. $item_id_class . ' ' . $parent_class .'">';

		// link attributes
		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
		//$attributes .= ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';

		$item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
		    $args->before,
		    $attributes,
		    $args->link_before,
		    apply_filters( 'the_title', $item->title, $item->ID ),
		    $args->link_after,
		    $args->after
		);

		// filter Li's
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}

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

	function flexbones_load_js() {

		// NAME / LOCATION / DEPENDENCIES (accepts array) / VERSION / IN FOOTER (true | false)
		
		wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', array(), '1.10.2', true );
		wp_register_script( 'jquery-ui','//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js', array(), '1.10.3', true);
		wp_register_script( 'modernizr', '//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js', array(), '2.6.2', false );
		wp_register_script( 'sitewide-scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ), '1.1', true );
		wp_register_script( 'gridtacular', get_template_directory_uri() . '/js/gridtacular/gridtacular.js', array( 'jquery' ), '1', true );
		
		// Enqueue Scripts

		wp_enqueue_script( 'jquery' );
		//wp_enqueue_script( 'jquery-ui' );
		wp_enqueue_script( 'modernizr' );
		wp_enqueue_script( 'sitewide-scripts' );
		wp_enqueue_script( 'gridtacular' );

		// Set the stylesheet directory uri to var 'stylesheet_root' and pass the var to documents that require it

		$stylesheet_root = array( 'dir' => get_stylesheet_directory_uri() );
		wp_localize_script( 'sitewide-scripts', 'stylesheet_root', $stylesheet_root );
		wp_localize_script( 'gridtacular', 'stylesheet_root', $stylesheet_root );

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