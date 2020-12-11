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

// require_once get_stylesheet_directory() . '/raythompsonwebdev-customv2/raythompsonwebdev-customv2.php';

/**
 * Returns a custom login error message.
 */
function cwpl_error_message() {
	return 'Well, that was not it!';
}
add_filter( 'login_errors', 'cwpl_error_message' );


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

	}

endif;
add_action( 'after_setup_theme', 'raythompsonwebdev_com_theme_setup' );


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


