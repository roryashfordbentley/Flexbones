<?php
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

function cbnet_tinymce_config($init) {
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
 * Remove bloat from wordpress html head
 */

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
//remove_action('wp_head', 'feed_links');
//remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
