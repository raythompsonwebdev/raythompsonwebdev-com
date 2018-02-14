<?php
/**
 * *PHP version 5
 * 
 * Raythompsonwebdev functions and definitions..
 * 
 * @category   Functions
 * @package    Wordpress
 * @subpackage Functions
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       https://codex.wordpress.org/Functions_File_Explained
 * @return     type Description
 */
function Fix_ie8() 
{
    if (strpos($_SERVER['HTTP_USER_AGENT'], "MSIE 8")) {
        header("X-UA-Compatible: IE=7");
    }
}
<<<<<<< HEAD
add_action('send_headers', 'Fix_ie8'); /**
                                       * For WordPress
                                       */
add_filter('widget_text', 'shortcode_unautop');
add_filter('widget_text', 'do_shortcode');
/**
 * Title filter
 */
function Filter_Wp_title( $title ) 
{
    /**
    * Title filter
    *
    * @param global $title Description
    */
    global $page, $paged;

    if (is_feed() ) {
        return $title;
        $site_description = get_bloginfo('description');
        $filtered_title = $title . get_bloginfo('name');
        $filtered_title .= ( ! empty($site_description) && ( is_home() || is_front_page() ) ) ? ' | ' . $site_description: '';
        $filtered_title .= ( 2 <= $paged || 2 <= $page ) ? ' | ' . sprintf(__('Page %s', 'raythompsonwebdev-com'), max($paged, $page)) : '';
        return $filtered_title;
    }
=======
add_action('send_headers','fix_ie8');    // for WordPress
add_filter( 'widget_text', 'shortcode_unautop' );
add_filter( 'widget_text', 'do_shortcode' );

<<<<<<< HEAD
=======
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
>>>>>>> 0f8836b434da8d3e31955a7d44ed61c6333c4864
}
add_filter('wp_title', 'Filter_Wp_title');
>>>>>>> 06bb6834ff1bdf6bc417acbbb75f423890046b84

/**
 * custom header
 */
function Raythompwebdesign_Custom_Header_setup() 
{
       /**
 * custom header set up 
*/
        add_theme_support(
            'custom-logo', array(
            'width' => 96,
            'height' => 96,
            'flex-width' => false,
            'flex-height' => false,
            )
        );
}
<<<<<<< HEAD
add_action('after_setup_theme', 'Raythompwebdesign_Custom_Header_setup');
=======
add_action( 'after_setup_theme', 'raythompwebdesign_custom_header_setup' );

//set content width
if ( ! isset( $content_width ) ) {$content_width = 600;};

//theme set up
if ( ! function_exists( 'my_theme_setup' ) ) :

function my_theme_setup(){

function wpb_add_google_fonts() {
		wp_enqueue_style( 'wpb-google-fonts','https://fonts.googleapis.com/css?family=PT+Sans:400,700', false );
		wp_enqueue_style( 'wpc-google-fonts','https://fonts.googleapis.com/css?family=Cabin:400,700', false );
}
add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

//Localization support
load_theme_textdomain('raythompsonwebdev-com', get_template_directory() . '/languages');

add_editor_style('css/custom-editor-style.css',get_template_directory() . '/fonts/font-awesome/css/font-awesome.min.css' );

add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'gallery', 'caption' ) );

add_theme_support( 'automatic-feed-links' );
add_theme_support('post-formats', array('aside', 'gallery', 'link') );
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 100, 100, true );


// Create three new image sizes
//
add_image_size( 'featured-image', 783, 9999 );
add_image_size( 'websites', 450, 9999 );
add_image_size('small', 300, 9999);
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
>>>>>>> 0f8836b434da8d3e31955a7d44ed61c6333c4864


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $GLOBALS
 * @return Status Description
 */
function Raythompsonwebdev_Content_width() 
{
    /** 
    * Content width.         
    */
    $GLOBALS['content_width'] = apply_filters('raythompsonwebdev_content_width', 702);
    
}
add_action('after_setup_theme', 'Raythompsonwebdev_Content_width', 0);

<<<<<<< HEAD

if (! function_exists('my_theme_setup') ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     * 
     * @return Status Description
     */
    function My_Theme_setup()
    {
        /** 
         * Google fonts Set-up.         
         */

        function Wpb_Add_Google_fonts() 
        {
            wp_enqueue_style('wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Titillium+Web:400,600', false);
        }
        add_action('wp_enqueue_scripts', 'Wpb_Add_Google_fonts');

        /**
 * Localization support.
*/
        load_theme_textdomain('raythompsonwebdev-com', get_template_directory() . '/languages');
=======
endif; // my_theme_setup end
add_action('after_setup_theme', 'my_theme_setup');
<<<<<<< HEAD

//remove comment cookies
remove_action('set_comment_cookies', 'wp_set_comment_cookies');

=======
>>>>>>> 0f8836b434da8d3e31955a7d44ed61c6333c4864

        add_editor_style('css/custom-editor-style.css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

        add_theme_support('html5', array( 'comment-list', 'comment-form', 'gallery', 'caption' ));

<<<<<<< HEAD
        /**
 * Add default posts and comments RSS feed links to head.
*/
        add_theme_support('automatic-feed-links');

        /*
        * Enable support for Post Thumbnails on posts and pages.
        *
        * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
        */
        add_theme_support('post-formats', array('aside', 'gallery', 'link'));
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(100, 100, true);
        add_image_size('featured-image', 783, 9999);
        add_image_size('websites', 450, 9999);
        add_image_size('small', 300, 9999);

        add_theme_support('title-tag');

        add_theme_support('custom-header');
        add_theme_support('custom-background');

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
        add_theme_support('nav-menus', $defaults);


        /**
        * Register menus 
        */
        register_nav_menus(
            array(
            'main' => 'Main Nav',
            'Secondary' => 'Secondary',
            'mobile' => 'mobile' )
        );
    }
=======
>>>>>>> 06bb6834ff1bdf6bc417acbbb75f423890046b84
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
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action('wp_head', 'feed_links_extra', 3);

}
add_action('after_setup_theme', 'cubiq_setup');

//remove
function remove_change_myheaders($headers) {
	unset($headers['X-Pingback']);
	$headers['X-Powered-By'] = 'PHP/5';
	return $headers;
}
add_filter('wp_headers', 'remove_change_myheaders');

// remove version from scripts and styles
function shapeSpace_remove_version_scripts_styles($src) {
	if (strpos($src, 'ver=')) {
		$src = remove_query_arg('ver', $src);
	}
	return $src;
}
add_filter('style_loader_src', 'shapeSpace_remove_version_scripts_styles', 9999);
add_filter('script_loader_src', 'shapeSpace_remove_version_scripts_styles', 9999);
>>>>>>> 0f8836b434da8d3e31955a7d44ed61c6333c4864

endif;  /**
        * My_Theme_setup end 
        */

<<<<<<< HEAD
add_action('after_setup_theme', 'My_Theme_setup');


/*remove comment cookies*/
remove_action('set_comment_cookies', 'wp_set_comment_cookies');

/*remove stuff*/
function Cubiq_setup() 
{
    /**
    * remove stuff 
    */
    remove_action('wp_head', 'wp_generator');                /* #1 */
    remove_action('wp_head', 'wlwmanifest_link');            /*#2 */
    remove_action('wp_head', 'rsd_link');                    /* #3 */
    remove_action('wp_head', 'wp_shortlink_wp_head');        /* #4 */
    add_filter('the_generator', '__return_false');            /* #6*/
    /**
    * remove version from rss
    */
    add_filter('the_generator', '__return_empty_string');
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('wp_head', 'feed_links_extra', 3);
}
add_action('after_setup_theme', 'Cubiq_setup');

<<<<<<< HEAD
=======
/*remove version from scripts and styles*/
function Shapespace_Remove_Version_Scripts_styles($src) 
{
    /**
 * remove version from scripts and styles 
     */
    if (strpos($src, 'ver=')) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}
add_filter('style_loader_src', 'ShapeSpace_Remove_Version_Scripts_styles', 9999);
add_filter('script_loader_src', 'ShapeSpace_Remove_Version_Scripts_styles', 9999);
/**
 * Check if version parameter exist
 */
function Remove_Version_parameter( $src )
{
    /**
 * Check if version parameter exist
*/
    $parts = explode('?ver', $src);
    /**
 * return without version parameter
*/
    return $parts[0];
}
/* *
 * filter .js files
 */
add_filter('script_loader_src', 'Remove_Version_parameter', 15, 1);
/** 
 * filter .css files
 */
add_filter('style_loader_src', 'Remove_Version_parameter', 15, 1);

/**
 * remove wp-embed.min.js
 */
add_action(
    'init', function () {
        /**
    * Remove the REST API endpoint.
    */
        remove_action('rest_api_init', 'wp_oembed_register_route');
        /**
    * Turn off oEmbed auto discovery.
    */
        /**
    * Don't filter oEmbed results.
    */
        remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
        /**
    * Remove oEmbed discovery links.
    */
        remove_action('wp_head', 'wp_oembed_add_discovery_links');
        /**
    * Remove oEmbed-specific JavaScript from the front-end and back-end.
    */
        remove_action('wp_head', 'wp_oembed_add_host_js');
    }, PHP_INT_MAX - 1 
);



function Mytheme_Register_styles()
{
    /**
 * enqueue style sheets 
*/
    wp_register_style('custom', get_stylesheet_directory_uri() . '/custom-editor-style.css', false, '1.1', 'all');
    /**
 * Add Font Awesome icons (http://fontawesome.io)
*/
    wp_enqueue_style('raythompsonwebdev-fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

    wp_enqueue_style('custom');

}
add_action('wp_enqueue_scripts', 'Mytheme_Register_styles');


function My_Scripts_own() 
{
    /**
 * enqueue other scripts 
*/

    wp_deregister_script('modernizr');

    /**
 * enqueue master script file 
*/
    wp_register_script('master', get_template_directory_uri() . '/js/master.js', array('jquery'), '1.0', true);

    wp_enqueue_script('master');
    
    /**
    * wp_localize_script( 'popper-functions', 'screenReaderText', array(
    'expand'   => '<span class="screen-reader-text">' . __( 'expand child menu', 'popper' ) . '</span>',
    'collapse' => '<span class="screen-reader-text">' . __( 'collapse child menu', 'popper' ) . '</span>',
    ) );  
*/
}
add_action('wp_enqueue_scripts', 'My_Scripts_own');


add_action('wp_enqueue_scripts', 'AC_Remove_Cf7_scripts');
function AC_Remove_Cf7_scripts() 
{   
    /**
 * Remove Contact Form 7 scripts + styles unless we're on the contact page
 */
    
    if (!is_page('contact') ) {
        wp_deregister_style('contact-form-7');
        wp_deregister_script('contact-form-7');
    }
}
=======
>>>>>>> 06bb6834ff1bdf6bc417acbbb75f423890046b84
//remove wp-embed.min.js
add_action( 'init', function() {

    // Remove the REST API endpoint.
    remove_action('rest_api_init', 'wp_oembed_register_route');

    // Turn off oEmbed auto discovery.
    // Don't filter oEmbed results.
    remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);

    // Remove oEmbed discovery links.
    remove_action('wp_head', 'wp_oembed_add_discovery_links');

    // Remove oEmbed-specific JavaScript from the front-end and back-end.
    remove_action('wp_head', 'wp_oembed_add_host_js');
}, PHP_INT_MAX - 1 );


/*function your_init_yourscript() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', array(),'2.2.4', true );
}
add_action('init', 'your_init_yourscript');
*/

/*add_action('customize_register', 'customizer');

function defer_parsing_of_js ( $url ) {
    if ( FALSE === strpos( $url, '.js' ) ) return $url;
    if ( strpos( $url, 'jquery.js' ) ) return $url;
    return "$url' defer ";
}
add_filter( 'clean_url', 'defer_parsing_of_js', 11, 1 );
*/

//enqueue style sheets
function mytheme_register_styles(){

	wp_register_style('custom', get_stylesheet_directory_uri() . '/custom-editor-style.css', false,'1.1','all' );
	// Add Font Awesome icons (http://fontawesome.io)
	wp_enqueue_style( 'raythompsonwebdev-fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );

	wp_enqueue_style( 'custom' );

}
add_action('wp_enqueue_scripts','mytheme_register_styles');


//enqueue main scripts
function my_scripts_own() {

    //master
	wp_register_script( 'master', get_template_directory_uri() . '/js/master.js', array('jquery'),'1.0', true );

	wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'master' );


/*  wp_localize_script( 'popper-functions', 'screenReaderText', array(
		'expand'   => '<span class="screen-reader-text">' . __( 'expand child menu', 'popper' ) . '</span>',
		'collapse' => '<span class="screen-reader-text">' . __( 'collapse child menu', 'popper' ) . '</span>',
	) );  */

}
add_action( 'wp_enqueue_scripts', 'my_scripts_own' );

/**
 * Remove Contact Form 7 scripts + styles unless we're on the contact page
 *
 */
add_action( 'wp_enqueue_scripts', 'ac_remove_cf7_scripts' );
function ac_remove_cf7_scripts() {
	if ( !is_page('contact') ) {
		wp_deregister_style( 'contact-form-7' );
		wp_deregister_script( 'contact-form-7' );
	}
}

//enqueue lightbox script for profile page and single gallery page
add_action( 'wp_enqueue_scripts', 'raythompwebdesign_add_lightbox' );
function raythompwebdesign_add_lightbox() {

		wp_enqueue_style( 'lightbox-style', get_template_directory_uri() . '/js/inc/lightbox/css/jquery.fancybox.css' ,false,'1.1','all');
		wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/inc/lightbox/js/jquery.fancybox.pack.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'lightbox', get_template_directory_uri() . '/js/inc/lightbox/js/lightbox.js', array( 'fancybox' ), false, true );

}

//enqueue gallery page scripts
add_action( 'wp_enqueue_scripts', 'gallery_page_script' );
function gallery_page_script() {
	//cookie
	if ("gallery" == get_post_type()){
		wp_register_script( 'cookie', get_template_directory_uri() . '/js/jquery.cookie.js', array('jquery'),'20161110', true );
		wp_register_script( 'gallery', get_template_directory_uri() . '/js/websites.js', array('jquery'),'20161110', true );

		wp_enqueue_script( 'cookie' );
		wp_enqueue_script( 'gallery' );
	}
}

//enqueue profile page scripts
add_action( 'wp_enqueue_scripts', 'profile_page_scripts' );
function profile_page_scripts() {

	if ( is_page( 'profile' ) ) {
		//scrollto script
		wp_register_script( 'scrollto', get_template_directory_uri() . '/js/scrollto.js', array('jquery'),'20161110', true );
				//easing script
		wp_register_script( 'easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array('jquery'),'20161110', true );
				//profile page scripts
		wp_register_script( 'profile', get_template_directory_uri() . '/js/profile.js', array('jquery'),'20161110', true );
				//fancylightbox page scripts
		wp_register_script( 'fancylightbox', get_template_directory_uri() . '/js/fancylightbox.js', array('jquery'),'20161110', true );

		wp_enqueue_script( 'easing' );
		wp_enqueue_script( 'scrollto' );
		wp_enqueue_script( 'profile' );
		wp_enqueue_script( 'fancylightbox' );
	}


}


//Google analytics- Google Tag script
add_action( 'wp_footer', 'google_script' );
function google_script(){ ?>

<script type="text/javascript" async>

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-86655310-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<?php }
<<<<<<< HEAD

=======
add_action( 'wp_footer', 'google_script' ); 
>>>>>>> 0f8836b434da8d3e31955a7d44ed61c6333c4864
>>>>>>> 06bb6834ff1bdf6bc417acbbb75f423890046b84

add_action('wp_enqueue_scripts', 'Raythompwebdesign_Add_lightbox');
function Raythompwebdesign_Add_lightbox() 
{   
    /**
 * enqueue lightbox script
*/
    wp_enqueue_style('lightbox-style', get_template_directory_uri() . '/inc/lightbox/css/jquery.fancybox.css', false, '1.1', 'all');
    wp_enqueue_script('fancybox', get_template_directory_uri() . '/inc/lightbox/js/jquery.fancybox.pack.js', array( 'jquery' ), false, true);
    wp_enqueue_script('lightbox', get_template_directory_uri() . '/inc/lightbox/js/lightbox.js', array( 'fancybox' ), false, true);

<<<<<<< HEAD
	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'raythompwebdesign-com-ie', get_template_directory_uri() . '/ie-min.css', array(), '1.0' );
	wp_style_add_data( 'raythompwebdesign-com-ie', 'conditional', 'lte IE 9' );

    // Load the CustomEvent Script.
	wp_enqueue_script( 'raythompwebdesign-com-iejs', get_template_directory_uri() . '/js/old-browser-scripts/ie8.js', array(), '1.0' );
	wp_script_add_data( 'raythompwebdesign-com-iejs', 'conditional', 'lte IE 9' );

	// Load the html5.
	wp_enqueue_script( 'raythompwebdesign-com-html5', get_template_directory_uri() . '/js/old-browser-scripts/html5shiv.min.js', array(), '3.7.3' );
	wp_script_add_data( 'raythompwebdesign-com-html5', 'conditional', 'lte IE 9' );

	// Load the Selectivizr.
	wp_enqueue_script( 'raythompwebdesign-com-selectivizr', get_template_directory_uri() . '/js/old-browser-scripts/selectivizr-min.js', array('jquery'), '3.7.3');
	wp_script_add_data( 'raythompwebdesign-com-selectivizr', 'conditional', 'lte IE 9' );
=======
}


add_action('wp_enqueue_scripts', 'Website_Page_script');
function Website_Page_script() 
{
    /**
 * cookie 
*/
    if (is_page('websites') ) {
        wp_register_script('cookie', get_template_directory_uri() . '/js/jquery.cookie.js', array('jquery'), '20161110', true);
        wp_register_script('websites', get_template_directory_uri() . '/js/websites.js', array('jquery'), '20161110', true);

        wp_enqueue_script('cookie');
        wp_enqueue_script('websites');
    }

<<<<<<< HEAD
}

add_action('wp_enqueue_scripts', 'Profile_Page_scripts');
function Profile_Page_scripts() 
{
    /**
 * enqueue profile page scripts 
*/
    if (is_page('profile') ) {
        /*scrollto script*/
        wp_register_script('scrollto', get_template_directory_uri() . '/js/scrollto.js', array('jquery'), '20161110', true);
        /*easing script*/
        wp_register_script('easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array('jquery'), '20161110', true);
        /*profile page scripts*/
        wp_register_script('profile', get_template_directory_uri() . '/js/profile.js', array('jquery'), '20161110', true);
        /*fancylightbox page scripts*/
        wp_register_script('fancylightbox', get_template_directory_uri() . '/js/fancylightbox.js', array('jquery'), '20161110', true);

        wp_enqueue_script('easing');
        wp_enqueue_script('scrollto');
        wp_enqueue_script('profile');
        wp_enqueue_script('fancylightbox');
    }
>>>>>>> 06bb6834ff1bdf6bc417acbbb75f423890046b84

}

function IE8_scripts() 
{
    /**
 * Load the Internet Explorer specific stylesheet.
*/
    wp_enqueue_style('raythompwebdesign-com-ie', get_template_directory_uri() . '/ie.css', array(), '1.0');
    wp_style_add_data('raythompwebdesign-com-ie', 'conditional', 'lte IE 9');

    /**
 * Load the CustomEvent Script.
*/
    wp_enqueue_script('raythompwebdesign-com-iejs', get_template_directory_uri() . '/js/ie8.js', array(), '1.0');
    wp_script_add_data('raythompwebdesign-com-iejs', 'conditional', 'lte IE 9');

    /**
 * Load the html5.
*/
    wp_enqueue_script('raythompwebdesign-com-html5', get_template_directory_uri() . '/js/html5shiv.min.js', array(), '3.7.3');
    wp_script_add_data('raythompwebdesign-com-html5', 'conditional', 'lte IE 9');

    /**
 * Load the Selectivizr.
*/
    wp_enqueue_script('raythompwebdesign-com-selectivizr', get_template_directory_uri() . '/js/selectivizr-min.js', array('jquery'), '3.7.3');
    wp_script_add_data('raythompwebdesign-com-selectivizr', 'conditional', 'lte IE 9');

=======
}
add_action( 'wp_enqueue_scripts', 'ie_scripts' );

//svg uploads
function cc_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
>>>>>>> 0f8836b434da8d3e31955a7d44ed61c6333c4864
}
add_action('wp_enqueue_scripts', 'IE8_scripts');

// Register our sidebars and widgetized areas.

<<<<<<< HEAD
//Primary Sidebar!
=======
<<<<<<< HEAD
function CC_Mime_types( $mimes )
{   
    /**
 * SVG 
*/
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'CC_Mime_types');

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
if (function_exists('register_sidebar') ) {
    /**
* Register main widgte
*/
    register_sidebar(
        array (
        'name' => __('Primary Sidebar', 'raythompsonwebdev-com'),
        'id' => 'primary-widget-area',
        'description' => __('The primary widget area', 'raythompsonwebdev-com'),
        'before_widget' => '<div class="widget">',
        'after_widget' => "</div>",
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
        ) 
    );
    /*map area*/
    function map_widgets_init() 
    {   
        /**
 * map area for contact page
*/
=======
//Sidebar!
>>>>>>> 06bb6834ff1bdf6bc417acbbb75f423890046b84
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

//social media widget
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

//contact form widget
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


/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails
 *
 * @since Twenty Sixteen 1.0
 *
 * @param array $attr Attributes for the image markup.
 * @param int   $attachment Image attachment ID.
 * @param array $size Registered image size or flat array of height and width dimensions.
 * @return string A source size value for use in a post thumbnail 'sizes' attribute.
 */
function twentysixteen_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
	if ( 'post-thumbnail' === $size ) {
		$attr['sizes'] = '(max-width: 736px) 85vw, (max-width: 1024px) 67vw, (max-width: 1280px) 60vw, (max-width: 1920px) 62vw, 840px';
		!$attr['sizes'] = '(max-width: 736px) 85vw, (max-width: 1024px) 67vw, (max-width: 1920px) 88vw, 1440px';
	}
	return$attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'twentysixteen_post_thumbnail_sizes_attr', 10 , 3 );

//responsive images
function twentysixteen_content_image_sizes_attr( $sizes, $size ) {
>>>>>>> 0f8836b434da8d3e31955a7d44ed61c6333c4864

        register_sidebar(
            array(
            'name' => 'map',
            'id' => 'map',
            'before_widget' => '<div class="social_media_container">',
            'after_widget' => '</div>',
            'before_title' => '<h2>',
            'after_title' => '</h2>',
            ) 
        );
    }
    add_action('widgets_init', 'map_widgets_init');

<<<<<<< HEAD
    /*social media widget area*/
    function social_widgets_init() 
    {   
        /**
* Social Media Widget
*/
        register_sidebar(
            array(
            'name' => 'social',
            'id' => 'social',
            'before_widget' => '<div id="social">',
            'after_widget' => '</div>',
            'before_title' => '<h2>',
            'after_title' => '</h2>',
            ) 
        );
    }
    add_action('widgets_init', 'social_widgets_init');

    /*slider form area*/
    function contact_widgets_init() 
    {
        register_sidebar(
            array(
            'name' => 'contact',
            'id' => 'contact',
            'before_widget' => '<div id="contactform">',
            'after_widget' => '</div>',
            'before_title' => '<h2>',
            'after_title' => '</h2>',
            ) 
        );
=======
 736 <= $width && $sizes = '(max-width: 736px) 85vw, (max-width: 1024px) 67vw, (max-width: 1920px) 62vw, 980px';

 if ( 'page' === get_post_type() ) {
	 736 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
 } else {
	 736 > $width && 360 <= $width && $sizes = '(max-width: 736px) 85vw, (max-width: 1024px) 67vw, (max-width: 1280px) 61vw, (max-width: 1920px) 45vw, 667px';
	 360 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
 }
>>>>>>> 0f8836b434da8d3e31955a7d44ed61c6333c4864

    }
    add_action('widgets_init', 'contact_widgets_init');
    
}

if (! function_exists('popperscores_posted_on') ) :
    /**
     * Prints HTML with meta information for the current post-date/time and author.
     */
    function popperscores_posted_on() 
    {
            $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
        if (get_the_time('U') !== get_the_modified_time('U') ) {
                $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time> - Updated: <time class="updated" datetime="%3$s">%4$s</time>';
        }
            $time_string = sprintf(
                $time_string,
                esc_attr(get_the_date('c')),
                esc_html(get_the_date()),
                esc_attr(get_the_modified_date('c')),
                esc_html(get_the_modified_date())
            );
            $posted_on = sprintf(
                esc_html_x('published %s', 'post date', 'raythompsonwebdev-com'),
                '<a href="' . esc_url(get_permalink()) . '" rel="bookmark">' . $time_string . '</a>'
            );
            $byline = sprintf(
                esc_html_x('by %s', 'post author', 'raythompsonwebdev-com'),
                '<span class="author vcard"><a class="url fn n" href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">' . esc_html(get_the_author()) . '</a></span>'
            );
            /**
             * Display the author avatar if the author has a Gravatar
             */
            $author_id = get_the_author_meta('ID');
        if (popperscores_validate_gravatar($author_id) ) {
            echo '<div class="meta-content has-avatar">';
            echo '<div class="author-avatar">' . get_avatar($author_id) . '</div>';
        } else {
            echo '<div class="meta-content">';
        }

            echo '<span class="byline"> ' . $byline . '</span><span class="posted-on">' . $posted_on . '</span>'; /**
                                       *  WPCS: XSS OK.
                                       */

        if (! post_password_required() && ( comments_open() || get_comments_number() ) ) {
            echo '<span class="comments-link">';
            comments_popup_link(esc_html__('&#xf086; Leave a comment', 'raythompsonwebdev-com'), esc_html__('&#xf086;; 1 Comment', 'raythompsonwebdev-com'), esc_html__('&#xf086; % Comments', 'raythompsonwebdev-com'));
            echo '</span>';
            echo '<span class="bylinetag">';
            the_tags('Tagged with: ', ', ');
            echo '</span>';
        }
            echo '</div><!-- .meta-content -->';
    }
endif;

if (! function_exists('popper_index_posted_on') ) :
    /**
     * Prints HTML with meta information for post-date/time and author on index pages.
     */
    function popperscores_index_posted_on() 
    {

        $author_id_on = get_the_author_meta('ID');

        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
        if (get_the_time('U') !== get_the_modified_time('U') ) {
            $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time> - Updated: <time class="updated" datetime="%3$s">%4$s</time>';
        }

        $time_string = sprintf(
            $time_string,
            esc_attr(get_the_date('c')),
            esc_html(get_the_date()),
            esc_attr(get_the_modified_date('c')),
            esc_html(get_the_modified_date())
        );
        $posted_on = sprintf(
            esc_html_x('Published %s', 'post date', 'raythompsonwebdev-com'),
            '<a href="' . esc_url(get_permalink()) . '" rel="bookmark">' . $time_string . '</a>'
        );
        $byline = sprintf(
            esc_html_x('by %s', 'post author', 'raythompsonwebdev-com'),
            '<span class="author vcard"><a class="url fn n" href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">' . esc_html(get_the_author()) . '</a></span>'
        );
        /**
         * Display the author avatar if the author has a Gravatar
         */
        $author_id = get_the_author_meta('ID');
        if (popperscores_validate_gravatar($author_id) ) {
            echo '<div class="meta-content has-avatar">';
            echo '<div class="author-avatar">' . get_avatar($author_id) . '</div>';
        } else {
            echo '<div class="meta-content">';
        }
        echo '<span class="byline">' . $byline . ' </span>'
                . '<span class="posted-on">' . $posted_on . ' </span>'; 
        /**
         *  WPCS: XSS OK.
         */

        echo '</div><!-- .meta-content -->';

    }
endif;

function popperscores_validate_gravatar($id_or_email) 
{
    /*id or email code borrowed from wp-includes/pluggable.php*/
    $email = '';
    if (is_numeric($id_or_email) ) {
        $id = (int) $id_or_email;
        $user = get_userdata($id);
        if ($user ) {
            $email = $user->user_email;
        }
    } elseif (is_object($id_or_email) ) {
        /* No avatar for pingbacks or trackbacks*/
        $allowed_comment_types = apply_filters('get_avatar_comment_types', array( 'comment' ));
        if (! empty($id_or_email->comment_type) && ! in_array($id_or_email->comment_type, (array) $allowed_comment_types) ) {
            return false;
        }

        if (!empty($id_or_email->user_id) ) {
            $id = (int) $id_or_email->user_id;
            $user = get_userdata($id);
            if ($user) {
                $email = $user->user_email;
            }
        } elseif (!empty($id_or_email->comment_author_email) ) {
            $email = $id_or_email->comment_author_email;
        }
    } else {
        $email = $id_or_email;
    }

    $hashkey = md5(strtolower(trim($email)));
    $uri = 'http://www.gravatar.com/avatar/' . $hashkey . '?d=404';

<<<<<<< HEAD
    $data = wp_cache_get($hashkey);
    if (false === $data) {
        $response = wp_remote_head($uri);
        if(is_wp_error($response) ) {
            $data = 'not200';
        } else {
            $data = $response['response']['code'];
        }
        wp_cache_set($hashkey, $data, $group = '', $expire = 60*5);

    }
    if ($data == '200') {
        return true;
    } else {
        return false;
    }
=======
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
>>>>>>> 0f8836b434da8d3e31955a7d44ed61c6333c4864
}

if ( ! function_exists( 'popper_attachment_nav' ) ) :
/**
 * Display navigation to next/previous image in attachment pages.
 */
function popper_attachment_nav() {
	?>
	<nav class="navigation post-navigation" role="navigation">
		<div class="post-nav-box clear">
			<h1 class="screen-reader-text"><?php _e( 'Attachment post navigation', 'raythompsonwebdev-com' ); ?></h1>
			<div class="nav-links">
				<div class="nav-previous">
					<?php previous_image_link( false, '<span class="post-title">Previous image</span>' ); ?>
				</div>
				<div class="nav-next">
					<?php next_image_link( false, '<span class="post-title">Next image</span>' ); ?>
				</div>
			</div><!-- .nav-links -->


		</div>
	</nav>


	<?php
}
endif;

if ( ! function_exists( 'popper_the_attached_image' ) ) :
/**
 * Print the attached image with a link to the next attached image.
 * Appropriated from Twenty Fourteen 1.0
 */
function popper_the_attached_image() {
	$post = get_post();
	/**
	 * Filter the default attachment size.
	 */
	$attachment_size = apply_filters( 'popper_attachment_size', array( 810, 810 ) );
	$next_attachment_url = wp_get_attachment_url();
	/*
	 * Grab the IDs of all the image attachments in a gallery so we can get the URL
	 * of the next adjacent image in a gallery, or the first image (if we're
	 * looking at the last image in a gallery), or, in a gallery of one, just the
	 * link to that image file.
	 */
	$attachment_ids = get_posts( array(
		'post_parent'    => $post->post_parent,
		'fields'         => 'ids',
		'numberposts'    => -1,
		'post_status'    => 'inherit',
		'post_type'      => 'attachment',
		'post_mime_type' => 'image',
		'order'          => 'ASC',
		'orderby'        => 'menu_order ID',
	) );
	// If there is more than 1 attachment in a gallery...
	if ( count( $attachment_ids ) > 1 ) {
		foreach ( $attachment_ids as $attachment_id ) {
			if ( $attachment_id == $post->ID ) {
				$next_id = current( $attachment_ids );
				break;
			}
		}
		// get the URL of the next image attachment...
		if ( $next_id ) {
			$next_attachment_url = get_attachment_link( $next_id );
		}
		// or get the URL of the first image attachment.
		else {
			$next_attachment_url = get_attachment_link( array_shift( $attachment_ids ) );
		}
	}
	printf( '<a href="%1$s" rel="attachment">%2$s</a>',
		esc_url( $next_attachment_url ),
		wp_get_attachment_image( $post->ID, $attachment_size )
	);
}
endif;


/* Test if WordPress version and whether a logo has been defined */
function popper_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
		return get_custom_logo();
	} else {
		return false;
	}
}
/**
 * Customizer additions.

/require get_template_directory() . '/inc/customizer.php';
 */



?>
