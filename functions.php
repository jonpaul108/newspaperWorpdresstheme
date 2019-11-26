<?php 

function load_styles() {
    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', 
    array(), false, 'all');
    wp_enqueue_style('stylesheet');
}

function mytheme_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}

add_theme_support('menus');

register_nav_menus(
    array(
        'top-nav' => __('Top nav', 'theme'),
        'blog-nav' => __('Blog Nav', 'theme'),
    )
);


add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );
add_action('wp_enqueue_scripts', 'load_styles');
add_action( 'after_setup_theme', 'theme_setup' );


?>