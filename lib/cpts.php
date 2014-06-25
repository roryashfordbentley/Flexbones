<?php

/**
 * Add Custom Post Types to WordPress
 * Much better than using a plugin
 * @addedby Rory Ashford <rory@roikles.com>
 */

//add_action('init', 'flexbones_cpts');

function flexbones_cpts() {
	$post_type_name = "";
	$single_name 	= "";
	$plural_name 	= "";
	$icon 			= "";

	$post_type_options = array(
		'label'            		=> $single_name,
		'description'       	=> $description,
		'public'            		=> true,
		'menu_icon' 		=> 'dashicons-book',
		'show_ui'          	=> true,
		'show_in_menu'      => true,
		'capability_type'   	=> 'post',
		'hierarchical'      	=> true,
		'rewrite'           		=> array(
			'slug'              		=> '',
			'with_front'        	=> '0'
		),
		'query_var'      		=> true,
		'has_archive'    		=> true,
		'supports'       		=> array(
			'title',
			'editor',
			'revisions',
			'thumbnail',
			'author',
			'page-attributes',
		),
		'labels'        		=> array(
			'name'              	=> $single_name,
			'singular_name'     	=> 'Service',
			'menu_name'         	=> 'Service',
			'add_new'             	=> 'Add Service',
			'add_new_item'     	=> 'Add New Service',
			'edit'                		=> 'Edit',
			'edit_item'           	=> 'Edit Service',
			'new_item'            	=> 'New '. $single_name,
			'view'                	=> 'View Service',
			'view_item'           	=> 'View Service',
			'search_items'        => 'Search Service',
			'not_found'           	=> 'No '. $single_name . 'Found',
			'not_found_in_trash'  => 'No Services Found in Trash',
			'parent'       		=> 'Parent '. $single_name
		),
	);
	register_post_type($post_type_name, $post_type_options);
}