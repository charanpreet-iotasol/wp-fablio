<?php
// Register Custom Post Type Service
function create_service_cpt() {

	$labels = array(
		'name' => _x( 'Services', 'Post Type General Name', 'velflock' ),
		'singular_name' => _x( 'Service', 'Post Type Singular Name', 'velflock' ),
		'menu_name' => _x( 'Service', 'Admin Menu text', 'velflock' ),
		'name_admin_bar' => _x( 'Service', 'Add New on Toolbar', 'velflock' ),
		'archives' => __( 'Service Archives', 'velflock' ),
		'attributes' => __( 'Service Attributes', 'velflock' ),
		'parent_item_colon' => __( 'Parent Service:', 'velflock' ),
		'all_items' => __( 'All Services', 'velflock' ),
		'add_new_item' => __( 'Add New Service', 'velflock' ),
		'add_new' => __( 'Add New', 'velflock' ),
		'new_item' => __( 'New Service', 'velflock' ),
		'edit_item' => __( 'Edit Service', 'velflock' ),
		'update_item' => __( 'Update Service', 'velflock' ),
		'view_item' => __( 'View Service', 'velflock' ),
		'view_items' => __( 'View Services', 'velflock' ),
		'search_items' => __( 'Search Service', 'velflock' ),
		'not_found' => __( 'Not found', 'velflock' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'velflock' ),
		'featured_image' => __( 'Featured Image', 'velflock' ),
		'set_featured_image' => __( 'Set featured image', 'velflock' ),
		'remove_featured_image' => __( 'Remove featured image', 'velflock' ),
		'use_featured_image' => __( 'Use as featured image', 'velflock' ),
		'insert_into_item' => __( 'Insert into Service', 'velflock' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Service', 'velflock' ),
		'items_list' => __( 'Services list', 'velflock' ),
		'items_list_navigation' => __( 'Services list navigation', 'velflock' ),
		'filter_items_list' => __( 'Filter Services list', 'velflock' ),
	);
	$args = array(
		'label' => __( 'Service', 'velflock' ),
		'description' => __( 'custom post type for servies', 'velflock' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-menu-alt3',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'post-formats'),
		'taxonomies' => array('category', 'post_tag'),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'service', $args );

}
add_action( 'init', 'create_service_cpt', 0 );
?>