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



/**
 *  OLD WP METHOD
 *  Social network links
 *  
 */

function twitter_details(){
    echo '<input type="text" name="twitter_url" id="twitter_url" value="' . get_option('twitter_url') . '" placeholder="e.g. http://twitter.com/companyname" />';
}

function facebook_details(){
    echo '<input type="text" name="facebook_url" id="facebook_url" value="' . get_option('facebook_url') . '" placeholder="e.g. http://facebook.com/companyname" />';
}

function instagram_details(){
    echo '<input type="text" name="instagram_url" id="instagram_url" value="' . get_option('instagram_url') . '" placeholder="e.g. http://instagram.com/companyname" />';
}

function linkedin_details(){
    echo '<input type="text" name="linkedin_url" id="linkedin_url" value="' . get_option('linkedin_url') . '" placeholder="e.g. http://linkedin.com/companyname" />';
}

function googleplus_details(){
    echo '<input type="text" name="googleplus_url" id="googleplus_url" value="' . get_option('googleplus_url') . '" placeholder="e.g. http://googleplus.com/companyname" />';
}

function pinterest_details(){
    echo '<input type="text" name="pinterest_url" id="pinterest_url" value="' . get_option('pinterest_url') . '" placeholder="e.g. http://pinterest.com/companyname" />';
}

function social_fields(){
    add_settings_section(
        "social-section", 
        "Social Settings", 
        null, 
        "theme-options"
    );
    
    // Add the Twitter Settings
    add_settings_field(
        "twitter_url", 
        "Twitter Url", 
        "twitter_details", 
        "theme-options", 
        "social-section"
    );

    register_setting("section", "twitter_url");
    
    // Add the Facebook Settings
    add_settings_field(
        "facebook_url", 
        "Facebook Url", 
        "facebook_details", 
        "theme-options", 
        "social-section"
    );

    register_setting("section", "facebook_url");

    // Add the Instagram Settings
    add_settings_field(
        "instagram_url", 
        "Instagram Url", 
        "instagram_details", 
        "theme-options", 
        "social-section"
    );

    register_setting("section", "instagram_url");

    // Add the LinkedIn Settings
    add_settings_field(
        "linkedin_url", 
        "Linkedin Url", 
        "linkedin_details", 
        "theme-options", 
        "social-section"
    );

    register_setting("section", "linkedin_url");

    // Add the Google+ Settings
    add_settings_field(
        "googleplus_url", 
        "Google+ Url", 
        "googleplus_details", 
        "theme-options", 
        "social-section"
    );

    register_setting("section", "googleplus_url");

    // Add the Pinterest Settings
    add_settings_field(
        "pinterest_url", 
        "Pinterest Url", 
        "pinterest_details", 
        "theme-options", 
        "social-section"
    );

    register_setting("section", "pinterest_url");

}

add_action("admin_init", "social_fields");


// Address

function theme_settings_page()
{
    ?>
        <div class="wrap">
        <h1>Flexbones Options</h1>
        <p>Change social media links and company address details from right here</p>
        <form method="post" action="options.php">
            <?php
                settings_fields("section");
                do_settings_sections("theme-options");      
                submit_button(); 
            ?>          
        </form>
        </div>
    <?php
}

function add_theme_menu_item()
{
    add_menu_page(
        "Flexbones Options", 
        "Flexbones", 
        "manage_options", 
        "flexbones-options", 
        "theme_settings_page", 
        null, 
        99
    );
}

add_action("admin_menu", "add_theme_menu_item");