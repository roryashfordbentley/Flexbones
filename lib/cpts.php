<?php

/**
 * Add Custom Post Types to WordPress
 *
 * For info on the post type icons go here for reference:
 * https://developer.wordpress.org/resource/dashicons/#editor-textcolor
 * uncomment add_action to use.
 */

//add_action('init', 'flexbones_cpts');

function flexbones_cpts() {
    $post_type_name = "";
    $single_name    = "";
    $plural_name    = "";
    $icon           = "";
    $description    = "";

    $post_type_options = array(
        'label'                 => $single_name,
        'description'           => $description,
        'public'                => true,
        'menu_icon'             => $icon,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'capability_type'       => 'post',
        'hierarchical'          => true,
        'rewrite'               => array(
            'slug'                  => '',
            'with_front'            => '0'
        ),
        'query_var'             => true,
        'has_archive'           => true,
        'supports'              => array(
            'title',
            'editor',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes',
        ),
        'labels'                => array(
            'name'                  => $single_name,
            'singular_name'         => $single_name,
            'menu_name'             => $plural_name,
            'add_new'               => 'Add ' . $single_name,
            'add_new_item'          => 'Add new ' . $single_name,
            'edit'                  => 'Edit',
            'edit_item'             => 'Edit ' . $single_name,
            'new_item'              => 'New ' . $single_name,
            'view'                  => 'View ' . $single_name,
            'view_item'             => 'View ' . $single_name,
            'search_items'          => 'Search ' . $plural_name,
            'not_found'             => 'No ' . $plural_name . ' found',
            'not_found_in_trash'    => 'No ' . $plural_name .' found in trash',
            'parent'                => 'Parent '. $single_name
        ),
    );
    register_post_type($post_type_name, $post_type_options);
}