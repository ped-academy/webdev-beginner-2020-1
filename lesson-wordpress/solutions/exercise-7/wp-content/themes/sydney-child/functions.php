<?php

add_action('wp_enqueue_scripts', 'enqueue_styles', 999);

function enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_uri());
}

add_filter('wp_nav_menu_items', 'add_new_menu_items');

function add_new_menu_items($items)
{
    $items = $items . '<li><a href="contattaci">Contattaci</a></li>';

    return $items;
}
