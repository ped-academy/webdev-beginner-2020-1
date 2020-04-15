<?php

add_action('wp_enqueue_scripts', 'enqueue_styles', 999);

function enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_uri());
}

function get_posts_that_belongs_to_recipes_category()
{
    return get_posts([
        'numberposts' => -1,
        'category_name' => 'ricette',
    ]);
}
