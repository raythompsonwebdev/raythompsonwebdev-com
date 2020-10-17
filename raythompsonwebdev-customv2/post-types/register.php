<?php
/**
 * Custom Post Type
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package    WordPress
 * @subpackage Raythompsonwebdev-com
 */

/**
 *
 *  Creating a function to create our CPT.
 */
function raythompsonwebdev_com_register_post_type() {

	// Set UI labels for Custom Post Type.
	$labels = array(
		'name'                  => _x( 'Projects', 'Post Type General Name', 'raythompsonwebdev-com' ),
		'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'raythompsonwebdev-com' ),
		'menu_name'             => __( 'Projects', 'raythompsonwebdev-com' ),
		'name_admin_bar'        => __( 'Projects', 'raythompsonwebdev-com' ),
		'parent_item_colon'     => __( 'Parent Project', 'raythompsonwebdev-com' ),
		// 'menu_icon' => get_stylesheet_directory_uri() . '/images/portfolio-icon.png'.
		// 'menu_icon' => 'dashicons-download'.
		'all_items'             => __( 'Projects', 'raythompsonwebdev-com' ),
		'view_item'             => __( 'View Projects', 'raythompsonwebdev-com' ),
		'add_new_item'          => __( 'Add New Project', 'raythompsonwebdev-com' ),
		'add_new'               => __( 'Add Project', 'raythompsonwebdev-com' ),
		'edit_item'             => __( 'Edit Project', 'raythompsonwebdev-com' ),
		'update_item'           => __( 'Update Project', 'raythompsonwebdev-com' ),
		'search_items'          => __( 'Search Project', 'raythompsonwebdev-com' ),
		'not_found'             => __( 'Not Found', 'raythompsonwebdev-com' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'raythompsonwebdev-com' ),
		'featured_image'        => __( 'Featured Image', 'raythompsonwebdev-com' ),
		'set_featured_image'    => __( 'Set featured image', 'raythompsonwebdev-com' ),
		'remove_featured_image' => __( 'Remove featured image', 'raythompsonwebdev-com' ),
		'use_featured_image'    => __( 'Use as featured image', 'raythompsonwebdev-com' ),
	);

	// Set other options for Custom Post Type.
	$args = array(
		'label'               => __( 'Projects', 'raythompsonwebdev-com' ),
		'description'         => __( 'Web Development Projects', 'raythompsonwebdev-com' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor.
		'supports'            => array( 'title', 'editor', 'post-formats', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
		// You can associate this CPT with a taxonomy or custom taxonomy.
		'taxonomies'          => array( 'project-category', 'post_tag' ),

		// A hierarchical CPT is like Pages and can have Parent and child items. A non-hierarchical CPT is like Posts.
		// 'register_meta_box_cb' => 'raythompsonwebdev_com_register_metaboxes'.
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_graphql'     => true,
		'graphql_single_name' => 'project',
    'graphql_plural_name' => 'projects',
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_rest'        => true,
		'menu_icon'           => 'dashicons-welcome-widgets-menus',
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'query_var'           => true,
		'rewrite'             => array( 'slug' => 'project' ),
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);

	// Registering your Custom Post Type.
	register_post_type( 'project', $args );

}

