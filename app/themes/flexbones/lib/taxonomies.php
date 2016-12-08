<?php 

/**
 * create custom taxonomies
 */


/**
 * Create an example taxonomy
 *
 * Please note that these will not be available as is in the REST API
 */

// add_action( 'init', 'example_taxonomy', 0 );

function example_taxonomy() {

    $taxonomy_name = 'product_type';
    $single_name   = 'Product Type';
    $plural_name   = 'Product Types';
    $post_type     = 'products';
 
    $args = array(
        'labels'            => array(
            'name'              => $plural_name,
            'singular_name'     => $single_name,
            'menu_name'         => $plural_name,
            'all_items' => 'All ' . $plural_name,
            'edit_item' => 'Edit ' . $plural_name,
            'view_item' => 'View ' . $plural_name,
            'update_item' => 'Update ' . $single_name,
            'add_new_item' => 'Add new ' . $single_name,
            'new_item_name' => 'Add new ' . $single_name . ' name',
            'search_items' => 'Search ' . $plural_name,
            'popular_items' => 'Popular ' . $plural_name,
            'separate_items_with_commas' => 'Seperate ' . $plural_name . ' with commas',
            'add_or_remove_items' => 'Add or remove  ' . $plural_name,
            'choose_from_most_used' => 'Choose from most used ' . $plural_name,
            'not_found' => 'No ' . $plural_name . ' found.'
        ),
        'hierarchical'      => true,
        'show_ui'           => true,
        'show_in_rest'      => true, // available in rest API
        'show_admin_column' => true, // show in post/page list
        'rest_base'         => $taxonomy_name // the slug used to identify the taxonomy in the rest api returns
    );
 
    register_taxonomy(
        $taxonomy_name,
        $post_type,
        $args
    );

}