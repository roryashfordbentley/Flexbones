<?php
/**
 * The Flexbones mega menu!!!
 */

class walker_texas_ranger extends Walker_Nav_Menu {

	function __construct($css_class_prefix, $item_class_inheritance) {
		$this->css_class_prefix = $css_class_prefix;
		$this->item_class_inheritance = $item_class_inheritance;
	}

	// check for children

	function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ){
        $id_field = $this->db_fields['id'];
        if ( is_object( $args[0] ) ) {
            $args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
        }
        return parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }
	
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

		/**
		 * class names
		 * if the inheritance value is true add __item classes to all li's
		 * regardless of depth (depth classes remain intact)
		 */
		
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
		$classes = empty($item->classes) ? array() : (array) $item->classes;
		// $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) ); // original classes
		$current_page_class = in_array("current-menu-item",$item->classes) ? $this->css_class_prefix . '__item--active' : '';
		$item_id_class = $this->css_class_prefix . '__item--'. $item->ID;
		// build Li's
		$output .= $indent . '<li class="' . $current_page_class . ' ' . $inherited_item_class .' ' . $depth_class_names . ' '. $item_id_class . ' ' . $parent_class .'">';
		// link attributes
		$attributes  = ! empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) .'"' : '';
		$attributes .= ! empty($item->target)     ? ' target="' . esc_attr($item->target    ) .'"' : '';
		$attributes .= ! empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn       ) .'"' : '';
		$attributes .= ! empty($item->url)        ? ' href="'   . esc_attr($item->url       ) .'"' : '';
		//$attributes .= ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';

		$item_output = sprintf(
			'%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
		    $args->before,
		    $attributes,
		    $args->link_before,
		    apply_filters('the_title', $item->title, $item->ID),
		    $args->link_after,
		    $args->after
		);

		// filter Li's
		$output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
	}
	
}

/**
 * get_menu returns an instance of the walker_texas_ranger class with the following argiments
 * @param  string $location This must be the same as what is set in wp-admin/settings/menus for menu location.
 * @param  string $css_class_prefix This string will prefix all of the menu's classes, BEM syntax friendly
 * @return [type]
 */

function get_flexbones_menu($location = "main_menu", $css_class_prefix = 'main-menu'){	
	$args = array(
		'theme_location' 	=> $location,
		'menu_class' 		=> $css_class_prefix,
		'container'			=> false,
		'items_wrap' 		=> '%3$s',
		'walker' 			=> new walker_texas_ranger($css_class_prefix, true)
	);
	
	if (has_nav_menu($location)){
		return wp_nav_menu($args);
	}else{
		return "<p>You need to first define a menu in WP-admin<p>";
	}
}