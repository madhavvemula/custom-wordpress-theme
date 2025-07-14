<?php
// Enqueue Scripts & Styles
function custom_theme_scripts() {
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', [], false, true);
}
add_action('wp_enqueue_scripts', 'custom_theme_scripts');

// Theme Support
function custom_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('editor-styles');
    add_theme_support('block-styles');
}
add_action('after_setup_theme', 'custom_theme_setup');

// Register Custom Post Type: Testimonials
function create_testimonials_post_type() {
    register_post_type('testimonial', [
        'labels' => [
            'name' => __('Testimonials'),
            'singular_name' => __('Testimonial')
        ],
        'public' => true,
        'has_archive' => false,
        'rewrite' => ['slug' => 'testimonials'],
        'show_in_rest' => true,
        'supports' => ['title', 'editor', 'thumbnail']
    ]);
}
add_action('init', 'create_testimonials_post_type');
