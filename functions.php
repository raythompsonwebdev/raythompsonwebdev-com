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
}
add_filter('wp_title', 'Filter_Wp_title');

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
add_action('after_setup_theme', 'Raythompwebdesign_Custom_Header_setup');


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

        add_editor_style('css/custom-editor-style.css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

        add_theme_support('html5', array( 'comment-list', 'comment-form', 'gallery', 'caption' ));

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

endif;  /**
        * My_Theme_setup end 
        */

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

add_action('wp_enqueue_scripts', 'Raythompwebdesign_Add_lightbox');
function Raythompwebdesign_Add_lightbox() 
{   
    /**
 * enqueue lightbox script
*/
    wp_enqueue_style('lightbox-style', get_template_directory_uri() . '/inc/lightbox/css/jquery.fancybox.css', false, '1.1', 'all');
    wp_enqueue_script('fancybox', get_template_directory_uri() . '/inc/lightbox/js/jquery.fancybox.pack.js', array( 'jquery' ), false, true);
    wp_enqueue_script('lightbox', get_template_directory_uri() . '/inc/lightbox/js/lightbox.js', array( 'fancybox' ), false, true);

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

}
add_action('wp_enqueue_scripts', 'IE8_scripts');


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
}

?>
