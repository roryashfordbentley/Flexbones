<?php

/**
 * Create a custom Post Type
 * Much better than using a plugin
 * @addedby Rory Ashford <rory@roikles.com>
 */

// quickly add post types
function add_cpt($cpt_name,$cpt_description,$dashicon){
	register_post_type(
		$cpt_name, array(
			'label'             => $cpt_name,
			'description'       => $cpt_name,
			'public'            => true,
			'menu_icon' 		=> $dashicon,
			'show_ui'           => true,
			'show_in_menu'      => true,
			'capability_type'   => 'post',
			'hierarchical'      => true,
			'rewrite'           => array(
				'slug'              => '',
				'with_front'        => '0'
			),
			'query_var'      => true,
			'has_archive'    => true,
			'supports'       => array(
				'title',
				'editor',
				'revisions',
				'thumbnail',
				'author',
				'page-attributes',
			),
			'taxonomies'    => array(
				'post_tag',
			),
			'labels'        => array(
				'name'                => $cpt_name,
				'singular_name'       => $cpt_name,
				'menu_name'           => $cpt_name,
				'add_new'             => 'Add ' . $cpt_name,
				'add_new_item'        => 'Add New ' . $cpt_name,
				'edit'                => 'Edit ',
				'edit_item'           => 'Edit ' . $cpt_name,
				'new_item'            => 'New ' . $cpt_name,
				'view'                => 'View ' . $cpt_name,
				'view_item'           => 'View ' . $cpt_name,
				'search_items'        => 'Search ' . $cpt_name,
				'not_found'           => 'No ' . $cpt_name .' Found',
				'not_found_in_trash'  => 'No ' . $cpt_name .' Found in Trash',
				'parent'       		  => 'Parent ' . $cpt_name
			),
		)
	);
}

// Full list of dashicons: http://melchoyce.github.io/dashicons/

//add_cpt('name','description','icon');



