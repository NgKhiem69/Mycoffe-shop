<?php
function mycoffee_enqueue_assets() {
    // CSS custom
    wp_enqueue_style('mycoffee-style', get_template_directory_uri() . '/css/style.css');

    // Swiper CSS
    wp_enqueue_style('swiper-style', 'https://unpkg.com/swiper@7/swiper-bundle.min.css');

    // Font Awesome (nếu chưa có)
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');

    // Swiper JS
    wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper@7/swiper-bundle.min.js', array(), null, true);

    // Custom JS
    wp_enqueue_script('mycoffee-script', get_template_directory_uri() . '/js/script.js', array('swiper-js'), null, true);
}
add_action('wp_enqueue_scripts', 'mycoffee_enqueue_assets');


function student_theme_enqueue_scripts() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/script.js', array(), null, true);
    wp_enqueue_style('swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css');
    wp_enqueue_script('swiper-script', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'student_theme_enqueue_scripts');

function student_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('menus');
    register_nav_menu('main-menu', 'Main Menu');
}
add_action('after_setup_theme', 'student_theme_setup');
