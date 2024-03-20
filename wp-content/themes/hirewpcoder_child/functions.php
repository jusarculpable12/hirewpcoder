<?php
/**
 * GeneratePress child theme functions and definitions.
 *
 * Add your custom PHP in this file.
 * Only edit this file if you have direct access to it on your server (to fix errors if they happen).
 */
function hirewpcoder_v2_scripts() {
	$parent_style = 'hirewpcoderv2';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    // wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ), wp_get_theme()->get('1.0.0'));
    wp_enqueue_style( 'child-header-style', get_stylesheet_directory_uri() . '/css/header.css', array( $parent_style ), wp_get_theme()->get('1.0.0'));
    wp_enqueue_style( 'child-footer-style', get_stylesheet_directory_uri() . '/css/footer.css', array( $parent_style ), wp_get_theme()->get('1.0.0'));
    wp_enqueue_style( 'child-general-style', get_stylesheet_directory_uri() . '/css/general.css', array( $parent_style ), wp_get_theme()->get('1.0.0'));


    wp_register_script('custom-script', get_stylesheet_directory_uri() . '/js/custom-script.js','','1.1', true);
    wp_enqueue_script('custom-script');
    if (is_page_template('home.php')):
        wp_enqueue_style( 'child-home-style', get_stylesheet_directory_uri() . '/css/home.css', array( $parent_style ), wp_get_theme()->get('1.0.0'));
    endif;
}

add_action('wp_enqueue_scripts', 'hirewpcoder_v2_scripts');