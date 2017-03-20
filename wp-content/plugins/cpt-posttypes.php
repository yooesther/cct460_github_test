<?php
/*
 * Plugin Name: Travel Flying CPT
 * Plugin URI: http://phoenix.sheridanc.on.ca
 * Description: The CPT and taxonomies plugin for CCT460
 * Version: 0.1
 * Author: Group Ei8ht
 * Author URI: http://phoenix.sheridanc.on.ca/~ccit4071
 * License: GPL2
 */

// Registering Portfolio CPT  
function cpt_posttypes() {
	$labels = array(
		'name' => 					'Destinations',
		'singular_name' => 			'Destination',
		'menu_name' => 				'Destinations',
		'name_admin_bar' => 		'Destination',
		'add_new' => 				'Add new',
		'add_new_item' =>			'New Destination',
		'edit_item' => 				'Edit Destination',
		'all_items' => 				'All Destinations',
		'view_item' => 				'View Destination',
		'all_items' =>				'All Destinations',
		'search_items' =>			'Search Destinations',
	);
	
	$args = array(
		'labels' => 				$labels,
		'public' => 				true,
		'publicly_queryable' =>		true,
		'show_ui' => 				true,
		'show_in_menu' => 			true,
		'menu_icon' => 				'dashicons-palmtree',
		'query_var' => 				true,
		'rewrite' => 				array( 'slug' => 'destinations' ),
		'capability_type' => 		'post',
		'has_archive' => 			true,
		'hierarchical' => 			false,
		'menu_position' => 			5,
		'supports' => 				array( 'title', 'editor', 'thumbnail', 'custom-fields', 'comments' ),
		'taxonomies' => 			array( 'category', 'post_tag' )
	);
	register_post_type( 'destinations', $args );
}
add_action( 'init', 'cpt_posttypes' );

//Flushing Rewrite on Activation
function rewrite_flush() {
	cpt_posttypes();
	flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'rewrite_flush' );

// Custom Taxonomies
function cpt_custom_tax() {
	/* Types of Projects */
	register_taxonomy(
		'locations',
		'destinations',
		array(
			'label' => 'Location',
			'rewrite' => array( 'slug' => 'location' ),
			'hierarchical' => true,
		)
	);
	/* Types of media */
	register_taxonomy(
		'ratings',
		'destinations',
		array(
			'label' => 'Ratings',
			'rewrite' => array( 'slug' => 'ratings' ),
			'hierarchical' => false,
		)
	);
}
add_action( 'init', 'cpt_custom_tax' );