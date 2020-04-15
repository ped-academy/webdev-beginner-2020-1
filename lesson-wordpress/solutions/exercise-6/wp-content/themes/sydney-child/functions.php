<?php

add_action('wp_enqueue_scripts', 'enqueue_styles', 999);

function enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_uri());
}

add_filter('body_class', 'add_background_blue_to_body');

function add_background_blue_to_body($classes)
{
    $classes[] = 'background-blue';

    return $classes;
}
