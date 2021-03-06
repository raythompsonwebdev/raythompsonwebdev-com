<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package raythompsonwebdev-com
 */

if ( ! defined( 'RAYTHOMPSONWEBDEV_COM_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'RAYTHOMPSONWEBDEV_COM_VERSION', '1.0.0' );
}

// register meta data for graph ql.
register_meta(
	'post',
	'project_name',
	array(
		'object_subtype' => 'project',
		'show_in_rest'   => true,
	)
);

register_meta(
	'post',
	'project_description',
	array(
		'object_subtype' => 'project',
		'show_in_rest'   => true,
	)
);

register_meta(
	'post',
	'project_code',
	array(
		'object_subtype' => 'project',
		'show_in_rest'   => true,
	)
);

register_meta(
	'post',
	'project_url',
	array(
		'object_subtype' => 'project',
		'show_in_rest'   => true,
	)
);

/**
 * Returns a custom login error message.
 */
function raythompsonwebdev_com_error_message() {
	return 'Well, that was not it, hmmm!';
}
add_filter( 'login_errors', 'raythompsonwebdev_com_error_message' );

if ( ! function_exists( 'raythompsonwebdev_com_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 */
	function raythompsonwebdev_com_setup() {
		/*
		 * Make theme available for translation.
		 *
		 */
		load_theme_textdomain( 'raythompsonwebdev-com', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

			// Add block editor  styles.
			$font_url = '//https://fonts.googleapis.com/css2?family=Cabin:wght@400;600&family=PT+Sans:wght@400;700&display=swap';
			add_editor_style( array( 'editor-style.css', str_replace( ',', '%2C', $font_url ) ) );
			add_theme_support( 'editor-styles' );

		/*
		 * Let WordPress manage the document title.
		 *
		 */
		add_theme_support( 'title-tag' );

		/*
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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'main'      => esc_html__( 'Main', 'raythompsonwebdev-com' ),
				'secondary' => esc_html__( 'Secondary', 'raythompsonwebdev-com' ),
				'mobile'    => esc_html__( 'Mobile', 'raythompsonwebdev-com' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// block styles.
		add_theme_support( 'wp-block-styles' );

		$defaults = array(
			'default-image'          => '',
			'width'                  => 0,
			'height'                 => 0,
			'flex-height'            => false,
			'flex-width'             => false,
			'uploads'                => true,
			'random-default'         => false,
			'header-text'            => true,
			'default-text-color'     => '',
			'wp-head-callback'       => '',
			'admin-head-callback'    => '',
			'admin-preview-callback' => '',
		);
		add_theme_support( 'custom-header', $defaults );

		// Set up the WordPress core custom background feature.
		$defaults = array(
			'default-color'          => '',
			'default-image'          => '',
			'default-repeat'         => 'repeat',
			'default-position-x'     => 'left',
			'default-position-y'     => 'top',
			'default-size'           => 'auto',
			'default-attachment'     => 'scroll',
			'wp-head-callback'       => '_custom_background_cb',
			'admin-head-callback'    => '',
			'admin-preview-callback' => '',
		);
		add_theme_support( 'custom-background', $defaults );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 90,
				'width'       => 90,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		// Enable block editor styles to match the front end.
		add_theme_support( 'wp-block-styles' );

		// Enable wide alignments in block editor.
		add_theme_support( 'align-wide' );

		// allow embeds to be responsive.
		add_theme_support( 'responsive_embeds' );

	}
endif;
add_action( 'after_setup_theme', 'raythompsonwebdev_com_setup' );

// remove version from rss.
add_filter( 'the_generator', '__return_empty_string' );

/**
 * Remove version from scripts and styles.
 *
 * @param array $src
 */
function raythompsonwebdev_com_remove_version_scripts_styles( $src ) {
	if ( strpos( $src, 'ver=' ) ) {
		$src = remove_query_arg( 'ver', $src );
	}
	return $src;
}
add_filter( 'style_loader_src', 'raythompsonwebdev_com_remove_version_scripts_styles', 9999 );
add_filter( 'script_loader_src', 'raythompsonwebdev_com_remove_version_scripts_styles', 9999 );

// Enqueue the Dashicons script.
add_action( 'wp_enqueue_scripts', 'raythompsonwebdev_com_load_dashicons_front_end' );
function raythompsonwebdev_com_load_dashicons_front_end() {
	wp_enqueue_style( 'dashicons' );
}

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function raythompsonwebdev_com_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'raythompsonwebdev_com_content_width', 640 );
}
add_action( 'after_setup_theme', 'raythompsonwebdev_com_content_width', 0 );
/**
 * Registers an editor stylesheet for the theme.
 */
function raythompsonwebdev_com_add_editor_styles() {
	add_editor_style( 'editor-style.css' );
}
add_action( 'admin_init', 'raythompsonwebdev_com_add_editor_styles' );

/**
 * Block Editor Styling.
 */
function raythompsonwebdev_com_block_editor_fonts() {
	wp_enqueue_style( 'raythompsonwebdev-com-block-editor-fonts', 'https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;400;600&display=swap', array(), RAYTHOMPSONWEBDEV_COM_VERSION );

}
add_action( 'enqueue_block_editor_assets', 'raythompsonwebdev_com_block_editor_fonts' );

function raythompsonwebdev_com_add_block_style() {
	wp_enqueue_script( 'raythompsonwebdev-com-block-variations', get_template_directory_uri() . '/js/custom-block-settings.js', array( 'wp-blocks' ), RAYTHOMPSONWEBDEV_COM_VERSION, false );
}
add_action( 'enqueue_block_editor_assets', 'raythompsonwebdev_com_add_block_style' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
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
 * Media widget area.
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
 * Enqueue scripts and styles.
 */
function raythompsonwebdev_com_scripts() {
	wp_enqueue_style( 'raythompsonwebdev-com-style', get_stylesheet_uri(), array(), RAYTHOMPSONWEBDEV_COM_VERSION );
	wp_style_add_data( 'raythompsonwebdev-com-style', 'rtl', 'replace' );
/*
	<link rel="preconnect" href="https://fonts.gstatic.com">

	<link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;600&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">

	wp_enqueue_style( 'raythompsonwebdev-com-fonts', 'https://fonts.googleapis.com/css2?family=Cabin:wght@400;600&family=PT+Sans:wght@400;700&display=swap', array(), RAYTHOMPSONWEBDEV_COM_VERSION );
*/
	wp_enqueue_script( 'raythompsonwebdev-com-master', get_template_directory_uri() . '/js/master.js', array(), RAYTHOMPSONWEBDEV_COM_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'raythompsonwebdev_com_scripts' );

/**
 *  Enqueue lightbox script.
 *
 *  @return void
 */
function raythompsonwebdev_com_add_lightbox() {
	if ( 'project' === get_post_type() || is_page( 'about' ) ) {
		wp_enqueue_style( 'lightbox-style', get_template_directory_uri() . '/js/inc/lightbox/css/jquery.fancybox.css', array(), RAYTHOMPSONWEBDEV_COM_VERSION );
		wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/inc/lightbox/js/jquery.fancybox.js', array( 'jquery' ), RAYTHOMPSONWEBDEV_COM_VERSION, true );
		wp_enqueue_script( 'lightbox-script', get_template_directory_uri() . '/js/inc/lightbox/js/lightbox.js', array( 'jquery' ), RAYTHOMPSONWEBDEV_COM_VERSION, true );
	}
}
add_action( 'wp_enqueue_scripts', 'raythompsonwebdev_com_add_lightbox' );


// google analytics.
if ( ! function_exists( 'raythompsonwebdev_com_google_script' ) ) :

	/**
	 * Google analytics function.
	 *
	 * @return void
	 */
	function raythompsonwebdev_com_google_script() {

		// wp_enqueue_script( 'google-script', 'src=https://raythompsonwebdev.co.uk/wp-content/uploads/caos/c59a11b3.js', array(), '1.0', true );

		?>

	<!-- This site is running CAOS for Wordpress. -->
	<script  src='https://raythompsonwebdev.co.uk/wp-content/uploads/caos/c59a11b3.js'></script>
	<script>
    window.ga = window.ga || function() {
        (ga.q = ga.q || []).push(arguments);
    };
    ga.l = +new Date;

    ga('create', 'UA-86655310-1', {"cookieName":"caosLocalGa","cookieDomain":"raythompsonwebdev.co.uk","cookieExpires":2592000,"cookieFlags":"samesite=none;secure"});
            ga('send', 'pageview');
                </script>

		<?php
	}
	add_action( 'wp_head', 'raythompsonwebdev_com_google_script' );

endif;


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}




