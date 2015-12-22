<?php

/**
 * Add Custom Post Types to WordPress
 *
 * For info on the post type icons gop here for reference:
 * https://developer.wordpress.org/resource/dashicons/#editor-textcolor
 * uncomment add_action to use.
 */

//add_action('init', 'flexbones_cpts');

function flexbones_cpts() {
    $post_type_name = "";
    $single_name    = "";
    $plural_name    = "";
    $description    = "";
    $icon           = "";

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
            'menu_name'             => $single_name,
            'add_new'               => 'Add ' . $single_name,
            'add_new_item'          => 'Add New ' . $single_name . ' item',
            'edit'                  => 'Edit',
            'edit_item'             => 'Edit ' . $single_name,
            'new_item'              => 'New '. $single_name,
            'view'                  => 'View '. $single_name,
            'view_item'             => 'View '. $single_name . ' item',
            'search_items'          => 'Search ' . $plural_name,
            'not_found'             => 'No '. $single_name . ' Found',
            'not_found_in_trash'    => 'No '. $plural_name .' Found in Trash',
            'parent'                => 'Parent '. $single_name
        ),
    );
    register_post_type($post_type_name, $post_type_options);
}