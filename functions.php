<?php 

function load_styles() {
    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', 
    array(), false, 'all');
    wp_enqueue_style('stylesheet');
}

add_action("wp_enqueue_scripts", "myscripts");
	function myscripts() {
		wp_register_script('modalscript', get_template_directory_uri() .'/scripts/modal.js',
		'',
		'',
		true);
		wp_enqueue_script( 'modalscript' );
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
        'shirts-nav' => __('Shirts nav', 'theme'),
    )
);

add_action( 'init', 'create_posttype' );

function create_posttype() {

    $labels = array(
		'name'                  => 'Shits',
		'singular_name'         => 'Shirt',
		'menu_name'             => 'Shirts',
		'name_admin_bar'        => 'Shirt',
		'archives'              => 'Shirt Archives',
		'attributes'            => 'Item Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Items',
		'add_new_item'          => 'Add New Item',
		'add_new'               => 'Add New',
		'new_item'              => 'New Item',
		'edit_item'             => 'Edit Item',
		'update_item'           => 'Update Item',
		'view_item'             => 'View Item',
		'view_items'            => 'View Items',
		'search_items'          => 'Search Item',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Items list',
		'items_list_navigation' => 'Items list navigation',
		'filter_items_list'     => 'Filter items list',
	);

    $args = array(
		'label'                 => 'Product',
		'description'           => 'Post Type Description',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'shirts', 'category',),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);

    register_post_type( 'shirts', $args);
}




// Register Custom Taxonomy
function custom_taxonomy() {

	$labels = array(
		'name'                       => __( 'Shirts', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => __( 'Shirts', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Shirt Taxonomy', 'text_domain' ),
        'all_items'                  => __( 'All Shirts', 'text_domain' ),
		'parent_item'                => __( 'Parent Shirt', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Shirt:', 'text_domain' ),
		'new_item_name'              => __( 'New Shirt', 'text_domain' ),
		'add_new_item'               => __( 'Add New Shirt', 'text_domain' ),
		'edit_item'                  => __( 'Edit Shirt', 'text_domain' ),
		'update_item'                => __( 'Update Shirt', 'text_domain' ),
		'view_item'                  => __( 'View Shirt', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Shirts with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove shirts', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Shirts', 'text_domain' ),
		'search_items'               => __( 'Search Shirts', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No shirts', 'text_domain' ),
		'items_list'                 => __( 'Items shirts', 'text_domain' ),
		'items_list_navigation'      => __( 'Shirts list navigation', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                       => 'shirts',
		'with_front'                 => true,
		'hierarchical'               => true,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'taxonomy', array( 'shirts', 'page', ), $args );

}
add_action( 'init', 'custom_taxonomy', 0 );





add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );
add_action('wp_enqueue_scripts', 'load_styles');
add_action( 'after_setup_theme', 'theme_setup' );

?>