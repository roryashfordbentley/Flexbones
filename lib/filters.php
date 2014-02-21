<?php

/**
 * Remove Paragraphs Around Images
 * (the_content)
 */

function flexbones_remove_img_p($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('the_content', 'flexbones_remove_img_p');

/**
 * Prevent Admin Editor removing br's
 */

function flexbones_preserve_brs($init) {
    $init['remove_linebreaks'] = false; 
    return $init;
}

add_filter('tiny_mce_before_init', 'flexbones_preserve_brs');

/**
 * Wrap images in a div
 * (when inserting into editor)
 */
  
function flexbones_img_wrap($html, $id, $caption, $title, $align, $url, $size, $alt) {
	if( is_admin() ) {
		return '<div class="content-image">'. $html .'</div>';
	}
}

add_filter('image_send_to_editor', 'flexbones_img_wrap', 10, 8 );

/**
 * Hide Admin Bar
 */

add_filter('show_admin_bar', '__return_false');

/**
 * Remove bloat from wordpress html head
 */

function flexbones_trim_head(){
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'feed_links');
	remove_action('wp_head', 'feed_links', 2);
	remove_action('wp_head', 'index_rel_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'feed_links_extra', 3);
	remove_action('wp_head', 'start_post_rel_link', 10, 0);
	remove_action('wp_head', 'parent_post_rel_link', 10, 0);
	remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
}

add_action( 'init', 'flexbones_trim_head' );

/**
 * Remove all WooCommerce scripts and styles
 *
 * @author WP Smith
 * @since 1.0.0
 */
function remove_woocommerce_styles_and_scripts() {
    remove_action( 'wp_head', array( $GLOBALS['woocommerce'], 'generator' ) );
    remove_action( 'wp_enqueue_scripts', array( $GLOBALS['woocommerce'], 'frontend_scripts' ) );
}
define( 'WOOCOMMERCE_USE_CSS', false );
add_action( 'init', 'remove_woocommerce_styles_and_scripts', 99 );

/**
 * Remove recent comment inline CSS
 */

function flexbones_remove_inline_css() {
	global $wp_widget_factory;
	remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'  ) );
}

add_action( 'widgets_init', 'flexbones_remove_inline_css' );