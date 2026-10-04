<?php

// Load the CSS files
function load_css() {

    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3', 'all');
    wp_enqueue_style('bootstrap');

    wp_enqueue_style('custom-style', get_stylesheet_uri(), array('bootstrap'), '1.0');

}

// Load the JS files
function load_js() {

    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), '5.3.3', true);
    wp_enqueue_script('bootstrap');

}

// Add actions to load the CSS and JS files
add_action('wp_enqueue_scripts', 'load_css');
add_action('wp_enqueue_scripts', 'load_js');

?>