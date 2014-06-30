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
 * Wrap images in figure/figcaption
 * (when inserting into editor)
 */

function flexbones_img_wrap($html, $id, $caption, $title, $align, $url, $size, $alt) {
	
	$url = wp_get_attachment_url($id);
	$html5 = "<figure class='align-$align  news-article__figure'>";
	$html5 .= "<img src='$url' alt='$title' />";
	
	if ($caption) {
    	$html5 .= "<figcaption class='news-article__figure--caption'>$caption</figcaption>";
	}
	$html5 .= "</figure>";
	
	return $html5;
}

add_filter('image_send_to_editor', 'flexbones_img_wrap', 10, 9 );
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
 * Remove recent comment inline CSS
 */

function flexbones_remove_inline_css() {
	global $wp_widget_factory;
	remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'  ) );
}

add_action( 'widgets_init', 'flexbones_remove_inline_css' );