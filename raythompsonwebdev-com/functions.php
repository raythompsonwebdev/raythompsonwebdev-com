<?php
/**
 * *PHP version 5
 * 
 * Functions | core/functions.php.
 *
 * @category   Functions
 * @package    Raythompsonwebdev-com
 * @subpackage Functions
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */



add_filter( 'widget_text', 'shortcode_unautop' );
add_filter( 'widget_text', array( $wp_embed, 'run_shortcode' ), 8 );
add_filter( 'widget_text', array( $wp_embed, 'autoembed'), 8 );
add_filter( 'widget_text', 'do_shortcode');


/*
 * theme set up
 */
if (! function_exists('my_theme_setup') ) :
    function my_theme_setup()
    {

        /* Test if WordPress version and whether a logo has been defined 
        function raythompsonwebdev_com_custom_logo() 
        {
            if (function_exists('the_custom_logo') && has_custom_logo() ) {
                    return get_custom_logo();
            } else {
                    return false;
            }
        }*/

        function wpb_add_google_fonts() 
        {
            wp_enqueue_style('wpb-google-fonts', 'https://fonts.googleapis.com/css?family=PT+Sans:400,700', false);
            wp_enqueue_style('wpc-google-fonts', 'https://fonts.googleapis.com/css?family=Cabin:400,700', false);
        }
        add_action('wp_enqueue_scripts', 'wpb_add_google_fonts');
        
        /*
         * Localization support
         */
        load_theme_textdomain('raythompsonwebdev-com', get_template_directory() . '/languages');

        add_editor_style('css/custom-editor-style.css');

        add_theme_support(
            'html5', array( 
            'search-form',
            'comment-list', 
            'comment-form', 
            'gallery', 
            'caption' 
            )
        );
        
        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');
        
        /*
        * Let WordPress manage the document title.
        * By adding theme support, we declare that this theme does not use a
        * hard-coded <title> tag in the document head, and expect WordPress to
        * provide it for us.
        */
        add_theme_support('title-tag');
        
        add_theme_support('post-formats', array('aside', 'gallery', 'link'));
        /*
        * Enable support for Post Thumbnails on posts and pages.
        *
        * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
        */
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(100, 100, true);

        /**
         * Create new image sizes
         */
        add_image_size('featured-image', 783, 9999);
        add_image_size('websites', 450, 9999);
        add_image_size('small', 200, 9999);
        add_theme_support('title-tag');
        
        /*
        *
        * Set up the WordPress core custom background feature.
        *
        */
        
        $defaults = array(
            'default-color'          => 'CCD3DE',
            'wp-head-callback'       => '_custom_background_cb',
            'admin-head-callback'    => '',
            'admin-preview-callback' => ''
        );
        add_theme_support( 'custom-background', $defaults );

        /*
        * Link pages script
        *
        */
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

        add_theme_support( 'custom-logo', array(
            'width' => 96,
            'height' => 96,
            'flex-width' => false,
            'flex-height' => false,
        ) );

        /*
         * custom header
         */
        $args = array(
            'width'         => 325,
            'height'        => 65
        );
        add_theme_support( 'custom-header', $args );

        /*
         * register menus
         */
        register_nav_menus(
            array(
            'main' => esc_html__('Main nav', 'raythompsonwebdev-com'),
            'Secondary' => esc_html__('Secondary', 'raythompsonwebdev-com'),
            'mobile' => esc_html__('mobile', 'raythompsonwebdev-com') )
        );

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
        
        
        /*
         * Add theme support for selective refresh for widgets.
         */
        
        add_theme_support('customize-selective-refresh-widgets');
    }
endif; 
add_action('after_setup_theme', 'my_theme_setup');


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 * 
 */

function raythompsonwebdev_com_content_width() 
{
    $GLOBALS['content_width'] = apply_filters('raythompsonwebdev_com_content_width', 640);
}
add_action('after_setup_theme', 'raythompsonwebdev_com_content_width', 0);

/*
 * remove comment cookies
 */
remove_action('set_comment_cookies', 'wp_set_comment_cookies');

/*
 * remove stuff
 */
function cubiq_setup() 
{
    remove_action('wp_head', 'wp_generator');                // #1
    remove_action('wp_head', 'wlwmanifest_link');            // #2
    remove_action('wp_head', 'rsd_link');                    // #3
    remove_action('wp_head', 'wp_shortlink_wp_head');        // #4
    add_filter('the_generator', '__return_false');            // #6
    // remove version from rss
    add_filter('the_generator', '__return_empty_string');
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('wp_head', 'feed_links_extra', 3);

}
add_action('after_setup_theme', 'cubiq_setup');

/*
 * remove wordpress
 */
function remove_change_myheaders($headers) 
{
    unset($headers['X-Pingback']);
    $headers['X-Powered-By'] = 'PHP/5';
    return $headers;
}
add_filter('wp_headers', 'remove_change_myheaders');

/*
 *  remove version from scripts and styles
 */
function shapeSpace_remove_version_scripts_styles($src) 
{
    if (strpos($src, 'ver=')) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}
add_filter('style_loader_src', 'shapeSpace_remove_version_scripts_styles', 9999);
add_filter('script_loader_src', 'shapeSpace_remove_version_scripts_styles', 9999);

function remove_version_parameter( $src )
{
    // Check if version parameter exist
    $parts = explode('?ver', $src);
    // return without version parameter
    return $parts[0];
}
// filter .js files
add_filter('script_loader_src', 'remove_version_parameter', 15, 1);
// filter .css files
add_filter('style_loader_src', 'remove_version_parameter', 15, 1);


/*
 * Defer parsing of JS
 */
function defer_parsing_of_js( $url ) 
{
    if (false === strpos($url, '.js') ) { return $url;
    }
    if (strpos($url, 'jquery.js') ) { return $url;
    }
    return "$url' defer ";
}
add_filter('clean_url', 'defer_parsing_of_js', 11, 1);

/*
 * enqueue style sheets
 */
function mytheme_register_styles()
{
    wp_enqueue_style('raythompsonwebdev-com-style', get_stylesheet_uri());

    /*
     *  Add Font Awesome icons (http://fontawesome.io)
     */
    wp_enqueue_style('raythompsonwebdev-fontawesome', get_stylesheet_directory_uri() . '/fonts/fontawesome/css/font-awesome.min.css');

    // Load the Internet Explorer specific stylesheet.
    wp_enqueue_style('raythompwebdesign-com-ie', get_template_directory_uri() . '/ie.css', array(), '1.0');
    wp_style_add_data('raythompwebdesign-com-ie', 'conditional', 'lte IE 8');
       
   
}
add_action('wp_enqueue_scripts', 'mytheme_register_styles');


/**
 * enqueue other scripts
 */
function my_scripts_own() 
{
    
    //master
    wp_enqueue_script('master', get_template_directory_uri() . '/js/dist/master.min.js', array('jquery'), '1.0', true);

    wp_enqueue_script('raythompsonwebdev-com-navigation', get_template_directory_uri() . '/js/dist/navigation.min.js', array(), '20151215', true);

    wp_enqueue_script('raythompsonwebdev-com-skip-link-focus-fix', get_template_directory_uri() . '/js/dist/skip-link-focus-fix.min.js', array(), '20151215', true);

    if (is_singular() && comments_open() && get_option('thread_comments') ) {
        wp_enqueue_script('comment-reply');
    }

     // Load the html5.
     wp_enqueue_script('raythompsonwebdev-com-html5', get_template_directory_uri() . '/js/old-browser-scripts/html5shiv.min.js', array(), '3.7.3');
     wp_script_add_data('raythompsonwebdev-com-html5', 'conditional', 'lte IE 8');
 
    // Load the Selectivizr.
    // wp_enqueue_script('raythompsonwebdev-com-selectivizr', get_template_directory_uri() . '/js/old-browser-scripts/selectivizr-min.js', array('jquery'), '3.7.3');
    // wp_script_add_data('raythompsonwebdev-com-selectivizr', 'conditional', 'lte IE 8');

}
add_action('wp_enqueue_scripts', 'my_scripts_own');

/**
 * Remove Contact Form 7 scripts + styles unless we're on the contact page
 * 
 * add_action('wp_enqueue_scripts', 'ac_remove_cf7_scripts');
 *function ac_remove_cf7_scripts() 
 *{
 *    if (!is_page('contact') ) {
 *        wp_deregister_style('contact-form-7');
 *        wp_deregister_script('contact-form-7');
 *    }
 *}
 */


/*
 * enqueue lightbox script
 */
add_action('wp_enqueue_scripts', 'raythompwebdesign_add_lightbox');
function raythompwebdesign_add_lightbox() 
{

    wp_enqueue_style('lightbox-style', get_template_directory_uri() . '/js/dist/inc/lightbox/css/jquery.fancybox.min.css', false, '1.1', 'all');
    wp_enqueue_script('fancybox', get_template_directory_uri() . '/js/inc/lightbox/js/jquery.fancybox.pack.js', array( 'jquery' ), false, true);
    wp_enqueue_script('lightbox', get_template_directory_uri() . '/js/inc/lightbox/js/lightbox.js', array( 'fancybox' ), false, true);

}

/*
 * enqueue gallery page scripts
 */
add_action('wp_enqueue_scripts', 'website_page_script');
function website_page_script() 
{

    if ("gallery" == get_post_type()) {
        wp_register_script('cookie', get_template_directory_uri() . '/js/dist/jquery.cookie.min.js', array('jquery'), '20161110', true);
        wp_register_script('website', get_template_directory_uri() . '/js/dist/websites.min.js', array('jquery'), '20161110', true);

        wp_enqueue_script('cookie');
        wp_enqueue_script('website');
    }
}

/*
 * enqueue profile page scripts
 */
add_action('wp_enqueue_scripts', 'profile_page_scripts');
function profile_page_scripts() 
{

    if (is_page('about') ) {
        //scrollto script
        wp_register_script('scrollto', get_template_directory_uri() . '/js/scrollto.js', array('jquery'), '20161110', true);
        //easing script
        wp_register_script('easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array('jquery'), '20161110', true);
        //profile page scripts
        wp_register_script('profile', get_template_directory_uri() . '/js/dist/profile.min.js', array('jquery'), '20161110', true);

        
        wp_enqueue_script('scrollto');
        wp_enqueue_script('easing');
        wp_enqueue_script('profile');
    }


}

/**
 * Contact page map function
 *
 * @return void
 */
function mapcontainer()  { ?>

    <script>
         function initMap() {
            var uluru = {lat: 51.55583507664607, lng: -0.06814956665039062};
            var map = new google.maps.Map(document.getElementById('map_container'), {
              zoom: 12,
              center: uluru
            });
            var marker = new google.maps.Marker({
              position: uluru,
              map: map
            });
          } 
          
        </script>
           
      <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpYuJIKNz2V8dAW5jZXFNSl8sftAxLO8s&callback=initMap">
        </script>

        <?php } 
add_action('wp_footer', 'mapcontainer');

/**
 * Google analytics function
 *
 * @return void
 */
function google_script()
{
    ?>

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
add_action('wp_footer', 'google_script');


/*
 * SVG function
 * 
 * @return void
 * 
 */
function cc_mime_types( $mimes )
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

/**
 * Register our sidebars and widgetized areas.
 */

/**
 * Sidebar!
 */
function raythompsonwebdev_com_widgets_init() 
{
    register_sidebar(
        array(
        'name'          => esc_html__('Primary Sidebar', 'raythompsonwebdev-com'),
        'id'            => 'primary-widget-area',
        'description'   => esc_html__('The primary widget area', 'raythompsonwebdev-com'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
        ) 
    );
}
add_action('widgets_init', 'raythompsonwebdev_com_widgets_init');

/**
 * Social media widget area
 */
function videoh_widgets_init() 
{
    register_sidebar(
        array(
        'name' => esc_html__('videoh-widget-area', 'raythompsonwebdev-com'),
        'id' => 'videoh-widget-area',
        'description'   => esc_html__('The video widget area', 'raythompsonwebdev-com'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
        ) 
    );
}
add_action('widgets_init', 'videoh_widgets_init');

/**
 * Contact form area
 */
function media_widgets_init() 
{
    register_sidebar(
        array(
        'name' => esc_html__('media-widget-area', 'raythompsonwebdev-com'),
        'id' => 'media-widget-area',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
        ) 
    );
}
add_action('widgets_init', 'media_widgets_init');

/**
 * archives area
 */
function archives_widgets_init() 
{
    register_sidebar(
        array(
        'name' => esc_html__('archives-widget-area', 'raythompsonwebdev-com'),
        'id' => 'archives-widget-area',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
        ) 
    );
}
add_action('widgets_init', 'archives_widgets_init');

/**
 * archives area
 */
function categoree_widgets_init() 
{
    register_sidebar(
        array(
        'name' => esc_html__('categoree-widget-area', 'raythompsonwebdev-com'),
        'id' => 'categoree-widget-area',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
        ) 
    );
}
add_action('widgets_init', 'categoree_widgets_init');

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails
 *
 * @since Twenty Sixteen 1.0
 *
 * @param  array $attr       Attributes for the image markup.
 * @param  int   $attachment Image attachment ID.
 * @param  array $size       Registered image size or flat array of height and width dimensions.
 * @return string A source size value for use in a post thumbnail 'sizes' attribute.
 */
function twentysixteen_post_thumbnail_sizes_attr( $attr, $attachment, $size ) 
{
    if ('post-thumbnail' === $size ) {
        $attr['sizes'] = '(max-width: 736px) 85vw, (max-width: 1024px) 67vw, (max-width: 1280px) 60vw, (max-width: 1920px) 62vw, 840px';
        !$attr['sizes'] = '(max-width: 736px) 85vw, (max-width: 1024px) 67vw, (max-width: 1920px) 88vw, 1440px';
    }
    return$attr;
}
add_filter('wp_get_attachment_image_attributes', 'twentysixteen_post_thumbnail_sizes_attr', 10, 3);


/**
 * Responsive images.
 * 
 */
function twentysixteen_content_image_sizes_attr( $sizes, $size ) 
{

    $width = $size[0];

    736 <= $width && $sizes = '(max-width: 736px) 85vw, (max-width: 1024px) 67vw, (max-width: 1920px) 62vw, 980px';

    if ('page' === get_post_type() ) {
        736 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
    } else {
        736 > $width && 360 <= $width && $sizes = '(max-width: 736px) 85vw, (max-width: 1024px) 67vw, (max-width: 1280px) 61vw, (max-width: 1920px) 45vw, 667px';
        360 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
    }

    return $sizes;
}
add_filter('wp_calculate_image_sizes', 'twentysixteen_content_image_sizes_attr', 10, 2);

/**
 * Attachment page script.
 * 
 */
if (! function_exists('raythompsonwebdev_com_attachment_nav') ) :
    /**
     * Display navigation to next/previous image in attachment pages.
     */
    function raythompsonwebdev_com_attachment_nav() 
    {
        ?>
     <nav class="navigation post-navigation" role="navigation">
      <div class="post-nav-box clear">
       <h2 class="screen-reader-text"><?php _e('Attachment post navigation', 'raythompsonwebdev-com'); ?></h2>
       <div class="nav-links">
                <div class="nav-previous">
        <?php previous_image_link(false, '<span class="post-title">Previous image</span>'); ?>
                </div>
                <div class="nav-next">
        <?php next_image_link(false, '<span class="post-title">Next image</span>'); ?>
                </div>
       </div><!-- .nav-links -->


      </div>
     </nav>


        <?php
    }
endif;

if (! function_exists('raythompsonwebdev_com_attached_image') ) :
    /**
     * Print the attached image with a link to the next attached image.
     * Appropriated from Twenty Fourteen 1.0
     */
    function raythompsonwebdev_com_attached_image() 
    {
        $post = get_post();
        /**
     * Filter the default attachment size.
     */
        $attachment_size = apply_filters('popper_attachment_size', array( 810, 810 ));
        $next_attachment_url = wp_get_attachment_url();
        /*
        * Grab the IDs of all the image attachments in a gallery so we can get the URL
        * of the next adjacent image in a gallery, or the first image (if we're
        * looking at the last image in a gallery), or, in a gallery of one, just the
        * link to that image file.
        */
        $attachment_ids = get_posts(
            array(
            'post_parent'    => $post->post_parent,
            'fields'         => 'ids',
            'numberposts'    => -1,
            'post_status'    => 'inherit',
            'post_type'      => 'attachment',
            'post_mime_type' => 'image',
            'order'          => 'ASC',
            'orderby'        => 'menu_order ID',
            ) 
        );
        // If there is more than 1 attachment in a gallery...
        if (count($attachment_ids) > 1 ) {
            foreach ( $attachment_ids as $attachment_id ) {
                if ($attachment_id == $post->ID ) {
                    $next_id = current($attachment_ids);
                    break;
                }
            }
            // get the URL of the next image attachment...
            if ($next_id ) {
                $next_attachment_url = get_attachment_link($next_id);
            }
            // or get the URL of the first image attachment.
            else {
                $next_attachment_url = get_attachment_link(array_shift($attachment_ids));
            }
        }
        printf(
            '<a href="%1$s" rel="attachment">%2$s</a>',
            esc_url($next_attachment_url),
            wp_get_attachment_image($post->ID, $attachment_size)
        );
    }
endif;

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION') ) {
    include get_template_directory() . '/inc/jetpack.php';
}