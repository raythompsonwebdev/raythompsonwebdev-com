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
	$filtered_title .= ( 2 <= $paged || 2 <= $page ) ? ' | ' . sprintf( __( 'Page %s', 'raythompsonwebdev-com' ), max( $paged, $page ) ) : '';
	return $filtered_title;
}
add_filter( 'wp_title', 'filter_wp_title' );

//set content width
if ( ! isset( $content_width ) ) {$content_width = 600;};


//theme set up
if ( ! function_exists( 'my_theme_setup' ) ) :

function my_theme_setup(){

function wpb_add_google_fonts() {

    wp_enqueue_style( 'wpb-google-fonts','https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700', false );
}

//Localization support
load_theme_textdomain('raythompsonwebdev-com', get_template_directory() . '/languages');

add_editor_style( array( 'css/custom-editor-style.css','fonts/font-style.css' ) );

add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'gallery', 'caption' ) );

add_theme_support( 'automatic-feed-links' );

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
//function my_init()
//{
//    if (!is_admin())
//    {
//        wp_deregister_script('jquery');

        // Load a copy of jQuery from the Google API CDN
        // The last parameter set to TRUE states that it should be loaded
        // in the footer.
//        wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', FALSE, '1.11.0', TRUE);

//        wp_enqueue_script('jquery');
//    }
//}
//add_action('init', 'my_init');

//enqueue style sheets
function mytheme_register_styles(){

wp_register_style('custom', get_stylesheet_directory_uri() . '/custom-editor-style.css', false,'1.1','all' );
wp_register_style('responsive',get_stylesheet_directory_uri() . '/js/responsive-nav.js-master/responsive-nav.css', false, true );
wp_register_style('awesome',get_stylesheet_directory_uri() . '/fontawesome/css/font-awesome.min.css', false,'1.1','all' );
wp_register_style('custom-fonts',get_stylesheet_directory_uri() . '/fonts/font-style.css', false,'1.1','all' );

wp_enqueue_style( 'custom' );
wp_enqueue_style( 'responsive' );
wp_enqueue_style( 'awesome' );
wp_enqueue_style( 'custom-fonts' );
}
add_action('wp_enqueue_scripts','mytheme_register_styles');



//enqueue lightbox script
function raythompwebdesign_add_lightbox() {
    
    if (is_page('websites') || is_page('profile') ) {

        wp_enqueue_style( 'lightbox-style', get_template_directory_uri() . '/inc/lightbox/css/jquery.fancybox.css' ,false,'1.1','all');
        wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/inc/lightbox/js/jquery.fancybox.pack.js', array( 'jquery' ), false, true );
        wp_enqueue_script( 'lightbox', get_template_directory_uri() . '/inc/lightbox/js/lightbox.js', array( 'fancybox' ), false, true );
    }

}
add_action( 'wp_enqueue_scripts', 'raythompwebdesign_add_lightbox' );


//enqueue other scripts
function my_scripts_own() {

    wp_enqueue_script( 'responsivenav', get_template_directory_uri() . '/js/responsive-nav.js-master/responsive-nav.js', array());
    
    //profile page    
    if (is_page('profile') ) {
      
    
    wp_register_script( 'scrollto', get_template_directory_uri() . '/js/scrollto.js', array('jquery'),'20161110', true );
    
    //master
    wp_register_script( 'profile', get_template_directory_uri() . '/js/profile.js', array('jquery'),'20161110', true );
        
    }
    
    //websites page
    if( is_page('websites')){
        
    //master
    wp_register_script( 'websites', get_template_directory_uri() . '/js/websites.js', array('jquery'),'20161110', true );
        
    wp_register_script( 'easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array('jquery'),'20161110', true );
     
    wp_register_script( 'cookie', get_template_directory_uri() . '/js/jquery.cookie.js', array('jquery'),'20161110', true );
    
    }
    
    //master
    wp_register_script( 'master', get_template_directory_uri() . '/js/master.js', array('jquery'),'20161110', true );

    wp_enqueue_script('jquery');
    wp_enqueue_script( 'easing' );
    wp_enqueue_script( 'scrollto' );
    wp_enqueue_script( 'cookie' );
    wp_enqueue_script( 'profile' );
    wp_enqueue_script( 'websites' );
    wp_enqueue_script( 'master' );

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

	// Load the html5.
	wp_enqueue_script( 'raythompwebdesign-com-html5', get_template_directory_uri() . '/js/html5shiv.min.js', array(), '3.7.3' );
	wp_script_add_data( 'raythompwebdesign-com-html5', 'conditional', 'lte IE 9' );

	// Load the Selectivizr.
	wp_enqueue_script( 'raythompwebdesign-com-selectivizr', get_template_directory_uri() . '/js/selectivizr-min.js', array(), '3.7.3');
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
function excerpt_read_more_link($output) {
	 global $post;
	 return $output . '<br/><a href="'. get_permalink($post->ID) . '" class="read_more">Read More</a>';
}
add_filter('the_excerpt', 'excerpt_read_more_link');

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


//contact form area
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


//post meta data function to display avatar
if ( ! function_exists( 'popperscores_posted_on' ) ) :
    /**
     * Prints HTML with meta information for the current post-date/time and author.
     */
    function popperscores_posted_on() {
            $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
            if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
                    $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time> - Updated: <time class="updated" datetime="%3$s">%4$s</time>';
            }

            $time_string = sprintf( $time_string,
                    esc_attr( get_the_date( 'c' ) ),
                    esc_html( get_the_date() ),
                    esc_attr( get_the_modified_date( 'c' ) ),
                    esc_html( get_the_modified_date() )
            );

            $posted_on = sprintf(
                    esc_html_x( 'published %s', 'post date', 'raythompsonwebdev-com' ),
                    '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
            );

            $byline = sprintf(
                    esc_html_x( 'by %s', 'post author', 'raythompsonwebdev-com' ),
                    '<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
            );

            // Display the author avatar if the author has a Gravatar
            $author_id = get_the_author_meta( 'ID' );
            if ( popperscores_validate_gravatar( $author_id ) ) {
                    echo '<div class="meta-content has-avatar">';
                    echo '<div class="author-avatar">' . get_avatar( $author_id ) . '</div>';
            } else {
                    echo '<div class="meta-content">';
            }

            echo '<span class="byline"> ' . $byline . '</span><span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.
            if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) {

                    echo '<span class="comments-link">';
                    comments_popup_link( esc_html__( '&#xf086; Leave a comment', 'raythompsonwebdev-com' ), esc_html__( '&#xf086;; 1 Comment', 'raythompsonwebdev-com' ), esc_html__( '&#xf086; % Comments', 'raythompsonwebdev-com' ) );
                    echo '</span>';

                    echo '<span class="bylinetag">';
                    the_tags('Tagged with: ', ', ');
                    echo '</span>';


            }
            echo '</div><!-- .meta-content -->';
    }
endif;

if ( ! function_exists( 'popper_index_posted_on' ) ) :
/**
 * Prints HTML with meta information for post-date/time and author on index pages.
 */
function popperscores_index_posted_on() {

	$author_id = get_the_author_meta( 'ID' );

	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time> - Updated: <time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c') ),
		esc_html( get_the_modified_date() )
	);


	$posted_on = sprintf(
		esc_html_x( 'Published %s', 'post date', 'raythompsonwebdev-com' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);

	$byline = sprintf(
		esc_html_x( 'by %s', 'post author', 'raythompsonwebdev-com' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);
	// Display the author avatar if the author has a Gravatar
	$author_id = get_the_author_meta( 'ID' );
	if ( popperscores_validate_gravatar( $author_id ) ) {
		echo '<div class="meta-content has-avatar">';
		echo '<div class="author-avatar">' . get_avatar( $author_id ) . '</div>';
	} else {
		echo '<div class="meta-content">';
	}
	echo '<span class="byline">' . $byline . ' </span>'
                . '<span class="posted-on">' . $posted_on . ' </span>'; // WPCS: XSS OK.

	echo '</div><!-- .meta-content -->';

}
endif;


function popperscores_validate_gravatar($id_or_email) {
  //id or email code borrowed from wp-includes/pluggable.php
	$email = '';
	if ( is_numeric($id_or_email) ) {
		$id = (int) $id_or_email;
		$user = get_userdata($id);
		if ( $user )
			$email = $user->user_email;
	} elseif ( is_object($id_or_email) ) {
		// No avatar for pingbacks or trackbacks
		$allowed_comment_types = apply_filters( 'get_avatar_comment_types', array( 'comment' ) );
		if ( ! empty( $id_or_email->comment_type ) && ! in_array( $id_or_email->comment_type, (array) $allowed_comment_types ) )
			return false;

		if ( !empty($id_or_email->user_id) ) {
			$id = (int) $id_or_email->user_id;
			$user = get_userdata($id);
			if ( $user)
				$email = $user->user_email;
		} elseif ( !empty($id_or_email->comment_author_email) ) {
			$email = $id_or_email->comment_author_email;
		}
	} else {
		$email = $id_or_email;
	}

	$hashkey = md5(strtolower(trim($email)));
	$uri = 'http://www.gravatar.com/avatar/' . $hashkey . '?d=404';

	$data = wp_cache_get($hashkey);
	if (false === $data) {
		$response = wp_remote_head($uri);
		if( is_wp_error($response) ) {
			$data = 'not200';
		} else {
			$data = $response['response']['code'];
		}
	    wp_cache_set($hashkey, $data, $group = '', $expire = 60*5);

	}
	if ($data == '200'){
		return true;
	} else {
		return false;
	}
}

?>
