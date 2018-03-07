<?php

// Register Custom Post Type
function ejo_register_slide_post_type() {

	$labels = array(
		'name'                  => _x( 'Slides', 'Post Type General Name', 'ejo-slider' ),
		'singular_name'         => _x( 'Slide', 'Post Type Singular Name', 'ejo-slider' ),
		'menu_name'             => __( 'Slides', 'ejo-slider' ),
		'name_admin_bar'        => __( 'Slides', 'ejo-slider' ),
		'archives'              => __( 'Slide Archives', 'ejo-slider' ),
		'attributes'            => __( 'Slide Attributes', 'ejo-slider' ),
		'parent_item_colon'     => __( 'Parent Slide:', 'ejo-slider' ),
		'all_items'             => __( 'All Slides', 'ejo-slider' ),
		'add_new_item'          => __( 'Add New Slide', 'ejo-slider' ),
		'add_new'               => __( 'Add New', 'ejo-slider' ),
		'new_item'              => __( 'New Slide', 'ejo-slider' ),
		'edit_item'             => __( 'Edit Slide', 'ejo-slider' ),
		'update_item'           => __( 'Update Slide', 'ejo-slider' ),
		'view_item'             => __( 'View Slide', 'ejo-slider' ),
		'view_items'            => __( 'View Slides', 'ejo-slider' ),
		'search_items'          => __( 'Search Slide', 'ejo-slider' ),
		'not_found'             => __( 'Not found', 'ejo-slider' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'ejo-slider' ),
		'featured_image'        => __( 'Featured Image', 'ejo-slider' ),
		'set_featured_image'    => __( 'Set featured image', 'ejo-slider' ),
		'remove_featured_image' => __( 'Remove featured image', 'ejo-slider' ),
		'use_featured_image'    => __( 'Use as featured image', 'ejo-slider' ),
		'insert_into_item'      => __( 'Insert into item', 'ejo-slider' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'ejo-slider' ),
		'items_list'            => __( 'Slides list', 'ejo-slider' ),
		'items_list_navigation' => __( 'Slides list navigation', 'ejo-slider' ),
		'filter_items_list'     => __( 'Filter items list', 'ejo-slider' ),
	);
	$args = array(
		'label'                 => __( 'Slide', 'ejo-slider' ),
		'description'           => __( 'Create your own slides', 'ejo-slider' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
		'taxonomies'            => array( 'slider' ),
		'hierarchical'          => false,
		'public'                => false,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => null,
		'menu_icon'             => 'dashicons-slides',
		'show_in_admin_bar'     => false,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => false,
		'capability_type'       => 'post',
		'show_in_rest'          => false,
	);
	register_post_type( 'slide', $args );

}
add_action( 'init', 'ejo_register_slide_post_type', 0 );