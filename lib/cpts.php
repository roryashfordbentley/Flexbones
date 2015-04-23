<?php

/**
 * Add Custom Post Types to WordPress
 *
 * For info on the post type icons gop here for reference:
 * https://developer.wordpress.org/resource/dashicons/#editor-textcolor
 * uncomment add_action to use.
 */

add_action('init', 'flexbones_cpts');

function flexbones_cpts() {
    /**
     * LANDING PAGES CPT
     */
    $post_type_name = "landing pages";
    $single_name    = "Landing Page";
    $plural_name    = "Landing Pages";

    $post_type_options = array(
        'label'                 => $single_name,
        'description'           => "",
        'public'                => true,
        'menu_icon'             => 'dashicons-format-aside',
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
            'add_new_item'          => 'Add New ' . $single_name . ' item',
            'edit'                  => 'Edit',
            'edit_item'             => 'Edit'. $single_name,
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

    /**
     * TURBINES CPT
     */
    $post_type_name = "turbines";
    $single_name    = "Turbine";
    $plural_name    = "Turbines";

    $post_type_options = array(
        'label'                 => $single_name,
        'description'           => "",
        'public'                => true,
        'menu_icon'             => 'dashicons-location-alt',
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
            'add_new_item'          => 'Add New ' . $single_name,
            'edit'                  => 'Edit',
            'edit_item'             => 'Edit'. $single_name,
            'new_item'              => 'New '. $single_name,
            'view'                  => 'View '. $single_name,
            'view_item'             => 'View '. $single_name,
            'search_items'          => 'Search ' . $plural_name,
            'not_found'             => 'No '. $single_name . ' Found',
            'not_found_in_trash'    => 'No '. $plural_name .' Found in Trash',
            'parent'                => 'Parent '. $single_name
        ),
    );
    register_post_type($post_type_name, $post_type_options);
}