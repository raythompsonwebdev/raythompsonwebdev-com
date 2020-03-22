<?php
/**
 * Custom Post for Web Projects
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package    WordPress
 * @subpackage Raythompsonwebdev-com
 */
 // If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'RTWD_VERSION', '1.0.0' );
define( 'RTWDDOMAIN', 'raythompsonwebdev-com' );
define( 'RTWDPATH', get_stylesheet_directory() . '/raythompsonwebdev-customv2/' );

require_once RTWDPATH . '/post-types/register.php';
// Custom Post.
add_action( 'init', 'raythompsonwebdev_com_register_post_type', 0 );

require_once RTWDPATH . '/taxonomies/register.php';
// Taxonomy.
add_action( 'init', 'raythompsonwebdev_com_register_taxonomies', 0 );


/**
 *  Flush rewrite rules to add "project" as a permalink slug.
 */
function raythompsonwebdev_com_rewrite_flush() {
	raythompsonwebdev_com_register_post_type();
	flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'raythompsonwebdev_com_rewrite_flush' );



