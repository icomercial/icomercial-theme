<?php
function icomercial_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus([
        'primary' => __('Menú Principal', 'icomercial'),
    ]);
}
add_action('after_setup_theme', 'icomercial_setup');

function icomercial_scripts() {
    wp_enqueue_style('icomercial-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'icomercial_scripts');
