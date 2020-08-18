<?php
/**
 * *PHP version 7.2
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
 * @link       https:www.raythompsonwebdev.co.uk custom template
 */

require_once get_stylesheet_directory() . '/raythompsonwebdev-customv2/raythompsonwebdev-customv2.php';


add_filter( 'login_errors', 'cwpl_error_message');
/**
 * Returns a custom login error message.
 */
function cwpl_error_message() {
	return 'Well, that was not it!';
}

/**
 * Creates a nicely formatted and more specific title element text
 * for output in head of document, based on current view.
 *
 * @param string $title Default title text for current view.
 * @param string $sep   Optional separator.
 * @return string Filtered title.
 */
function raythompsonwebdev_com_filter_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() ) {
		return $title;
	}

	// Add the site name.
	$title .= esc_html( get_bloginfo( 'name' ) );

	// Add the site description for the home/front page.
	$site_description = esc_html( get_bloginfo( 'description', 'display' ) );

	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	}

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 ) {
		/* translators: %s: search term */
		$title = "$title $sep " . sprintf( esc_attr_e( 'Page %s', 'raythompsonwebdev-com' ), max( $paged, $page ) );
	}

	return $title;
}
add_filter( 'wp_title', 'raythompsonwebdev_com_filter_wp_title', 10, 2 );

/**
*  Load text domain
*/
load_theme_textdomain( 'raythompsonwebdev-com', get_template_directory() . '/languages' );

$locale      = get_locale();
$locale_file = get_template_directory() . "/languages/$locale.php";
if ( is_readable( $locale_file ) ) {
	require_once $locale_file;
}


if ( ! function_exists( 'raythompsonwebdev_com_theme_setup' ) ) :

	/**
	 *  Description theme set up.
	 *
	 *  @since 4.0.0
         *
	 */
	function raythompsonwebdev_com_theme_setup() {

		register_meta(
			'post',
			'project_name',
			[
				'object_subtype' => 'project',
				'show_in_rest'   => true,
			]
		);

		register_meta(
			'post',
			'project_description',
			[
				'object_subtype' => 'project',
				'show_in_rest'   => true,
			]
		);

		register_meta(
			'post',
			'project_code',
			[
				'object_subtype' => 'project',
				'show_in_rest'   => true,
			]
		);

		register_meta(
			'post',
			'project_url',
			[
				'object_subtype' => 'project',
				'show_in_rest'   => true,
			]
		);

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		/**
		*  Add editor styles to posts and pages
		*/
		add_editor_style( 'css/custom-editor-style.css' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		// add theme support html5.
		add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'gallery', 'caption', 'search-form' ) );

		// add theme support post-formats.
		add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link' ) );

		/**
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/

		add_theme_support( 'post-thumbnails' );

		// Create new image sizes.
		add_image_size( 'featured-image', 1200, 630 );

		add_image_size( 'website-image', 400, 650 );

		// Link pages.
		$defaults = array(
			'before'           => '<p>' . __( 'Pages:', 'raythompsonwebdev-com' ),
			'after'            => '</p>',
			'link_before'      => '',
			'link_after'       => '',
			'next_or_number'   => 'number',
			'separator'        => ' ',
			'nextpagelink'     => __( 'Next page', 'raythompsonwebdev-com' ),
			'previouspagelink' => __( 'Previous page', 'raythompsonwebdev-com' ),
			'pagelink'         => '%',
			'echo'             => 1,
		);
		wp_link_pages( $defaults );

		// nav- menus.
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

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		*  Register menus.
		*/
		register_nav_menus(
			array(
				'main'      => esc_html__( 'Main nav', 'raythompsonwebdev-com' ),
				'Secondary' => esc_html__( 'Secondary', 'raythompsonwebdev-com' ),
				'mobile'    => esc_html__( 'mobile', 'raythompsonwebdev-com' ),
			)
		);

		/**
		*  Remove stuff.
		*/
		add_filter( 'the_generator', '__return_false' );
		// remove version from rss.
		add_filter( 'the_generator', '__return_empty_string' );
	}

endif;
add_action( 'after_setup_theme', 'raythompsonwebdev_com_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function clashvibes_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'clashvibes_content_width', 640 );
}
add_action( 'after_setup_theme', 'clashvibes_content_width', 0 );


/**
 * Remove Query Strings – Optional Step.
 *
 * @param array $src parameter.
 */
function raythompsonwebdev_com_remove_script_version( $src ) {
	$parts = explode( '?ver', $src );
	return $parts[0];
}
add_filter( 'script_loader_src', 'raythompsonwebdev_com_remove_script_version', 15, 1 );


/**
 * Disable the emoji's
 *
 */
function raythompsonwebdev_com_disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );

}
add_action( 'init', 'raythompsonwebdev_com_disable_emojis' );

/**
 * Filter function used to remove the tinymce emoji plugin.
 *
 * @param    array $plugins plugins array.
 * @return   array Difference betwen the two arrays.
 */
function raythompsonwebdev_com_disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}
add_filter( 'tiny_mce_plugins', 'raythompsonwebdev_com_disable_emojis_tinymce' );

/**
 * Remove WP embed script.
 */
function speed_stop_loading_wp_embed() {
	if ( ! is_admin() ) {
		wp_deregister_script( 'wp-embed' );
	}
}
add_action( 'init', 'speed_stop_loading_wp_embed' );

/**
 * Remove comment-reply.min.js from footer.
 *  */
function comments_clean_header_hook() {
	wp_deregister_script( 'comment-reply' );
}
add_action( 'init', 'comments_clean_header_hook' );

/**
 *  Remove comment cookies.
 */
remove_action( 'set_comment_cookies', 'wp_set_comment_cookies' );

/**
 *  Remove WordPress.
 *
 *  @param array $headers remove WordPress headers.
 */
function raythompsonwebdev_remove_change_myheaders( $headers ) {
	unset( $headers['X-Pingback'] );
	$headers['X-Powered-By'] = 'PHP/7';
	return $headers;
}
add_filter( 'wp_headers', 'raythompsonwebdev_remove_change_myheaders' );

if ( ! is_admin() ) {
	add_action( 'wp_enqueue_scripts', 'my_jquery_enqueue', 11 );
}
/**
 * Undocumented function
 *
 * @return void
 */
function my_jquery_enqueue() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), 1.0, true );
	wp_enqueue_script( 'jquery' );
}

/**
 * Enqueue style sheets.
 */
function raythompsonwebdev_com_register_styles() {

	wp_enqueue_style( 'raythompsonwebdev-com-normalise', get_template_directory_uri() . '/css/normalize.css', array(), '1.0', false );
	wp_enqueue_style( 'raythompsonwebdev-com-style', get_stylesheet_uri(), array(), '1.0', false );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/fonts/fontawesome/css/all.css', array(), '1.0', false );

}
add_action( 'wp_enqueue_scripts', 'raythompsonwebdev_com_register_styles' );

/**
 * Load the html5.
 *  */
add_action(
	'wp_enqueue_scripts',
	function () {
		$conditional_scripts = [

			'html5shiv'   => '/js/old-browser-scripts/html5shiv.min.js',
			'respond'     => '/js/old-browser-scripts/Respond-master/dest/respond.src.js',
			'selectivizr' => '/js/old-browser-scripts/selectivizr-min.js',

		];
		foreach ( $conditional_scripts as $handle => $src ) {
			wp_enqueue_script( $handle, get_template_directory_uri(), array(), '1.0', false );
		}
		add_filter(
			'script_loader_tag',
			function( $tag, $handle ) use ( $conditional_scripts ) {

				if ( array_key_exists( $handle, $conditional_scripts ) ) {
					$tag = '<!--[if (lt IE 8) & (!IEMobile)]>' . $tag . '<![endif]-->' . "\n";
				}
				return $tag;
			},
			10,
			2
		);
	},
	11
);

/**
 * Enqueue IE8 style sheets.
 */
function ie_style_sheets() {
	// Load the Internet Explorer specific stylesheet.
	wp_register_style( 'ie8', get_stylesheet_directory_uri() . '/ie.css', array(), '1.0' );
	$GLOBALS['wp_styles']->add_data( 'ie8', 'conditional', 'lte IE 8' );

	wp_enqueue_style( 'ie8' );

}
add_action( 'wp_enqueue_scripts', 'ie_style_sheets' );


add_action( 'wp_enqueue_scripts', 'raythompsonwebdev_com_scripts_own' );
/**
 * Master Scripts
 *
 * @return void
 */
function raythompsonwebdev_com_scripts_own() {

	// master.
	wp_enqueue_script( 'raythompsonwebdev-com-master', get_template_directory_uri() . '/js/master.js', array(), '1.0', true );

	wp_enqueue_script( 'navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}



add_action( 'wp_enqueue_scripts', 'raythompsonwebdev_com_add_lightbox' );
/**
 *  Enqueue lightbox script.
 *
 *  Raythompsonwebdev lightbox code.
 */
function raythompsonwebdev_com_add_lightbox() {
	if ( 'project' === get_post_type() || is_page( 'about' ) ) {
		wp_enqueue_style( 'lightbox-style', get_template_directory_uri() . '/js/inc/lightbox/css/jquery.fancybox.css', false, '1.0', 'all' );
		wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/inc/lightbox/js/jquery.fancybox.js', array( 'jquery' ), '1.0', true );
		wp_enqueue_script( 'lightbox-script', get_template_directory_uri() . '/js/inc/lightbox/js/lightbox.js', array( 'jquery' ), '1.0', true );
	}
}



add_action( 'wp_enqueue_scripts', 'raythompsonwebdev_com_about_page_scripts' );
/**
 * Enqueue profile page scripts.
 */
function raythompsonwebdev_com_about_page_scripts() {

	if ( is_page( 'about' ) ) {
		// scrollto script.
		wp_enqueue_script( 'raythompsonwebdev-scrollto', get_template_directory_uri() . '/js/scrollto.js', array( 'jquery' ), '20161110', true );
		// easing script.
		wp_enqueue_script( 'raythompsonwebdev-easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array( 'jquery' ), '20161110', true );
		// profile page scripts.
		wp_enqueue_script( 'raythompsonwebdev-profile', get_template_directory_uri() . '/js/profile.js', array( 'jquery' ), '20161110', true );

	}
}

if ( ! function_exists( 'raythompsonwebdev_com_google_script' ) ) :

	/**
	 * Google analytics function.
	 *
	 * @return void
	 */
	function raythompsonwebdev_com_google_script() {

		?>
		<script>

			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-86655310-1');

		</script>

		<?php
	}
	add_action( 'wp_head', 'raythompsonwebdev_com_google_script' );
endif;


/**
 *  Sidebar!
 */
function raythompsonwebdev_com_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Primary Sidebar', 'raythompsonwebdev-com' ),
			'id'            => 'primary-widget-area',
			'description'   => esc_html__( 'The primary widget area', 'raythompsonwebdev-com' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'raythompsonwebdev_com_widgets_init' );

/**
 *  Social media widget area.
 */
function raythompsonwebdev_com_video_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'video-widget-area', 'raythompsonwebdev-com' ),
			'id'            => 'videoh-widget-area',
			'description'   => esc_html__( 'The video widget area', 'raythompsonwebdev-com' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'raythompsonwebdev_com_video_widgets_init' );

/**
 *  Contact form area.
 */
function raythompsonwebdev_com_media_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'media-widget-area', 'raythompsonwebdev-com' ),
			'id'            => 'media-widget-area',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'raythompsonwebdev_com_media_widgets_init' );

/**
 *  Archives area.
 */
function raythompsonwebdev_com_archives_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'archives-widget-area', 'raythompsonwebdev-com' ),
			'id'            => 'archives-widget-area',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'raythompsonwebdev_com_archives_widgets_init' );

/**
 *  Categories area.
 */
function raythompsonwebdev_com_categoree_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Category-widget-area', 'raythompsonwebdev-com' ),
			'id'            => 'categoree-widget-area',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'raythompsonwebdev_com_categoree_widgets_init' );



/**
 * Summary Custom template tags for this theme.
 */
 require get_template_directory() . '/inc/custom-header.php';

/**
 * Summary Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Summary Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Summary Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Summary Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	include get_template_directory() . '/inc/jetpack.php';
}
