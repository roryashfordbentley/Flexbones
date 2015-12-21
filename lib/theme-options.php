<?php
/**
 * Flexbones Theme Options
 */

/**
 * NEW METHOD
 * Social Network Links
 */



/**
 * Remove unecesarrty theme cusatomisations
 */

add_action('customize_register', 'remove_customize_bloat');

function remove_customize_bloat($wp_customize) {
    $wp_customize->remove_panel('widgets');
    $wp_customize->remove_section( 'static_front_page' );
    $wp_customize->remove_section( 'title_tagline' );
}

/**
 * Contact Details
 */

add_action('customize_register', 'add_address_customizer');

function add_address_customizer($wp_customize) {
 
    // Add a section 
    $wp_customize->add_section( 'contact_details', array(
        'title'         => 'Contact Details',
        'priority'      => 30,
    ) );
 
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