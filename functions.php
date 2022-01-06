<?php

// Setup
define( 'srp_DEV_MODE', true );

// Includes
include( get_theme_file_path( '/inc/front/enqueue.php' ) );
include( get_theme_file_path( '/inc/setup.php' ) );

// Hooks
add_action('wp_enqueue_scripts', 'srp_enqueue'); //enqueue scripts
add_action( 'after_setup_theme', 'srp_setup_theme' ); 
add_theme_support( 'post-thumbnails' ); // add support for featured image
add_action( 'after_setup_theme', 'woocommerce_support' ); //add support for woocommerce