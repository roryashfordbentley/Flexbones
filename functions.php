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

		/*function start_el(&$output, $item, $depth = 1, $args = array(), $id = 0){
			
			if($depth > 1){
				$sub_menu_class = 'sub-menu__item';
			} else {
				$sub_menu_class = '';
			}

			$indent = str_repeat("\t", $depth);
			$output .= "\n$indent<li class=\"menu-item $sub_menu_class\">\n";
		}*/

		function start_el(&$output, $item, $depth = 1, $args = array(), $id = 0){
           global $wp_query;
           $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

           $class_names = $value = '';

           $classes = empty( $item->classes ) ? array() : (array) $item->classes;

           $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
           $class_names = ' class="'. esc_attr( $class_names ) . '"';

           $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';

           $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
           $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
           $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
           $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

           $description  = ! empty( $item->description ) ? '<span>'.esc_attr( $item->description ).'</span>' : '';

            $item_output = $args->before;
            $item_output .= '<a'. $attributes .'>';
            $item_output .= $args->link_before .apply_filters( 'the_title', $item->title, $item->ID );
            $item_output .= $description.$args->link_after;
            $item_output .= '</a>';
            $item_output .= $args->after;

            $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		}
		
	}

	//Deletes all CSS classes and id's, except for those listed in the array below

	function nav_strip_classes($var) {
		return is_array($var) ? array_intersect($var, array(
			//List of allowed menu classes
			'menu-item',
			'current_page_parent',
			'current_page_ancestor',
			'current_page_item',
			'current_page_parent',
			'current_page_ancestor',
			'current-menu-parent',
			'current-page-parent',
			'current_page_parent',
			'menu-item--parent'
			)
		) : '';
	}
	add_filter('nav_menu_css_class', 'nav_strip_classes');
	add_filter('nav_menu_item_id', 'nav_strip_classes');
	add_filter('page_css_class', 'nav_strip_classes');

	// Change active nav class

	function nav_change_active_class($text){
	    $replace = array(
	        //List of menu item classes that should be changed to "active"
	        'current_page_item' => 'menu-item--active',
	        'current_page_parent' => 'menu-item--parent',
	        'current_page_ancestor' => 'menu-item--ancestor'
	    );
	    $text = str_replace(array_keys($replace), $replace, $text);
	    return $text;
	}
	add_filter ('wp_nav_menu','nav_change_active_class');

	// adds a parent class to parent li's

	function nav_add_parent_class ($items) {

	    $has_sub = function($menu_item_id, $items) {
	        foreach ($items as $item) {
	            if ($item->menu_item_parent && $item->menu_item_parent == $menu_item_id) {
	                return true;
	            }
	        }
	        return false;
	    };

	    foreach ($items as $item) {
	        if ($has_sub($item->ID, $items)) {
	            $item->classes[] = 'menu-item--parent';
	        }
	    }
	    return $items;
	}

	add_filter('wp_nav_menu_objects', 'nav_add_parent_class');

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