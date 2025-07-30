<?php
/**
 * Welcome Page Setup
 */

// Include the Sparkling_Welcome class
require_once get_template_directory() . '/inc/welcome-screen/class-sparkling-welcome.php';

// Initialize the welcome screen
if ( is_admin() ) {
    global $sparkling_required_actions, $sparkling_recommended_plugins;
    
    // Define recommended plugins
    $sparkling_recommended_plugins = array(
        'kali-forms' => array(
            'recommended' => true,
        ),
        'colorlib-login-customizer' => array(
            'recommended' => true,
        ),
        'fancybox-for-wordpress'    => array(
            'recommended' => false,
        ),
        'simple-custom-post-order'  => array(
            'recommended' => true,
        ),
        'colorlib-404-customizer' => array(
            'recommended' => true,
        ),
        'colorlib-coming-soon-maintenance' => array(
            'recommended' => true,
        ),
    );

    // Define required actions
    $sparkling_required_actions = array();
    
    // Initialize the welcome screen
    new Sparkling_Welcome();
} 