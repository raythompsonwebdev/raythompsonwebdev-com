<?php
function fix_ie8() {
	if (strpos($_SERVER['HTTP_USER_AGENT'],"MSIE 8")) {
		header("X-UA-Compatible: IE=7");
	}
}
add_action('send_headers','fix_ie8');    // for WordPress
add_filter( 'widget_text', 'shortcode_unautop' );
add_filter( 'widget_text', 'do_shortcode' );

//title filter
function filter_wp_title( $title ) {
	global $page, $paged;

	if ( is_feed() ){
		return $title;

		$site_description = get_bloginfo( 'description' );
		$filtered_title = $title . get_bloginfo( 'name' );
		$filtered_title .= ( ! empty( $site_description ) && ( is_home() || is_front_page() ) ) ? ' | ' . $site_description: '';
		$filtered_title .= ( 2 <= $paged || 2 <= $page ) ? ' | ' . sprintf( __( 'Page %s', 'raythompsonwebdev-com' ), max( $paged, $page ) ) : '';
		return $filtered_title;
	}
}
add_filter( 'wp_title', 'filter_wp_title' );

//custom header
function raythompwebdesign_custom_header_setup() {
        add_theme_support( 'custom-logo', array(
            'width' => 96,
            'height' => 96,
            'flex-width' => false,
            'flex-height' => false,
        )
    );
}
add_action( 'after_setup_theme', 'raythompwebdesign_custom_header_setup' );

//set content width
if ( ! isset( $content_width ) ) {$content_width = 600;};

//theme set up
if ( ! function_exists( 'my_theme_setup' ) ) :

function my_theme_setup(){

<<<<<<< HEAD
function wpb_add_google_fonts() {

    wp_enqueue_style( 'wpb-google-fonts','https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700', false );
}

//Localization support
load_theme_textdomain('raythompsonwebdev-com', get_template_directory() . '/languages');

add_editor_style( array( 'css/custom-editor-style.css','fonts/font-style.css' ) );

add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'gallery', 'caption' ) );

add_theme_support( 'automatic-feed-links' );
add_theme_support('post-formats', array('aside', 'gallery', 'link') );
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 100, 100, true );

// Create three new image sizes
//
add_image_size( 'featured-image', 783, 9999 );
add_image_size( 'websites', 450, 700 );
add_image_size('small', 250, 9999);
add_theme_support( 'title-tag' );


add_theme_support( 'custom-header');

add_theme_support( 'custom-background');

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
add_theme_support( 'nav-menus', $defaults );
=======
	function wpb_add_google_fonts() {
>>>>>>> 77f09739064381219ec7ab43fb579e85f4f1413c

	wp_enqueue_style( 'wpb-google-fonts','https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700', false );
	}

	//Localization support
	load_theme_textdomain('raythompsonwebdev-com', get_template_directory() . '/languages');

	add_editor_style( array( 'css/custom-editor-style.css','fonts/font-style.css' ) );

	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'gallery', 'caption' ) );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support('post-formats', array('aside', 'gallery', 'link') );
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 100, 100, true );

	// Create three new image sizes
	//

	add_image_size( 'featured-image', 783, 9999 );
	add_image_size( 'websites', 450, 700 );
	add_image_size('small', 250, 9999);
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-header');
	add_theme_support( 'custom-background');

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
	add_theme_support( 'nav-menus', $defaults );

	$defaults = array(
		'before'           => '<p>' . __( 'Pages:', 'raythompsonwebdev-com' ),
		'after'            => '</p>',
		'link_before'      => '',
		'link_after'       => '',
		'next_or_number'   => 'number',
		'separator'        => ' ',
		'nextpagelink'     => __( 'Next page', 'raythompsonwebdev-com'),
		'previouspagelink' => __( 'Previous page', 'raythompsonwebdev-com' ),
		'pagelink'         => '%',
		'echo'             => 1
		);

	wp_link_pages( $defaults );


	//register menus
	register_nav_menus(	array(
		'main' => 'Main Nav',
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
// remove version from rss
add_filter('the_generator', '__return_empty_string');
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action('wp_head', 'feed_links_extra', 3);
}
add_action('after_setup_theme', 'cubiq_setup');

// remove version from scripts and styles
function shapeSpace_remove_version_scripts_styles($src) {
	if (strpos($src, 'ver=')) {
		$src = remove_query_arg('ver', $src);
	}
	return $src;
}
add_filter('style_loader_src', 'shapeSpace_remove_version_scripts_styles', 9999);
add_filter('script_loader_src', 'shapeSpace_remove_version_scripts_styles', 9999);

function remove_version_parameter( $src ){
    // Check if version parameter exist
    $parts = explode( '?ver', $src );
    // return without version parameter
    return $parts[0];
}
// filter .js files
add_filter( 'script_loader_src', 'remove_version_parameter', 15, 1 );
// filter .css files
add_filter( 'style_loader_src', 'remove_version_parameter', 15, 1 );

/*deregister jquery
function my_init()
{
    {
        wp_deregister_script('jquery');

        // Load the copy of jQuery that comes with WordPress
        // The last parameter set to TRUE states that it should be loaded
        // in the footer.
        wp_register_script('jquery', '/wp-includes/js/jquery/jquery.js', FALSE, '1.11.0', TRUE);

        wp_enqueue_scripts('jquery');
    }
}
add_action('wp_enqueue_scripts', 'my_init');
*/
<<<<<<< HEAD
/*
function my_init()
{
    if (!is_admin())
    {
        wp_deregister_script('jquery');

				// Load a copy of jQuery from the Google API CDN
        // The last parameter set to TRUE states that it should be loaded
        // in the footer.
        wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', FALSE, '1.11.0', TRUE);
=======
>>>>>>> 77f09739064381219ec7ab43fb579e85f4f1413c

        wp_enqueue_script('jquery');
    }
}
add_action('init', 'my_init');
*/
//enqueue style sheets
function mytheme_register_styles(){

<<<<<<< HEAD

wp_register_style('custom', get_stylesheet_directory_uri() . '/custom-editor-style.css', false,'1.1','all' );
wp_register_style('responsive',get_stylesheet_directory_uri() . '/js/responsive-nav.js-master/responsive-nav.css', false, true );
wp_register_style('awesome',get_stylesheet_directory_uri() . '/fontawesome/css/font-awesome.min.css', false,'1.1','all' );
wp_register_style('custom-fonts',get_stylesheet_directory_uri() . '/fonts/font-style.css', false,'1.1','all' );
=======
	wp_register_style('custom', get_stylesheet_directory_uri() . '/custom-editor-style.css', false,'1.1','all' );
	wp_register_style('responsive',get_stylesheet_directory_uri() . '/js/responsive-nav.js-master/responsive-nav.css', false, true );
	wp_register_style('awesome',get_stylesheet_directory_uri() . '/fontawesome/css/font-awesome.min.css', false,'1.1','all' );
	wp_register_style('custom-fonts',get_stylesheet_directory_uri() . '/fonts/font-style.css', false,'1.1','all' );
>>>>>>> 77f09739064381219ec7ab43fb579e85f4f1413c

	wp_enqueue_style( 'custom' );
	wp_enqueue_style( 'responsive' );
	wp_enqueue_style( 'awesome' );
	wp_enqueue_style( 'custom-fonts' );
}
add_action('wp_enqueue_scripts','mytheme_register_styles');

//enqueue lightbox script
function raythompwebdesign_add_lightbox() {
<<<<<<< HEAD
//	if(is_page_template('profile') || is_page_template('websites')){
        wp_enqueue_style( 'lightbox-style', get_template_directory_uri() . '/inc/lightbox/css/jquery.fancybox.css' ,false,'1.1','all');
        wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/inc/lightbox/js/jquery.fancybox.pack.js', array( 'jquery' ), false, true );
        wp_enqueue_script( 'lightbox', get_template_directory_uri() . '/inc/lightbox/js/lightbox.js', array( 'fancybox' ), false, true );
//			}
=======
//if(is_page_template('profile') || is_page_template('websites')){
	wp_enqueue_style( 'lightbox-style', get_template_directory_uri() . '/inc/lightbox/css/jquery.fancybox.css' ,false,'1.1','all');
	wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/inc/lightbox/js/jquery.fancybox.pack.js', array( 'jquery' ), false, true );
	wp_enqueue_script( 'lightbox', get_template_directory_uri() . '/inc/lightbox/js/lightbox.js', array( 'fancybox' ), false, true );
//}
>>>>>>> 77f09739064381219ec7ab43fb579e85f4f1413c
}
add_action( 'wp_enqueue_scripts', 'raythompwebdesign_add_lightbox' );


//enqueue other scripts
function my_scripts_own() {

    wp_deregister_script('modernizr');
    wp_enqueue_script( 'responsive-nav', get_template_directory_uri() . '/js/responsive-nav.js-master/responsive-nav.js', array());
	//master
    wp_register_script( 'master', get_template_directory_uri() . '/js/master.js', array('jquery'),'20161110', true );
<<<<<<< HEAD
	//	if(is_page('profile')){
=======
	//if(is_page('profile')){
>>>>>>> 77f09739064381219ec7ab43fb579e85f4f1413c
			//scrollto script
		wp_register_script( 'scrollto', get_template_directory_uri() . '/js/scrollto.js', array('jquery'),'20161110', true );
			//easing script
	    wp_register_script( 'easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array('jquery'),'20161110', true );
			//profile page scripts
	    wp_register_script( 'profile', get_template_directory_uri() . '/js/profile.js', array('jquery'),'20161110', true );
			//fancylightbox page scripts
	    wp_register_script( 'fancylightbox', get_template_directory_uri() . '/js/fancylightbox.js', array('jquery'),'20161110', true );
<<<<<<< HEAD
//		}
//		if(is_page_template('websites')){
			//cookie
		wp_register_script( 'cookie', get_template_directory_uri() . '/js/jquery.cookie.js', array('jquery'),'20161110', true );
		wp_register_script( 'websites', get_template_directory_uri() . '/js/websites.js', array('jquery'),'20161110', true );
//		}

        wp_enqueue_script('jquery');
        wp_enqueue_script( 'easing' );
        wp_enqueue_script( 'scrollto' );
        wp_enqueue_script( 'cookie' );
        wp_enqueue_script( 'master' );
		wp_enqueue_script( 'fancylightbox' );
		wp_enqueue_script( 'profile' );
		wp_enqueue_script( 'websites' );
=======
//	}
//	if(is_page_template('websites')){
			//cookie
		wp_register_script( 'cookie', get_template_directory_uri() . '/js/jquery.cookie.js', array('jquery'),'20161110', true );
		wp_register_script( 'websites', get_template_directory_uri() . '/js/websites.js', array('jquery'),'20161110', true );
	//}

	wp_enqueue_script('jquery');
	wp_enqueue_script( 'easing' );
	wp_enqueue_script( 'scrollto' );
	wp_enqueue_script( 'cookie' );
	wp_enqueue_script( 'master' );
	wp_enqueue_script( 'fancylightbox' );
	wp_enqueue_script( 'profile' );
	wp_enqueue_script( 'websites' );
	
/*	wp_localize_script( 'popper-functions', 'screenReaderText', array(
		'expand'   => '<span class="screen-reader-text">' . __( 'expand child menu', 'popper' ) . '</span>',
		'collapse' => '<span class="screen-reader-text">' . __( 'collapse child menu', 'popper' ) . '</span>',
	) );  */
>>>>>>> 77f09739064381219ec7ab43fb579e85f4f1413c


}
add_action( 'wp_enqueue_scripts', 'my_scripts_own' );



//mobile navigation script
function mf_responsive_nav(){

echo '<script>
  var navigation = responsiveNav("#mobile-nav");
  </script>';

}
add_action('wp_footer', 'mf_responsive_nav');

//ie 8 styles and scripts
function ie_scripts() {

	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'raythompwebdesign-com-ie', get_template_directory_uri() . '/ie.css', array(), '1.0' );
	wp_style_add_data( 'raythompwebdesign-com-ie', 'conditional', 'lte IE 9' );

    // Load the CustomEvent Script.
	wp_enqueue_script( 'raythompwebdesign-com-iejs', get_template_directory_uri() . '/js/ie8.js', array(), '1.0' );
	wp_script_add_data( 'raythompwebdesign-com-iejs', 'conditional', 'lte IE 9' );

	// Load the html5.
	wp_enqueue_script( 'raythompwebdesign-com-html5', get_template_directory_uri() . '/js/html5shiv.min.js', array(), '3.7.3' );
	wp_script_add_data( 'raythompwebdesign-com-html5', 'conditional', 'lte IE 9' );

	// Load the Selectivizr.
	wp_enqueue_script( 'raythompwebdesign-com-selectivizr', get_template_directory_uri() . '/js/selectivizr-min.js', array('jquery'), '3.7.3');
	wp_script_add_data( 'raythompwebdesign-com-selectivizr', 'conditional', 'lte IE 9' );

	// Load the respond.
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
/*
function excerpt_read_more_link($output) {
	 global $post;
	 return $output . '<br/><a href="'. get_permalink($post->ID) . '" class="read_more">Read More</a>';
}
add_filter('the_excerpt', 'excerpt_read_more_link');
*/
/**
 * Register our sidebars and widgetized areas.
 *
 */

/****Sidebar!******/
if ( function_exists( 'register_sidebar' ) ) {
    register_sidebar( array (
    'name' => __( 'Primary Sidebar', 'raythompsonwebdev-com' ),
    'id' => 'primary-widget-area',
    'description' => __( 'The primary widget area', 'raythompsonwebdev-com' ),
    'before_widget' => '<div class="widget">',
    'after_widget' => "</div>",
    'before_title' => '<h2 class="widget-title">',
    'after_title' => '</h2>',
    ) );
}

//map area
function map_widgets_init() {
    register_sidebar( array(
        'name' => 'map',
        'id' => 'map',
        'before_widget' => '<div class="social_media_container">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );
}
add_action( 'widgets_init', 'map_widgets_init' );


//social media widget area
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


//slider form area
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


//responsive images
function twentysixteen_content_image_sizes_attr( $sizes, $size ) {

 $width = $size[0];

 700 <= $width && $sizes = '(max-width: 700px) 85vw, (max-width: 1024px) 67vw, (max-width: 1362px) 62vw, 840px';

 if ( 'page' === get_post_type() ) {
	 700 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
 } else {
	 700 > $width && 300 <= $width && $sizes = '(max-width: 700px) 85vw, (max-width: 1024px) 67vw, (max-width: 984px) 61vw, (max-width: 1362px) 45vw, 600px';
	 300 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
 }

 return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'twentysixteen_content_image_sizes_attr', 10 , 2 );




/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
//require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
//require get_template_directory() . '/inc/jetpack.php';


?>
