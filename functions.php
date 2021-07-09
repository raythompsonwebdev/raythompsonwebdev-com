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

		// load text domain.
		load_theme_textdomain( 'raythompsonwebdev-com', get_template_directory() . '/languages' );

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

		// block styles.
		add_theme_support( 'wp-block-styles' );

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
			'uploads'                => false,
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
				'main'      => esc_html__( 'Main', 'raythompsonwebdev-com' ),
				'secondary' => esc_html__( 'Secondary', 'raythompsonwebdev-com' ),
				'mobile'    => esc_html__( 'Mobile', 'raythompsonwebdev-com' ),
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
add_action( 'after_setup_theme', 'raythompsonwebdev_com_theme_setup' );


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
 * Remove version from scripts and styles.
 *
 * @param array $src array of styles and scripts.
 */
function raythompsonwebdev_com_remove_version_scripts_styles( $src ) {
	if ( strpos( $src, 'ver=' ) ) {
		$src = remove_query_arg( 'ver', $src );
	}
	return $src;
}
add_filter( 'style_loader_src', 'raythompsonwebdev_com_remove_version_scripts_styles', 9999 );
add_filter( 'script_loader_src', 'raythompsonwebdev_com_remove_version_scripts_styles', 9999 );


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
 *  Remove comment cookies.
 */
remove_action( 'set_comment_cookies', 'wp_set_comment_cookies' );


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
 * Load the google fonts.
 *
 * @return void
 *  */
function wpb_add_google_fonts() {
  wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;600;700&family=PT+Sans:wght@400;700&display=swap', false );
  }

add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

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
 * Master Scripts
 *
 * @return void
 */
function raythompsonwebdev_com_scripts_own() {

	// master.
	wp_enqueue_script( 'raythompsonwebdev-com-master', get_template_directory_uri() . '/js/master.js', array(), '1.0', true );

	wp_enqueue_script( 'navigation', get_template_directory_uri() . '/js/navigation.js', array(), '1.0', true );

  wp_enqueue_script( 'skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '1.0', true );

  wp_enqueue_script( 'fontawesome', get_template_directory_uri() . '/fonts/fontawesome/js/all.js', array(), '1.0', false );

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
	if ( 'project' === get_post_type() || is_page( 'about' ) ) {
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

	if ( is_page( 'about' ) ) {
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




