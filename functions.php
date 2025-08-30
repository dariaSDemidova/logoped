<?php
add_action('wp_enqueue_scripts', function () {

    wp_enqueue_style('googleapis', 'https://fonts.googleapis.com');
    wp_enqueue_style('gstatic', 'https://fonts.gstatic.com');
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
    wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css');
    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_script('swiper-bundle', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array(), null, true);
});

add_theme_support('custom-logo');
add_theme_support('post-thumbnails');
add_theme_support('title-tag');

add_filter('wpcf7_autop_or_not', '__return_false');