<?php

function fix_ie8() {if (strpos($_SERVER['HTTP_USER_AGENT'],"MSIE 8")) {header("X-UA-Compatible: IE=7");}}
add_action('bb_send_headers','fix_ie8');  // for bbPress
add_action('send_headers','fix_ie8');    // for WordPress


add_filter( 'widget_text', 'shortcode_unautop' );
add_filter( 'widget_text', 'do_shortcode' );

//title filter
function filter_wp_title( $title ) {
	global $page, $paged;
	if ( is_feed() )
	return $title;

	$site_description = get_bloginfo( 'description' );
	$filtered_title = $title . get_bloginfo( 'name' );
	$filtered_title .= ( ! empty( $site_description ) && ( is_home() || is_front_page() ) ) ? ' | ' . $site_description: '';
	$filtered_title .= ( 2 <= $paged || 2 <= $page ) ? ' | ' . sprintf( __( 'Page %s', 'raythompwebdesign-com' ), max( $paged, $page ) ) : '';
	return $filtered_title;
}
add_filter( 'wp_title', 'filter_wp_title' );



//set content width
if ( ! isset( $content_width ) ) {$content_width = 600;};


//theme set up
if ( ! function_exists( 'my_theme_setup' ) ) :

function my_theme_setup(){

function wpb_add_google_fonts() {
	 

wp_enqueue_style( 'wpb-google-fonts','https://fonts.googleapis.com/css?family=Cairo|PT+Sans:400,700|Raleway:400,500,600,700|Roboto:400,500,700|Source+Sans+Pro|Titillium+Web:400,600,700', false );

}
	 
add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

//Localization support
load_theme_textdomain('raythompwebdesign-com', get_template_directory() . '/languages');

add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'gallery', 'caption' ) );

add_theme_support( 'post-thumbnails' );

set_post_thumbnail_size( 150, 170, true );
add_image_size( 'custom', 583, 9999 );

set_post_thumbnail_size( 100, 100, true );
add_image_size( 'featured-image', 783, 9999 );
// Create three new image sizes
add_image_size('small', 100, 9999);
add_image_size('medium', 320, 9999);
add_image_size('largest', 1800, 9999);

<<<<<<< HEAD

=======
>>>>>>> origin/master

add_theme_support( 'title-tag' );
add_theme_support( 'custom-header');
add_theme_support( 'custom-background');
add_theme_support( 'nav-menus' );

$defaults = array(
	'default-image'          => '',
	'random-default'         => false,
	'width'                  => 0,
	'height'                 => 0,
	'flex-height'            => false,
	'flex-width'             => false,
	'default-text-color'     => '',
	'header-text'            => true,
	'uploads'                => true,
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);


//register menus
register_nav_menus(	array(  	'main' => 'Main Nav', 
								'Secondary' => 'Secondary',
								'mobile' => 'mobile' ));
}

endif; // my_theme_setup end
add_action('after_setup_theme', 'my_theme_setup');
 

//remove comment cookies
remove_action('set_comment_cookies', 'wp_set_comment_cookies');


//remove stuff
function cubiq_setup () {
    remove_action('wp_head', 'wp_generator');                // #1
    remove_action('wp_head', 'wlwmanifest_link');            // #2
    remove_action('wp_head', 'rsd_link');                    // #3
    remove_action('wp_head', 'wp_shortlink_wp_head');        // #4

    add_filter('the_generator', '__return_false');            // #6
    
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action('wp_head', 'feed_links_extra', 3);
}
add_action('after_setup_theme', 'cubiq_setup');

/**
 * Proper way to enqueue scripts and styles
 */

function	mytheme_register_styles(){
wp_register_style('custom', get_stylesheet_directory_uri() . '/css/custom-editor-style.css', false,'1.1','all' );
wp_register_style('reset',get_stylesheet_directory_uri() . '/css/normalize.css', false,'1.1','all' );
wp_register_style('responsive',get_stylesheet_directory_uri() . '/js/responsive-nav.js-master/responsive-nav.css', false, true );
wp_register_style('awesome',get_stylesheet_directory_uri() . '/fontawesome/css/font-awesome.min.css', false,'1.1','all' );
wp_register_style('kelson',get_stylesheet_directory_uri() . '/fonts/kelson_regular/stylesheet.css', false,'1.1','all' );
/*wp_register_style('BloggerSans',get_stylesheet_directory_uri() . '/fonts/BloggerSans/BloggerSans.css', false,'1.1','all' );
wp_register_style('Viro',get_stylesheet_directory_uri() . '/fonts/Viro/stylesheet.css', false,'1.1','all' );*/


wp_enqueue_style( 'custom' );
wp_enqueue_style( 'reset' );
wp_enqueue_style( 'responsive' );
wp_enqueue_style( 'awesome' );
wp_enqueue_style( 'kelson' );
/*wp_enqueue_style( 'BloggerSans' );
wp_enqueue_style( 'Viro' );*/

}
add_action('wp_enqueue_scripts','mytheme_register_styles');


function raythompwebdesign_add_lightbox() {
	wp_enqueue_style( 'lightbox-style', get_template_directory_uri() . '/inc/lightbox/css/jquery.fancybox.css' ,false,'1.1','all');
    wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/inc/lightbox/js/jquery.fancybox.pack.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'lightbox', get_template_directory_uri() . '/inc/lightbox/js/lightbox.js', array( 'fancybox' ), false, true );
    
}
add_action( 'wp_enqueue_scripts', 'raythompwebdesign_add_lightbox' );

function my_scripts_own() {


wp_register_script( 'scrollto', get_template_directory_uri() . '/js/scrollto.js', array('jquery'),'1.0.0', true );
wp_register_script( 'cookie', get_template_directory_uri() . '/js/jquery.cookie.js', array('jquery'),'1.0.0', true );
wp_register_script( 'menuswitch', get_template_directory_uri() . '/js/menuswitch.js', array('jquery'),'1.0', true );


wp_enqueue_script( 'responsivenav', get_template_directory_uri() . '/js/responsive-nav.js-master/responsive-nav.min.js', array());
wp_enqueue_script( 'scrollto' );
wp_enqueue_script( 'cookie' );
wp_enqueue_script( 'menuswitch' );
wp_enqueue_script( 'jquery' );


}
add_action( 'wp_enqueue_scripts', 'my_scripts_own' );

function ie_scripts() {

	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'raythompwebdesign-com-ie', get_template_directory_uri() . '/css/ie.css', array(), '1.0' );
	wp_style_add_data( 'raythompwebdesign-com-ie', 'conditional', 'lte IE 9' );
	
	// Load the html5 shiv.
	wp_enqueue_script( 'raythompwebdesign-com-html5', get_template_directory_uri() . '/js/html5shiv.min.js', array(), '3.7.3' );
	wp_script_add_data( 'raythompwebdesign-com-html5', 'conditional', 'lte IE 9' );

	// Load the html5 shiv.
	wp_enqueue_script( 'raythompwebdesign-com-selectivizr', get_template_directory_uri() . '/js/selectivizr-min.js', array(), '3.7.3');
	wp_script_add_data( 'raythompwebdesign-com-selectivizr', 'conditional', 'lte IE 9' );

	// Load the html5 shiv.
	wp_enqueue_script( 'raythompwebdesign-com-respond', get_template_directory_uri() . '/js/Respond-master/src/respond.js', array(), '1.0.0');
	wp_script_add_data( 'raythompwebdesign-com-respond', 'conditional', 'lte IE 9' );

}
add_action( 'wp_enqueue_scripts', 'ie_scripts' );

/**
 * End of enqueue scripts and styles
 */


//svg
function cc_mime_types( $mimes ){
$mimes['svg'] = 'image/svg+xml';
return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );


//read more button
function excerpt_read_more_link($output) {
 global $post;
 return $output . '<br/><a href="'. get_permalink($post->ID) . '" class="read_more"> Read More...</a>';
}
add_filter('the_excerpt', 'excerpt_read_more_link');


/**
 * Register our sidebars and widgetized areas.
 *
 */



/****Sidebar!******/
if ( function_exists( 'register_sidebar' ) ) {
	register_sidebar( array (
	'name' => __( 'Primary Sidebar', 'raythompwebdesign-com' ),
	'id' => 'primary-widget-area',
	'description' => __( 'The primary widget area', 'raythompwebdesign-com' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => "</div>",
	'before_title' => '<h2 class="widget-title">',
	'after_title' => '</h2>',
	) );
}




function map_widgets_init() {
	register_sidebar( array(
		'name' => 'map',
		'id' => 'map',
		'before_widget' => '<div id="map">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'map_widgets_init' );


function social_widgets_init() {
	register_sidebar( array(
	'name' => 'social',
	'id' => 'social',
	'before_widget' => '<div id="social">',
	'after_widget' => '</div>',
	'before_title' => '<h2>',
	'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'social_widgets_init' );


function contact_widgets_init() {
register_sidebar( array(
'name' => 'contact',
'id' => 'contact',
'before_widget' => '<div id="contactform">',
'after_widget' => '</div>',
'before_title' => '<h2>',
'after_title' => '</h2>',
) );

}
add_action( 'widgets_init', 'contact_widgets_init' );

?>


<?php add_action('wp_footer','add_google_analytics');//Google Analytics
function add_google_analytics() {
?>
<script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-52392183-1', 'auto');

  ga('send', 'pageview');

</script>
<?php } ?>