<?php
/**
 * Flexbones Theme Options
 */

/**
 * NEW METHOD
 * Social Network Links
 */



/**
 * Remove unused theme customisations
 */

add_action('customize_register', 'remove_customize_bloat');

function remove_customize_bloat($wp_customize) {
    $wp_customize->remove_panel('widgets');
    $wp_customize->remove_section( 'static_front_page' );
    $wp_customize->remove_section( 'title_tagline' );
}

/**
 * Contact Details
 *
 * Adds a section to the theme customizer for
 * company contact details.
 */

add_action('customize_register', 'add_address_customizer');

function add_address_customizer($wp_customize) {
 
    // Add a section 
    $wp_customize->add_section( 'contact_details', array(
        'title'         => 'Contact Details',
        'priority'      => 30,
    ) );
 
    // Address
    $wp_customize->add_setting("address", array(
        "default"       => "",
        "transport"     => "refresh",
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        "address",
        array(
            "label" => "Enter Company Address",
            "section" => "contact_details",
            "settings" => "address",
            "type" => "textarea"
        )
    ));

    // Phone Number
    $wp_customize->add_setting("phone_number", array(
        "default"       => "",
        "transport"     => "refresh",
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        "phone_number",
        array(
            "label" => "Enter Phone Number",
            "section" => "contact_details",
            "settings" => "phone_number",
            "type" => "input"
        )
    ));

    // Fax Number
    $wp_customize->add_setting("fax_number", array(
        "default"       => "",
        "transport"     => "refresh",
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        "fax_number",
        array(
            "label" => "Enter Fax Number",
            "section" => "contact_details",
            "settings" => "fax_number",
            "type" => "input"
        )
    ));

    // Email Address
    $wp_customize->add_setting("email_address", array(
        "default"       => "",
        "transport"     => "refresh",
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        "email_Address",
        array(
            "label" => "Enter Email Address",
            "section" => "contact_details",
            "settings" => "email_address",
            "type" => "input"
        )
    ));

}

/**
 * Contact Details
 *
 * Adds a section to the theme customizer for
 * adding and updating URLs to social media
 * profiles
 */

add_action('customize_register', 'add_social_links');

function add_social_links($wp_customize) {
 
    // Add a section 
    $wp_customize->add_section( 'social_links', array(
        'title'         => 'Social Media Links',
        'priority'      => 40,
    ) );
 
    // Facebook
    $wp_customize->add_setting("facebook_link", array(
        "default"       => "",
        "transport"     => "refresh"
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        "facebook_link",
        array(
            "label"     => "Enter Facebook link",
            "section"   => "social_links",
            "settings"  => "facebook_link",
            "type"      => "input"
        )
    ));

    // Twitter
    $wp_customize->add_setting("twitter_link", array(
        "default"       => "",
        "transport"     => "refresh"
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        "twitter_link",
        array(
            "label"     => "Enter Twitter link",
            "section"   => "social_links",
            "settings"  => "twitter_link",
            "type"      => "input"
        )
    ));

    // Linkedin
    $wp_customize->add_setting("linkedin_link", array(
        "default"       => "",
        "transport"     => "refresh"
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        "linkedin_link",
        array(
            "label"     => "Enter Linkedin link",
            "section"   => "social_links",
            "settings"  => "linkedin_link",
            "type"      => "input"
        )
    ));

    // Instagram
    $wp_customize->add_setting("instagram_link", array(
        "default"       => "",
        "transport"     => "refresh"
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        "instagram_link",
        array(
            "label"     => "Enter Instagram link",
            "section"   => "social_links",
            "settings"  => "instagram_link",
            "type"      => "input"
        )
    ));

    // Google+
    $wp_customize->add_setting("googleplus_link", array(
        "default"       => "",
        "transport"     => "refresh"
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        "googleplus_link",
        array(
            "label"     => "Enter Google+ link",
            "section"   => "social_links",
            "settings"  => "googleplus_link",
            "type"      => "input"
        )
    ));  

}

/**
 * Flexbones Settings
 *
 * Super serial chops for devs.
 */

add_action( 'customize_register', 'flexbones_options' );

function flexbones_options($wp_customize) {

    $wp_customize->add_section( 'flexbones_options', array(
        'title'         => 'Flexbones Options',
        'priority'      => 50,
    ) );

    // Admin bar settings
    $wp_customize->add_setting( 'admin_bar_setting', array(
    'default'           =>  false,
    'transport'         =>  'refresh'
     ) );

    $wp_customize->add_control(
    'admin_bar_setting',
    array(
        'section'       => 'flexbones_options',
        'label'         => 'Enable frontend admin bar?',
        'type'          => 'checkbox'
         )
    );

    // oEmbed settings
    $wp_customize->add_setting( 'oembed_setting', array(
    'default'           =>  true,
    'transport'         =>  'refresh'
     ) );

    $wp_customize->add_control(
    'oembed_setting',
    array(
        'section'       => 'flexbones_options',
        'label'         => 'Enable oEmbed support?',
        'type'          => 'checkbox'
         )
    );

    // WP-API Settings
    $wp_customize->add_setting( 'wp_api_setting', array(
    'default'           =>  false,
    'transport'         =>  'refresh'
     ) );

    $wp_customize->add_control(
    'wp_api_setting',
    array(
        'section'       => 'flexbones_options',
        'label'         => 'Enable the REST API?',
        'type'          => 'checkbox'
         )
    );
}

/**
 * Check oEmbed settings 
 * 
 * if not checked (false) then remove the oEmbed output
 */

add_action( 'init', 'flexbones_oembed_settings' );

function flexbones_oembed_settings(){

    if( get_theme_mod('oembed_setting') == false ){
        remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );
        wp_deregister_script( 'wp-embed' );
    }

}


/**
 * Check WP REST API settings 
 * 
 * if not checked (false) then remove the oEmbed output
 */

add_action( 'init', 'flexbones_api_settings' );

function flexbones_api_settings(){

    if( get_theme_mod('wp_api_setting') == false ){
        add_filter('rest_enabled', '__return_false');
        add_filter('rest_jsonp_enabled', '__return_false');
        remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
    }

}

/**
 * Check Admin bar settings
 */

add_action( 'init', 'flexbones_admin_bar_settings' );

function flexbones_admin_bar_settings(){

    if( get_theme_mod('admin_bar_setting') == false ){
        add_filter('show_admin_bar', '__return_false');
    }

}