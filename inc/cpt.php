<?php

add_action('init', 'dbvv_vk_reviews_optimizer_cpt');
function dbvv_vk_reviews_optimizer_cpt(){

	// Custom Post Type: name
	$labels = array(
		'name'                => _x( 'VK reviews', ' General Name', 'dbvv-vk-reviews-optimizer' ),
		'singular_name'       => _x( 'VK review', 'VK reviews Singular Name', 'dbvv-vk-reviews-optimizer' ),
		'menu_name'           => __( 'Vk reviews', 'dbvv-vk-reviews-optimizer' ),
		'parent_item_colon'   => __( 'Parent VK review:', 'dbvv-vk-reviews-optimizer' ),
		'all_items'           => __( 'All VK reviews', 'dbvv-vk-reviews-optimizer' ),
		'view_item'           => __( 'View VK review', 'dbvv-vk-reviews-optimizer' ),
		'add_new_item'        => __( 'Add New VK review', 'dbvv-vk-reviews-optimizer' ),
		'add_new'             => __( 'Add New', 'dbvv-vk-reviews-optimizer' ),
		'edit_item'           => __( 'Edit VK review', 'dbvv-vk-reviews-optimizer' ),
		'update_item'         => __( 'Update VK review', 'dbvv-vk-reviews-optimizer' ),
		'search_items'        => __( 'Search VK review', 'dbvv-vk-reviews-optimizer' ),
		'not_found'           => __( 'Not found', 'dbvv-vk-reviews-optimizer' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'dbvv-vk-reviews-optimizer' ),
	);
	$args = array(
		'label'               => $labels,
		'description'         => __( 'Vk reviews for page speed optimizer. Easy replace vk review with image and load full content on click.', 'dbvv-vk-reviews-optimizer' ),
		'labels'              => $labels,
		'supports'            => array(
			'title',
			'thumbnail',
			'excerpt',
		),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => 'tools.php',
		'show_in_nav_menus'   => false,
		'show_in_admin_bar'   => true,
		'can_export'          => true,
		'publicly_queryable'  => false,
		'capability_type'     => 'post',
	);

	register_post_type( 'vk_r', $args );
}

