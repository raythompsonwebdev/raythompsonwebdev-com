<?php
/**
 * Functions | core/functions.php
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


/**
 * Returns a custom login error message.
 */
function cwpl_error_message() {
	return 'Well, that was not it!';
}
add_filter( 'login_errors', 'cwpl_error_message' );

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


if ( ! function_exists( 'raythompsonwebdev_com_theme_setup' ) ) :

	/**
	 *  Description theme set up.
	 *
	 *  @since 4.0.0
	 */
	function raythompsonwebdev_com_theme_setup() {

		// load text domain
		load_theme_textdomain( 'raythompsonwebdev-com', get_template_directory() . '/languages' );

		// content width
		$GLOBALS['content_width'] = apply_filters( 'clashvibes_content_width', 640 );

		// register meta data for graph ql
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
		 * Add editor styles
		 */
		add_editor_style( array( 'inc/editor-style.css', 'css/custom-editor-style.css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' ) );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		// add theme support html5.
		add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'gallery', 'caption', 'search-form' ) );

		// add theme support post-formats.
		add_theme_support(
			'post-formats',
			array(
				'aside',
				'image',
				'video',
				'quote',
				'link',
				'gallery',
				'status',
				'audio',
			)
		);

		/**
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/

		add_theme_support( 'post-thumbnails' );

		// Create new image sizes.
		add_image_size( 'featured-image', 1200, 630 );
		add_image_size( 'website-image', 400, 650 );
		add_image_size( 'search-image', 600, 250, true );
		add_image_size( 'projectpage-image', 230, 480 );

		// nav- menus.
		$nav_defaults = array(
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
		add_theme_support( 'nav-menus', $nav_defaults );

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

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'raythompsonwebdev_com_custom_background_args',
				array(
					'default-color' => 'F2f2f2',
					'default-image' => '',
				)
			)
    );

    // 2 removes the “wlwmanifest” link. wlwmanifest.xml is the resource file needed to enable support for Windows Live Writer. Nobody on Earth needs that. Note that this command simply removes the link, if you want to completely disable the functionality you need to deny access to the file /wp-includes/wlwmanifest.xml probably from your .htaccess (but that’s not strictly needed).
		remove_action( 'wp_head', 'wlwmanifest_link' );

		// 3 The RSD is an API to edit your blog from external services and clients. If you edit your blog exclusively from the WP admin console, you don’t need this.
		remove_action( 'wp_head', 'rsd_link' );

		// 4 “wp_shortlink_wp_head” adds a “shortlink” into your document head that will look like http://example.com/?p=ID. No need, thanks.
		remove_action( 'wp_head', 'wp_shortlink_wp_head' );

		// 5 Removes a link to the next and previous post from the document header. This could be theoretically beneficial, but to my experience it introduces more problems than it solves. Please note that this has nothing to deal with the “next/previous” post that you may want to add at the end of each post.
		remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10 );

		// remove version from rss.
		// add_filter( 'the_generator', '__return_empty_string' );.

		// 6 Removes the generator name from the RSS feeds.
		add_filter( 'the_generator', '__return_false' );

		// 7 Removes the administrator’s bar and also the associated CSS styles. Especially during the development phase I find it very annoying.
		// add_filter('show_admin_bar','__return_false');

		// 8 Removes WP 4.2 emoji styles and JS. Nasty stuff.
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );

		// Allowed tags
		// How many times your users used the del or abbr tag? Yeah, exactly, zero. Let’s remove some of the allowed tags in comments.
		// We can just add to the setup function the following.
		global $allowedtags;
		unset( $allowedtags['cite'] );
		unset( $allowedtags['q'] );
		unset( $allowedtags['del'] );
		unset( $allowedtags['abbr'] );
		unset( $allowedtags['acronym'] );

	}

endif;
add_action( 'after_setup_theme', 'raythompsonwebdev_com_theme_setup' );


/**
 * Disable the emoji's
 */
function raythompsonwebdev_com_disable_emojis() {
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
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
 *  Remove comment cookies.
 */
remove_action( 'set_comment_cookies', 'wp_set_comment_cookies' );

/**
 *  Remove version from scripts and styles.
 *
 *  @param array $src array of.
 *  @var array $src array of.
 */
function shape_space_remove_version_scripts_styles( $src ) {
	if ( strpos( $src, 'ver=' ) ) {
		$src = remove_query_arg( 'ver', $src );
	}
	return $src;
}
add_filter( 'style_loader_src', 'shape_space_remove_version_scripts_styles', 9999 );
add_filter( 'script_loader_src', 'shape_space_remove_version_scripts_styles', 9999 );

/**
 * Enqueue Jquery.
 *
 * @return void
 */
function my_jquery_enqueue() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.5.1.min.js', array(), 1.0, true );
	wp_enqueue_script( 'jquery' );
}
if ( ! is_admin() ) {
	add_action( 'wp_enqueue_scripts', 'my_jquery_enqueue', 11 );
}

/**
 * Enqueue style sheets.
 */
function raythompsonwebdev_com_register_styles() {

	wp_enqueue_style( 'raythompsonwebdev-com-normalise', get_template_directory_uri() . '/css/normalize.css', array(), '1.0', false );
	wp_enqueue_style( 'raythompsonwebdev-com-style', get_stylesheet_uri(), array(), '1.0', false );

}
add_action( 'wp_enqueue_scripts', 'raythompsonwebdev_com_register_styles' );

/**
 * Load the ie8 scripts.
 *
 * @return void
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



/**
 * Master Scripts
 *
 * @return void
 */
function raythompsonwebdev_com_scripts_own() {

	// master.
	wp_enqueue_script( 'raythompsonwebdev-com-master', get_template_directory_uri() . '/js/master.js', array(), '1.0', true );

	wp_enqueue_script( 'navigation', get_template_directory_uri() . '/js/navigation.js', array(), '1.0', true );

	wp_enqueue_script( 'skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '1.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'raythompsonwebdev_com_scripts_own' );


/**
 *  Enqueue lightbox script.
 *
 *  @return void
 */
function raythompsonwebdev_com_add_lightbox() {
	if ( 'project' === get_post_type() || is_page( 'about-page' ) ) {
		wp_enqueue_style( 'lightbox-style', get_template_directory_uri() . '/js/inc/lightbox/css/jquery.fancybox.css', false, '1.0', 'all' );
		wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/inc/lightbox/js/jquery.fancybox.js', array( 'jquery' ), '1.0', true );
		wp_enqueue_script( 'lightbox-script', get_template_directory_uri() . '/js/inc/lightbox/js/lightbox.js', array( 'jquery' ), '1.0', true );
	}
}
add_action( 'wp_enqueue_scripts', 'raythompsonwebdev_com_add_lightbox' );

/**
 * Enqueue profile page scripts.
 *
 * @return void
 */
function raythompsonwebdev_com_about_page_scripts() {

	if ( is_page( 'about-page' ) ) {
		// scrollto script.
		wp_enqueue_script( 'raythompsonwebdev-scrollto', get_template_directory_uri() . '/js/scrollto.js', array( 'jquery' ), '1.0', true );
		// easing script.
		wp_enqueue_script( 'raythompsonwebdev-easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array( 'jquery' ), '1.0', true );
		// profile page scripts.
		wp_enqueue_script( 'raythompsonwebdev-profile', get_template_directory_uri() . '/js/profile.js', array( 'jquery' ), '1.0', true );

	}
}
add_action( 'wp_enqueue_scripts', 'raythompsonwebdev_com_about_page_scripts' );

// google analytics.
if ( ! function_exists( 'raythompsonwebdev_com_google_script' ) ) :

	/**
	 * Google analytics function.
	 *
	 * @return void
	 */
	function raythompsonwebdev_com_google_script() {

		wp_enqueue_script( 'google-script', 'https://www.googletagmanager.com/gtag/js?id=UA-86655310-1', array(), '1.0', true );

		?>

	<!-- Global site tag (gtag.js) - Google Analytics -->

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
 *  Primary Sidebar!
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
 *  Media widget area.
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
 *  Archives widget area.
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
 *  Categories widget area.
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


