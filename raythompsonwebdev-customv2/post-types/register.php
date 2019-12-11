<?php


/**
 *
 *  Creating a function to create our CPT.
 */
function raythompsonwebdev_com_register_post_type() {

	// Set UI labels for Custom Post Type.
	$labels = array(
		'name'                  => _x( 'Projects', 'Post Type General Name', 'RTWDDOMAIN' ),
		'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'RTWDDOMAIN' ),
		'menu_name'             => __( 'Projects', 'RTWDDOMAIN' ),
		'name_admin_bar'        => __( 'Projects', 'RTWDDOMAIN' ),
		'parent_item_colon'     => __( 'Parent Project', 'RTWDDOMAIN' ),
		// 'menu_icon' => get_stylesheet_directory_uri() . '/images/portfolio-icon.png'.
		// 'menu_icon' => 'dashicons-download'.
		'all_items'             => __( 'Projects', 'RTWDDOMAIN' ),
		'view_item'             => __( 'View Projects', 'RTWDDOMAIN' ),
		'add_new_item'          => __( 'Add New Project', 'RTWDDOMAIN' ),
		'add_new'               => __( 'Add Project', 'RTWDDOMAIN' ),
		'edit_item'             => __( 'Edit Project', 'RTWDDOMAIN' ),
		'update_item'           => __( 'Update Project', 'RTWDDOMAIN' ),
		'search_items'          => __( 'Search Project', 'RTWDDOMAIN' ),
		'not_found'             => __( 'Not Found', 'RTWDDOMAIN' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'RTWDDOMAIN' ),
		'featured_image'        => __( 'Featured Image', 'RTWDDOMAIN' ),
		'set_featured_image'    => __( 'Set featured image', 'RTWDDOMAIN' ),
		'remove_featured_image' => __( 'Remove featured image', 'RTWDDOMAIN' ),
		'use_featured_image'    => __( 'Use as featured image', 'RTWDDOMAIN' ),
	);

	// Set other options for Custom Post Type.
	$args = array(
		'label'                => __( 'Projects', 'RTWDDOMAIN' ),
		'description'          => __( 'Web Development Projects', 'RTWDDOMAIN' ),
		'labels'               => $labels,
		// Features this CPT supports in Post Editor.
		'supports'             => array( 'title', 'editor', 'post-formats', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
		// You can associate this CPT with a taxonomy or custom taxonomy.
		'taxonomies'           => array( 'project-category', 'post_tag' ),

		// A hierarchical CPT is like Pages and can have Parent and child items. A non-hierarchical CPT is like Posts.
		//'register_meta_box_cb' => 'raythompsonwebdev_com_register_metaboxes',
		'hierarchical'         => false,
		'public'               => true,
		'show_ui'              => true,
		'show_in_menu'         => true,
		'show_in_nav_menus'    => true,
		'show_in_rest' 		   => true,	
		        		
		'menu_icon' 		   => 'dashicons-welcome-widgets-menus',
		'show_in_admin_bar'    => true,
		'menu_position'        => 5,
		'query_var'            => true,
		'rewrite'              => array( 'slug' => 'project' ),
		'can_export'           => true,
		'has_archive'          => true,
		'exclude_from_search'  => false,
		'publicly_queryable'   => true,
		'capability_type'      => 'post'
  );  
  

	// Registering your Custom Post Type.
	register_post_type( 'project', $args );

}

