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
	 *
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

		//block styles
		add_theme_support('wp-block-styles');

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

// remove version from head
remove_action('wp_head', 'wp_generator');

// remove version from rss
add_filter('the_generator', '__return_empty_string');

// remove version from scripts and styles
function raythompsonwebdev_com_remove_version_scripts_styles($src) {
	if (strpos($src, 'ver=')) {
		$src = remove_query_arg('ver', $src);
	}
	return $src;
}
add_filter('style_loader_src', 'raythompsonwebdev_com_remove_version_scripts_styles', 9999);
add_filter('script_loader_src', 'raythompsonwebdev_com_remove_version_scripts_styles', 9999);

//Enqueue the Dashicons script
add_action( 'wp_enqueue_scripts', 'load_dashicons_front_end' );
function load_dashicons_front_end() {
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
 * Enqueue scripts and styles.
 */
function raythompsonwebdev_com_scripts() {
	wp_enqueue_style( 'raythompsonwebdev-com-style', get_stylesheet_uri(), array(), RAYTHOMPSONWEBDEV_COM_VERSION );
	wp_style_add_data( 'raythompsonwebdev-com-style', 'rtl', 'replace' );

	wp_enqueue_style( 'raythompsonwebdev-com-fonts', 'https://fonts.googleapis.com/css2?family=Cabin:wght@400;600&family=PT+Sans:wght@400;700&display=swap', array(), RAYTHOMPSONWEBDEV_COM_VERSION );

	wp_enqueue_script( 'raythompsonwebdev-com-master', get_template_directory_uri() . '/js/master.js', array(), RAYTHOMPSONWEBDEV_COM_VERSION, true );

	wp_enqueue_script( 'raythompsonwebdev-com-navigation', get_template_directory_uri() . '/js/navigation.js', array(), RAYTHOMPSONWEBDEV_COM_VERSION, true );

	wp_enqueue_script( 'skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), RAYTHOMPSONWEBDEV_COM_VERSION, true );

	//wp_enqueue_script( 'fontawesome', get_template_directory_uri() . '/fonts/fontawesome/js/all.js', array(), RAYTHOMPSONWEBDEV_COM_VERSION, false );

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

/**
 * Enqueue profile page scripts.
 *
 * @return void
 */
function raythompsonwebdev_com_about_page_scripts() {

	if ( is_page( 'about' ) ) {
		// scrollto script.
		//wp_enqueue_script( 'raythompsonwebdev-scrollto', get_template_directory_uri() . '/js/scrollto.js', array( 'jquery' ), RAYTHOMPSONWEBDEV_COM_VERSION, true );
		// easing script.
		//wp_enqueue_script( 'raythompsonwebdev-easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array( 'jquery' ), RAYTHOMPSONWEBDEV_COM_VERSION, true );
		// profile page scripts.
		wp_enqueue_script( 'raythompsonwebdev-profile', get_template_directory_uri() . '/js/profile.js', array( 'jquery' ), RAYTHOMPSONWEBDEV_COM_VERSION, true );

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

register_block_pattern_category(
		'profile-page-block-pattern', array(
			'label' => __("Profile Page Pattern", 'raythompsonwebdev-com')
		)
);

register_block_pattern_category(
	'about-page-block-pattern', array(
		'label' => __("About Page Pattern", 'raythompsonwebdev-com')
	)
);

function raythompsonwebdev_com_register_block_patterns() {

	if ( class_exists( 'WP_Block_Patterns_Registry' ) ) {

		register_block_pattern(
			'raythompsonwebdev-com/profile-page-pattern',
			array(
				'title'       => __( 'Profile Page Pattern', 'raythompsonwebdev-com' ),
				'description' => _x( 'A call to action with a beautiful two-column gallery below.', 'Block pattern description', 'raythompsonwebdev-com' ),
				'content'     => '<!-- wp:group {"align":"wide"} -->
				<div class="wp-block-group alignwide">
					<div class="wp-block-group__inner-container">

						<!-- wp:columns {"align":"wide"} -->
						<div class="wp-block-columns alignwide">
							<!-- wp:column -->
							<div class="wp-block-column">
							<!-- wp:html -->
							<span class="dashicons dashicons-html"></span>
							<!-- /wp:html -->

								<!-- wp:heading {"level":4} -->
								<h4>Code</h4>
								<!-- /wp:heading -->

								<!-- wp:paragraph -->
								<p>HTML & CSS</p>
								<!-- /wp:paragraph -->
								<!-- wp:paragraph -->
								<p>PHP & MYSQL</p>
								<!-- /wp:paragraph -->
								<!-- wp:paragraph -->
								<p>Javascript ES5/ES6</p>
								<!-- /wp:paragraph -->
							</div>
							<!-- /wp:column -->

							<!-- wp:column -->
							<div class="wp-block-column">
							<!-- wp:html -->
							<span class="dashicons dashicons-images-alt"></span>
							<!-- /wp:html -->

								<!-- wp:heading {"level":4} -->
								<h4>Optimisation</h4>
								<!-- /wp:heading -->

								<!-- wp:paragraph -->
								<p>Video, Audio & Image</p>
								<!-- /wp:paragraph -->
								<!-- wp:paragraph -->
								<p>SQL Database</p>
								<!-- /wp:paragraph -->
								<!-- wp:paragraph -->
								<p>On-Site SEO</p>
								<!-- /wp:paragraph -->
							</div>
							<!-- /wp:column -->

							<!-- wp:column -->
							<div class="wp-block-column">
							<!-- wp:html -->
							<span class="dashicons dashicons-wordpress"></span>
							<!-- /wp:html -->

								<!-- wp:heading {"level":4} -->
								<h4>WordPress</h4>
								<!-- /wp:heading -->

								<!-- wp:paragraph -->
								<p>Set Up & Installation</p>
								<!-- /wp:paragraph -->
								<!-- wp:paragraph -->
								<p>Themes & Plugins</p>
								<!-- /wp:paragraph -->
								<!-- wp:paragraph -->
								<p>Gutenberg Blocks</p>
								<!-- /wp:paragraph -->
							</div>
							<!-- /wp:column -->

							<!-- wp:column -->
							<div class="wp-block-column">

							<!-- wp:html -->
								<span class="dashicons dashicons-admin-tools"></span>
								<!-- /wp:html -->

								<!-- wp:heading {"level":4} -->
								<h4>Maintenance</h4>
								<!-- /wp:heading -->

								<!-- wp:paragraph -->
								<p>Web Security</p>
								<!-- /wp:paragraph -->
								<!-- wp:paragraph -->
								<p>Database</p>
								<!-- /wp:paragraph -->
								<!-- wp:paragraph -->
								<p>Code Debugging</p>
								<!-- /wp:paragraph -->
							</div>
							<!-- /wp:column -->
						</div>
						<!-- /wp:columns -->

					</div>
				</div>
				<!-- /wp:group -->
				',
				'categories'  => array( 'profile-page-block-pattern' ),
			)
		);
		register_block_pattern(
			'raythompsonwebdev-com/about-page-pattern',
			array(
				'title'       => __( 'about Page Pattern', 'raythompsonwebdev-com' ),
				'description' => _x( 'about page layout.', 'Block pattern description', 'raythompsonwebdev-com' ),
				'content'     => '<!-- wp:group {"align":"wide"} -->
				<div class="wp-block-group alignwide" id="profile-container">
					<div class="wp-block-group__inner-container">
						<!-- wp:html -->
						<article id="text-box-profile">
							<p>
								I have had a passion for web development since 2012 after attending a course
								in basic web design for beginners at a place called ELATT in Hackney,
								London. The experience of taking part in the course, learning the process of
								developing a website inspired me to learn more about web development.
							</p>

							<p>
								Since then I spend lots of my spare time learning coding languages,
								practising coding,&nbsp;<strong
									><a href="https://raythompsonwebdev.co.uk/projects"
										>building web applications</a
									></strong
								>, sharing what I have learned with friends, online and at events during my
								spare time while working full-time. I became more interested in programming
								around 2016 after completing online courses like&nbsp;<strong
									><a href="https://www.freecodecamp.org/raythompsonwebdev"
										>Free Code Camp</a
									></strong
								>&nbsp;that year and gained even more inspiration to learn more about coding
								languages like Javascipt, PHP, Ruby and Python and continue coding and
								building small applications.
							</p>

							<p>
								Keeping up with changes that have happended over the past few years in web
								development has been a challenge.
							</p>
						</article>
						<!-- /wp:html -->

						<!-- wp:shortcode /-->

						<!-- wp:shortcode /-->

						<!-- wp:html -->
						<article id="text-box-profile-a">
							<!-- wp:paragraph -->
							<p>
								I have been inspired enough to continue learning and mastering new coding
								techniques to solve problems I come across when coding.&nbsp;&nbsp;<strong
								></strong>
							</p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph -->
							<p>
								I have gained valuable knowledge and experience meeting others interested
								in web development, online and at live events I have been able to attend.
								Events like&nbsp;<strong
									><a href="https://vimeo.com/232481032">Digital Futures 2017</a></strong
								>&nbsp;in Waterloo, London. and&nbsp;<strong
									><a href="https://2018.london.wordcamp.org/attendees/"
										>WordCamp 2018</a
									></strong
								>&nbsp;in London and attending pair programming sessions to solve coding
								problems like the one held by&nbsp;<strong
									><a href="https://makers.tech/">Makers Academy.</a></strong
								>
							</p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph -->
							<p>
								This has helped me with the confidence to put into practice what I have
								learned to create full stack web applications, wordpress themes and
								plugins and other web programs.
							</p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph -->
							<p>
								My aim is to continue improving my coding skills and workflow so that I am
								able to help in the creation of well designed and maintainable web
								applications and contribute towards improving the user experience,
								security and accessibility of web application on the web for all users.
							</p>
							<!-- /wp:paragraph -->
						</article>
						<!-- /wp:html -->


					</div>
				</div>
				<!-- /wp:group -->',
				'categories'  => array( 'about-page-block-pattern' ),
			)
		);

	}

}
add_action( 'init', 'raythompsonwebdev_com_register_block_patterns' );
