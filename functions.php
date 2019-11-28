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
        'store-nav' => __('Store nav', 'theme'),
    )
);

function create_posttype() {
    register_post_type( 'shirts',
        array(
            'labels' => array(
                'name' => __( 'Shirts' ),
                'singular_name' => __( 'Shirts' )
            ),
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'shirts'),
        )
    );
}


add_action( 'init', 'create_posttype' );
add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );
add_action('wp_enqueue_scripts', 'load_styles');
add_action( 'after_setup_theme', 'theme_setup' );


?>