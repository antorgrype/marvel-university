<?php

function marvel_university_enqueue_styles()
{
    wp_enqueue_script('marvel-university-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('marvel-university-style', get_stylesheet_uri());

    wp_enqueue_style('marvel-university-style-index', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('marvel-university-main-style', get_theme_file_uri('/build/index.css'));
}

add_action('wp_enqueue_scripts', 'marvel_university_enqueue_styles');


// add theme support for title tag
function marvel_university_features()
{
    add_theme_support('title-tag');

    // register navigation menus
    register_nav_menus([
        'header-menu' => __('Header Menu'),
        'footer-menu-one' => __('Footer Menu One'),
        'footer-menu-two' => __('Footer Menu Two'),
    ]);
}
add_action('after_setup_theme', 'marvel_university_features');


// add custom post type event

function marvel_university_post_types()
{
    register_post_type('event', [
        'public' => true,
        'labels' => [
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event',
        ],
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-calendar',
        'has_archive' => true,
        'rewrite' => ['slug' => 'events'],
        'supports' => ['title', 'editor', 'excerpt'],
    ]);
}

add_action('init', 'marvel_university_post_types');