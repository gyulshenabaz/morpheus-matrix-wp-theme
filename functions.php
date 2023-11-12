<?php

function theme_support() {
    // Adds dynamic title tag suppor
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails'); 

}

add_action('after_setup_theme', 'theme_support');

function theme_menus() {
    $locations = array(
        'primary' => "Primary Left Sidebar",
        'secondary' => "Secondary Right Sidebar"

    );

    register_nav_menus($locations);
}

add_action('init', 'theme_menus');

function register_styles() {
    $version = wp_get_theme() -> get('Version');
    // Fonts

    wp_enqueue_style('morpehus-matrix-fonts-poppins', "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700", array(), $version); 
    wp_enqueue_style('morpehus-matrix-fonts-lora', "https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap", array(), $version); 
    wp_enqueue_style('morpehus-matrix-fonts-abril', "https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap", array(), $version);  
    // CSS
    wp_enqueue_style('morpehus-matrix-open-iconic', "https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic.min.css", array(), '1.1.1');  
    wp_enqueue_style('morpehus-matrix-animate', get_template_directory_uri() . "/assets/css/animate.css", array(), $version);  
    wp_enqueue_style('morpehus-matrix-owl-carousel', "https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css", array(), '1.3.3');  
    wp_enqueue_style('morpehus-matrix-owl-carousel-theme', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css", array(), '2.3.4');  
    wp_enqueue_style('morpehus-matrix-magnific-popup', "https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css", array(), '1.1.0');  
    wp_enqueue_style('morpehus-matrix-aos', "https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css", array(), '2.3.4');  
    wp_enqueue_style('morpehus-matrix-ionicons', "https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.0.0/collection/components/icon/icon.min.css", array(), '4.0.0');  
    wp_enqueue_style('morpehus-matrix-bootstrap-datepicker', "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.min.css", array(), '1.10.0');  
    wp_enqueue_style('morpehus-matrix-jquery-datetime-picker', "https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.14.1/jquery.timepicker.min.css", array(), '1.14.1');  
    wp_enqueue_style('morpehus-matrix-flag-icons', "https://cdnjs.cloudflare.com/ajax/libs/flag-icons/6.13.2/css/flag-icons.min.css", array(), '6.13.2');  
    wp_enqueue_style('morpehus-matrix-icomoon', get_template_directory_uri() . "/assets/css/icomoon.css", array(), $version); 

    wp_enqueue_style('morpehus-matrix-style', get_template_directory_uri() . "/assets/css/style.css", array(), $version); 

}

add_action('wp_enqueue_scripts', 'register_styles');

function register_scripts() {
    $version = wp_get_theme() -> get('Version');
    wp_enqueue_script('morpehus-matrix-jquery', "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js", array(), '3.7.1', true);
    wp_enqueue_script('morpehus-matrix-jquery-migrate', "https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.4.1/jquery-migrate.min.js", array(), '3.4.1', true);
    wp_enqueue_script('morpehus-matrix-popper', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js", array(), '2.9.2', true);
    wp_enqueue_script('morpehus-matrix-jquery-bootstrap', "https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js", array(), '5.3.2', true);
    wp_enqueue_script('morpehus-matrix-jquery-easing', "https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js", array(), '1.4.1', true);
    wp_enqueue_script('morpehus-matrix-jquery-waypoints', "https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js", array(), '4.0.1', true);
    wp_enqueue_script('morpehus-matrix-jquery-stellar', "https://cdnjs.cloudflare.com/ajax/libs/stellar.js/0.6.1/jquery.stellar.min.js", array(), '0.6.1', true);
    wp_enqueue_script('morpehus-matrix-owl-carousel', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js", array(), '2.3.4', true);
    wp_enqueue_script('morpehus-matrix-magnific-popup', "https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js", array(), '1.1.0', true);
    wp_enqueue_script('morpehus-matrix-aos', "https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js", array(), '2.3.4', true);
    wp_enqueue_script('morpehus-matrix-jquery-animate-number', "https://cdnjs.cloudflare.com/ajax/libs/jquery-animateNumber/0.0.9/jquery.animateNumber.min.js", array(), '0.0.9', true);
    wp_enqueue_script('morpehus-matrix-jquery-scrollax', "https://cdn.jsdelivr.net/npm/scrollax@1.0.0/scrollax.min.js", array(), '1.0.0', true);
    wp_enqueue_script('morpehus-matrix-main', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0.0', true);

}

add_action('wp_enqueue_scripts', 'register_scripts');

function widget_areas() {
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
        ),
        array(
            'name' => 'Left Sidebar Area',
            'id' => 'colorlib-main-menu',
            'description' => 'Sidebar Widget Area'
        ));
}

add_action('widgets_init', 'widget_areas');

?>