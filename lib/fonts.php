<?php
/**
 * Enqueue Fonts
 */

function load_fonts() {
    wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,700,600');
    wp_enqueue_style( 'googleFonts');
}

add_action('wp_print_styles', 'load_fonts');