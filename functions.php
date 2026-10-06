<?php

// Load the CSS files
function load_css() {

    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3', 'all');
    wp_enqueue_style('bootstrap');

    wp_enqueue_style('custom-style', get_stylesheet_uri(), array('bootstrap'), '1.5');

}

// Load the JS files
function load_js() {

    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), '5.3.3', true);
    wp_enqueue_script('bootstrap');

}


// Add actions to load the CSS and JS files
add_action('wp_enqueue_scripts', 'load_css');
add_action('wp_enqueue_scripts', 'load_js');

// Theme Options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

// Menus
register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
        'footer-menu' => 'Footer Menu Location',
        )
);

// custom post type
function project_post_type() {

    $args = array(
        'public' => true,
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'excerpt',
            'custom-fields',
            'revisions',
        ),
        'rewrite' => array('slug' => 'projects'),
        'labels' => array(
            'name' => 'Projects',
            'singular_name' => 'Project',
            'add_new_item' => 'Add New Project',
            'edit_item' => 'Edit Project',
            'all_items' => 'All Projects',
            'view_item' => 'View Project',
        ),
        'menu_icon' => 'dashicons-portfolio',
        'hierarchical' => true
    );

    register_post_type('projects', $args);


}
add_action('init', 'project_post_type');

function project_taxonomy() {

    $args = array(
        'public' => true,
        'labels' => array(
            'name' => 'Project Categories',
            'singular_name' => 'Project Category'
        ),
        'rewrite' => array('slug' => 'project-categories'),
        'hierarchical' => true
    );
   
    register_taxonomy('project_categories', array('projects'), $args);
}
add_action('init', 'project_taxonomy');
?>