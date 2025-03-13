<?php
function mytheme_setup() {
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'mytheme_setup' );

// Enqueue styles and scripts
function mytheme_enqueue_styles() {
    // Enqueue the main stylesheets
    wp_enqueue_style( 'header-style', get_template_directory_uri() . '/assets/css/header.css' );
    wp_enqueue_style( 'footer-style', get_template_directory_uri() . '/assets/css/footer.css' );
    wp_enqueue_style( 'fonts-style', get_template_directory_uri() . '/assets/css/fonts.css' );
    wp_enqueue_style( 'swiper-style', get_template_directory_uri() . '/assets/css/swiper-style.css' );
    wp_enqueue_style( 'home-style', get_template_directory_uri() . '/assets/css/home.css' );
    wp_enqueue_style( 'thank-you-style', get_template_directory_uri() . '/assets/css/thank-you.css' );

    // Enqueue Swiper CSS
    wp_enqueue_style( 'swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), null );

    // Enqueue the JavaScript files
    wp_enqueue_script( 'swiper-script', get_template_directory_uri() . '/assets/js/swiper-script.js', array(), null, true );
    wp_enqueue_script( 'home-script', get_template_directory_uri() . '/assets/js/home.js', array(), null, true );
    
    // Enqueue Swiper JS
    wp_enqueue_script( 'swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_styles' );



?>