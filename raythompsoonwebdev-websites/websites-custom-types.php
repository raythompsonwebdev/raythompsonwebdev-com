<?php
/**
 * Plugin Name: Custom Post Types and Taxonomies
 * Plugin URI: http://yoursite.com
 * Description: raythompsonwebdev-com custom post types - folder
 * Version: 0.1
 * Author: Raymond Thompson
 * Author URI: http://yoursite.com
 * License: GPL2
 */

/*  Copyright 2017  RAYMOND_THOMPSON  (email : raymond.thompson@raythompsonwebdev.co.uk)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


/*
* Creating a function to create our CPT
*/

function custom_post_type() {

// Set UI labels for Custom Post Type
	$labels = array(
<<<<<<< HEAD
		'name'                => _x( 'Websites', 'Post Type General Name', 'raythompsonwebdev-com' ),
		'singular_name'       => _x( 'Websites', 'Post Type Singular Name', 'raythompsonwebdev-com' ),
		'menu_name'           => __( 'Websites', 'raythompsonwebdev-com' ),
		'name_admin_bar'      => __( 'Websites', 'raythompsonwebdev-com' ),
		'parent_item_colon'   => __( 'Parent Websites', 'raythompsonwebdev-com' ),
		//'menu_icon' 					=> get_stylesheet_directory_uri() . '/images/portfolio-icon.png',
		//'menu_icon' => 'dashicons-download',
		'all_items'           => __( 'Websites', 'raythompsonwebdev-com' ),
		'view_item'           => __( 'View Websites', 'raythompsonwebdev-com' ),
		'add_new_item'        => __( 'Add New Websites', 'raythompsonwebdev-com' ),
		'add_new'             => __( 'Add Websites', 'raythompsonwebdev-com' ),
		'edit_item'           => __( 'Edit Websites', 'raythompsonwebdev-com' ),
		'update_item'         => __( 'Update Websites', 'raythompsonwebdev-com' ),
		'search_items'        => __( 'Search Websites', 'raythompsonwebdev-com' ),
=======
		'name'                => _x( 'Website', 'Post Type General Name', 'raythompsonwebdev-com' ),
		'singular_name'       => _x( 'Website', 'Post Type Singular Name', 'raythompsonwebdev-com' ),
		'menu_name'           => __( 'Website', 'raythompsonwebdev-com' ),
		'name_admin_bar'      => __( 'Website', 'raythompsonwebdev-com' ),
		'parent_item_colon'   => __( 'Parent Website', 'raythompsonwebdev-com' ),
		//'menu_icon' 					=> get_stylesheet_directory_uri() . '/images/portfolio-icon.png',
		//'menu_icon' => 'dashicons-download',
		'all_items'           => __( 'Website', 'raythompsonwebdev-com' ),
		'view_item'           => __( 'View Website', 'raythompsonwebdev-com' ),
		'add_new_item'        => __( 'Add New Website', 'raythompsonwebdev-com' ),
		'add_new'             => __( 'Add Website', 'raythompsonwebdev-com' ),
		'edit_item'           => __( 'Edit Website', 'raythompsonwebdev-com' ),
		'update_item'         => __( 'Update Website', 'raythompsonwebdev-com' ),
		'search_items'        => __( 'Search Website', 'raythompsonwebdev-com' ),
>>>>>>> origin/master
		'not_found'           => __( 'Not Found', 'raythompsonwebdev-com' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'raythompsonwebdev-com' ),
		'featured_image'      => __( 'Featured Image', 'raythompsonwebdev-com' ),
		'set_featured_image'    => __( 'Set featured image', 'raythompsonwebdev-com' ),
		'remove_featured_image' => __( 'Remove featured image', 'raythompsonwebdev-com' ),
		'use_featured_image'    => __( 'Use as featured image', 'raythompsonwebdev-com' ),
	);

// Set other options for Custom Post Type

	$args = array(
<<<<<<< HEAD
		'label'               => __( 'Websites', 'raythompsonwebdev-com' ),
		'description'         => __( 'Websites news and reviews', 'raythompsonwebdev-com' ),
=======
		'label'               => __( 'Website', 'raythompsonwebdev-com' ),
		'description'         => __( 'Website Gallery', 'raythompsonwebdev-com' ),
>>>>>>> origin/master
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'post-formats', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		// You can associate this CPT with a taxonomy or custom taxonomy.
<<<<<<< HEAD
		'taxonomies'          => array( 'video-category' , 'post_tag' ),
=======
		'taxonomies'          => array( 'website-category' , 'post_tag' ),
>>>>>>> origin/master
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/
		'register_meta_box_cb' => 'add_websites_metaboxes',
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		//'menu_icon' => get_stylesheet_directory_uri() . '/functions/panel/images/catchinternet-small.png',
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'query_var' => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);

	// Registering your Custom Post Type
<<<<<<< HEAD
	register_post_type( 'websites', $args );
=======
	register_post_type( 'website', $args );
>>>>>>> origin/master

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/

add_action( 'init', 'custom_post_type', 0 );


function my_taxonomies_product() {

  $labels = array(
<<<<<<< HEAD
    'name'              => _x( 'Websites Categories', 'taxonomy general name' ),
    'singular_name'     => _x( 'Websites Category', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Websites Categories' ),
    'all_items'         => __( 'All Websites Categories' ),
    'parent_item'       => __( 'Parent Websites Category' ),
    'parent_item_colon' => __( 'Parent Websites Category:' ),
    'edit_item'         => __( 'Edit Websites Category' ),
    'update_item'       => __( 'Update Websites Category' ),
    'add_new_item'      => __( 'Add New Websites Category' ),
    'new_item_name'     => __( 'New Websites Category' ),
    'menu_name'         => __( 'Websites Categories' ),
=======
    'name'              => _x( 'Website Categories', 'taxonomy general name' ),
    'singular_name'     => _x( 'Website Category', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Website Categories' ),
    'all_items'         => __( 'All Website Categories' ),
    'parent_item'       => __( 'Parent Website Category' ),
    'parent_item_colon' => __( 'Parent Website Category:' ),
    'edit_item'         => __( 'Edit Website Category' ),
    'update_item'       => __( 'Update Website Category' ),
    'add_new_item'      => __( 'Add New Website Category' ),
    'new_item_name'     => __( 'New Website Category' ),
    'menu_name'         => __( 'Website Categories' ),
>>>>>>> origin/master
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
		'query_var' => true,
            'rewrite' => array(
<<<<<<< HEAD
                'slug' => 'websites-category', // This controls the base slug that will display before each term
=======
                'slug' => 'website-category', // This controls the base slug that will display before each term
>>>>>>> origin/master
                'with_front' => false // Don't display the category base before
							)

  );
<<<<<<< HEAD
  register_taxonomy( 'websites-category', 'websites', $args );
=======
  register_taxonomy( 'website-category', 'website', $args );
>>>>>>> origin/master


}
add_action( 'init', 'my_taxonomies_product', 0 );




// Flush rewrite rules to add "review" as a permalink slug
function my_rewrite_flush() {
    custom_post_type();
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'my_rewrite_flush' );


//add meta boxes
add_action( 'add_meta_boxes', 'add_websites_metaboxes' );
<<<<<<< HEAD


function add_websites_metaboxes() {
	add_meta_box('websites_details', esc_html__('Websites Details','raythompsonwebdev-com'), 'websites_fields', 'websites', 'normal', 'default');
=======
function add_websites_metaboxes() {
	add_meta_box('website_details', esc_html__('Website Details','raythompsonwebdev-com'), 'website_fields', 'website', 'normal', 'default');
>>>>>>> origin/master
}



<<<<<<< HEAD
function websites_fields (){
=======
function website_fields (){
>>>>>>> origin/master

	global $post;

	$custom = get_post_custom($post->ID);

<<<<<<< HEAD
	$website_name = $custom["website_name"][0];
	$website_code = $custom["website_code"][0];
	$website_url = $custom["website_url"][0];
	$website_description = $custom["website_description"][0];

    ?>

<p><label>Website Name:</label><br /><input size="45" name="website_name"  value="<?php echo $website_name; ?>" /></p>

<p><label>Website Code:</label><br /><input size="45" name="website_code" value="<?php echo $website_code; ?>" /></p>

<p><label>Website URL:</label><br /><input size="45" name="website_url" value="<?php echo $website_url; ?>" /></p>

<p><label>Website Description:</label><br /><textarea col="15" rows="10" name="website_description" value="<?php echo $website_description; ?>"></textarea>
</p>
=======
	$website_name = $custom["Website Name"][0];
	$website_description = $custom["Website Description"][0];
	$website_code = $custom["Website Code"][0];
	$website_url = $custom["Website URL"][0];
	
    ?>

<p><label>Website Name:</label><br /><input size="45" name="Website Name"  value="<?php echo $website_name; ?>" /></p>

<p><label>Website Description:</label><br /><textarea col="15" rows="10" name="Website Description" value="<?php echo $website_description; ?>"></textarea>
</p>

<p><label>Website Code:</label><br /><input size="45" name="Website Code" value="<?php echo $website_code; ?>" /></p>

<p><label>Website URL:</label><br /><input size="45" name="Website URL" value="<?php echo $website_url; ?>" /></p>


>>>>>>> origin/master

	<?php

}


add_action('save_post','save_website_attributes');
add_action('publish_post','save_website_attributes');


function save_website_attributes(){

    global $post;

<<<<<<< HEAD
    update_post_meta($post->ID, "website_name",  $_POST["website_name"]);
    update_post_meta($post->ID, "website_code", $_POST["website_code"]);
    update_post_meta($post->ID, "website_url", $_POST["website_url"]);
		update_post_meta($post->ID, "website_description", $_POST["website_description"]);
=======
    update_post_meta($post->ID, "Website Name",  $_POST["Website Name"]);
	update_post_meta($post->ID, "Website Description", $_POST["Website Description"]);
    update_post_meta($post->ID, "Website Code", $_POST["Website Code"]);
    update_post_meta($post->ID, "Website URL", $_POST["Website URL"]);
	
>>>>>>> origin/master

    // Bail if we're doing an auto save
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

    // if our nonce isn't there, or we can't verify it, bail
    if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;

    // if our current user can't edit this post, bail
    if( !current_user_can( 'edit_post' ) ) return;

}



<<<<<<< HEAD
/*
=======

>>>>>>> origin/master

function check_current_screen() {
    if( !is_admin() ) return;
    global $current_screen;
    print_r( $current_screen );
}
add_action( 'admin_notices', 'check_current_screen' );

<<<<<<< HEAD
/*
function conference_contextual_help() {

	$editspeaker = "From this screen, you can view and update all your soundclash's...";
	$addspeaker = "Enter the details of a new soundclash...";

	$editsession = "View and edit your soundclash sessions...";
=======

function conference_contextual_help() {

	$editspeaker = "From this screen, you can view and update all your soundclash's...";
	$addspeaker = "Enter the details of a new Website...";

	$editsession = "View and edit your Website...";
>>>>>>> origin/master
	$addsession = "Add a new session ...";

	$editsessiontopics = "Add and edit topics...";

	add_contextual_help('edit-soundclash', $editspeaker);
	add_contextual_help('conference_speaker', $addspeaker);

	add_contextual_help('edit-conference_session', $editsession);
	add_contextual_help('conference_session', $addsession);

	add_contextual_help('edit-conference_topics', $editsessiontopics);

}

add_action('admin_init', 'conference_contextual_help');


<<<<<<< HEAD
=======

>>>>>>> origin/master
// The Event Location Metabox

function clash_location() {

    global $post;

	// Noncename needed to verify where the data originated
	echo '<input type="hidden" name="eventmeta_noncename" id="eventmeta_noncename" value="' .
	wp_create_nonce( plugin_basename(__FILE__) ) . '" />';

	// Get the location data if its already been entered
	$location = get_post_meta($post->ID, '_location', true);

	// Echo out the field
	echo '<input type="text" name="_location" value="' . $location  . '" class="widefat" />';



}


<<<<<<< HEAD
*/
=======
>>>>>>> origin/master
//Save the Metabox Data

function wpt_save_clash_meta($post_id, $post) {

	// verify this came from the our screen and with proper authorization,
	// because save_post can be triggered at other times
	if ( !wp_verify_nonce( $_POST['eventmeta_noncename'], plugin_basename(__FILE__) )) {
	return $post->ID;
	}

	// Is the user allowed to edit the post or page?
	if ( !current_user_can( 'edit_post', $post->ID ))
		return $post->ID;

	// OK, we're authenticated: we need to find and save the data
	// We'll put it into an array to make it easier to loop though.

	$events_meta['_location'] = $_POST['_location'];

	// Add values of $events_meta as custom fields

	foreach ($events_meta as $key => $value) { // Cycle through the $events_meta array!
		if( $post->post_type == 'revision' ) return; // Don't store custom data twice
		$value = implode(',', (array)$value); // If $value is an array, make it a CSV (unlikely)
		if(get_post_meta($post->ID, $key, FALSE)) { // If the custom field already has a value
			update_post_meta($post->ID, $key, $value);
		} else { // If the custom field doesn't have a value
			add_post_meta($post->ID, $key, $value);
		}
		if(!$value) delete_post_meta($post->ID, $key); // Delete if blank
	}

}

add_action('save_post', 'wpt_save_clash_meta', 1, 2); // save the custom fields




?>
