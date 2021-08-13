<?php

function load_stylesheets(){
    /* Format ('name of stylesheet', URL of the file, array(dependent stylesheets), version number, 'medai screen to work on) */
    wp_register_style('stylesheet', get_template_directory_uri().'/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('stylesheet');
}

function loadjs(){
    /* Format ('name of script', URL of the file, array(dependent scripts), version number, 'in footer) */
    wp_register_style('customjs', get_template_directory_uri().'/js/bootstrap.min.js', '', '1', false);
    wp_enqueue_style('customjs');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');
add_action('wp_enqueue_scripts', 'loadjs');

add_theme_support('menus');
add_theme_support('post-thumbnails');

register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme'),
    )
);

// name, width, height, true cropped
add_image_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, true);