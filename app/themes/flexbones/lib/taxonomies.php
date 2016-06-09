<?php 

/**
 * create custom taxonomies
 */


/**
 * Create an example taxonomy
 *
 * Please note that these will not be available as is in the REST API
 */

add_action( 'init', 'example_taxonomy', 0 );

function example_taxonomy() {

    $taxonomy_name = 'examples';
    $single_name   = 'Example';
    $plural_name   = 'Examples';
    $post_type     = 'posts';
 
    $args = array(
        'hierarchical'      => false,
        'labels'            => array(
            'name'              => $plural_name,
            'singular_name'     => $single_name,
            'menu_name'         => $plural_name,
            'add_new_item'      => 'Add New ' . $single_name,
        ),
        'show_ui'           => true,
    );
 
    register_taxonomy(
        $taxonomy_name,
        $post_type,
        $args
    );

}
