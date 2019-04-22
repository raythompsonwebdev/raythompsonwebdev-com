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

		add_editor_style( 'css/custom-editor-style.css' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
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
		if ( function_exists( 'add_theme_support' ) ) {
			add_theme_support( 'post-thumbnails' );
			// Create new image sizes.
			add_image_size( 'featured-image', 783, 9999 );
			add_image_size( 'websites', 550, 9999 );
			add_image_size( 'small', 284, 9999 );
			add_theme_support( 'title-tag' );

		}

		// Set up the WordPress core custom background feature.
		$defaults = array(
			'default-color'          => 'CCD3DE',
			'wp-head-callback'       => '_custom_background_cb',
			'admin-head-callback'    => '',
			'admin-preview-callback' => '',
		);
		add_theme_support( 'custom-background', $defaults );

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

		// custom logo.
		add_theme_support(
			'custom-logo',
			array(
				'width'       => 96,
				'height'      => 96,
				'flex-width'  => false,
				'flex-height' => false,
			)
		);

		// custom header.
		$args = array(
			'width'       => 325,
			'height'      => 65,
			'flex-width'  => true,
			'flex-height' => true,
		);
		add_theme_support( 'custom-header', $args );

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

	}
endif;
add_action( 'after_setup_theme', 'raythompsonwebdev_com_theme_setup' );


/**
 *  Load text domain
 */
function raythompsonwebdev_com_load_theme_textdomain() {
	load_theme_textdomain( 'raythompsonwebdev-com', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'raythompsonwebdev_com_load_theme_textdomain' );

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
add_filter( 'style_loader_src', 'raythompsonwebdev_com_remove_script_version', 15, 1 );

/**
 * Disable the emoji's
 * add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
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
 *  Register menus.
 */
function raythompsonwebdev_com_menu_function() {

	register_nav_menus(
		array(
			'main'      => esc_html__( 'Main nav', 'raythompsonwebdev-com' ),
			'Secondary' => esc_html__( 'Secondary', 'raythompsonwebdev-com' ),
			'mobile'    => esc_html__( 'mobile', 'raythompsonwebdev-com' ),
		)
	);
}
add_action( 'after_setup_theme', 'raythompsonwebdev_com_menu_function' );


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
 *  Remove comment cookies.
 */
remove_action( 'set_comment_cookies', 'wp_set_comment_cookies' );

/**
 *  Remove stuff.
 */
function raythompsonwebdev_com_cubiq_setup() {

	add_filter( 'the_generator', '__return_false' );
	// remove version from rss.
	add_filter( 'the_generator', '__return_empty_string' );

}
add_action( 'after_setup_theme', 'raythompsonwebdev_com_cubiq_setup' );

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

/**
 * Enqueue style sheets.
 */
function raythompsonwebdev_com_register_styles() {
	wp_enqueue_style( 'raythompsonwebdev-com-style', get_stylesheet_uri(), array(), '1.0', false );

	// Add Font Awesome icons (http://fontawesome.io).
	wp_enqueue_style( 'fontawesome', get_stylesheet_directory_uri() . '/fonts/fontawesome/css/font-awesome.min.css', '1.0', true );

}
add_action( 'wp_enqueue_scripts', 'raythompsonwebdev_com_register_styles' );


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
 *  Enqueue other scripts.
 */
function raythompsonwebdev_com_scripts_own() {

	// master.
	wp_enqueue_script( 'raythompsonwebdev-com-master', get_template_directory_uri() . '/js/minified/master.min.js', array( 'jquery' ), '1.0', true );

	wp_enqueue_script( 'navigation', get_template_directory_uri() . '/js/minified/navigation.min.js', array(), '20151215', true );

	wp_enqueue_script( 'skip-link-focus-fix', get_template_directory_uri() . '/js/minified/skip-link-focus-fix.min.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'raythompsonwebdev_com_scripts_own' );

/**
	 * Load the html5.
	 *  */

	$conditional_scripts = array(
		'html5shiv'   => get_template_directory_uri() . '/js/old-browser-scripts/html5shiv.min.js',
		'respond'     => get_template_directory_uri() . '/js/old-browser-scripts/Respond-master/dest/respond.src.js',
		'selectivizr' => get_template_directory_uri() . '/js/old-browser-scripts/selectivizr-min.js',
	);
	foreach ( $conditional_scripts as $handle => $src ) {
		wp_enqueue_script( $handle, $src, array(), '1.0', false );
	}
	add_filter(
		'script_loader_tag',
		function( $tag, $handle ) use ( $conditional_scripts ) {

			if ( array_key_exists( $handle, $conditional_scripts ) ) {
				$tag = '<!--[if (lt IE 9) & (!IEMobile)]>' . $tag . '<![endif]-->' . "\n";
			}
			return $tag;
		},
		10,
		2
	);




	add_action( 'wp_enqueue_scripts', 'raythompsonwebdev_com_add_lightbox' );
	/**
	 *  Enqueue lightbox script.
	 *
	 *  raythompsonwebdev lightbox code.
	 */
	function raythompsonwebdev_com_add_lightbox() {
		if ( 'gallery' === get_post_type() || is_page( 'about' ) ) {
			wp_enqueue_style( 'lightbox-style', get_template_directory_uri() . '/js/inc/lightbox/css/jquery.fancybox.css', false, '1.0', 'all' );
			wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/inc/lightbox/js/jquery.fancybox.js', array( 'jquery' ), '1.0', true );
			wp_enqueue_script( 'lightbox-script', get_template_directory_uri() . '/js/inc/lightbox/js/lightbox.js', array( 'jquery' ), '1.0', true );
		}
	}


	add_action( 'wp_enqueue_scripts', 'raythompsonwebdev_com_gallery_script' );
	/**
	 * Enqueue gallery page scripts.
	 */
	function raythompsonwebdev_com_gallery_script() {

		if ( 'gallery' === get_post_type() ) {
			wp_enqueue_script( 'cookie', get_template_directory_uri() . '/js/jquery.cookie.js', array( 'jquery' ), '20161110', true );
			wp_enqueue_script( 'raythompsonwebdev-com-website', get_template_directory_uri() . '/js/minified/websites.min.js', array( 'jquery' ), '20161110', true );

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
			wp_enqueue_script( 'raythompsonwebdev-profile', get_template_directory_uri() . '/js/minified/profile.min.js', array( 'jquery' ), '20161110', true );

		}
	}

	/**
	 * Contact page map function.
	 *
	 * @return void void text
	 */
	function raythompsonwebdev_com_mapcontainer() {

		if ( is_page( 'contact' ) ) {
			?>

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

			<?php

		}
	}
	add_action( 'wp_footer', 'raythompsonwebdev_com_mapcontainer' );


	if ( ! function_exists( 'raythompsonwebdev_com_google_script' ) ) :

		/**
		 * Google analytics function.
		 *
		 * @return void
		 */
		function raythompsonwebdev_com_google_script() {

			wp_enqueue_script( 'googletagmanager', 'https://www.googletagmanager.com/gtag/js?id=UA-86655310-1', array( 'jquery' ), '20161110', true );

			?>

			<!-- Global site tag (gtag.js) - Google Analytics-->

			<script>

				window.dataLayer = window.dataLayer || [];
				function gtag(){dataLayer.push(arguments);}
				gtag('js', new Date());

				gtag('config', 'UA-86655310-1');

			</script>
		
			<?php
		}
		add_action( 'wp_footer', 'raythompsonwebdev_com_google_script' );
	endif;

	/**
	 *  SVG function.
	 *
	 *  @param array $mimes svg support.
	 */
	function raythompsonwebdev_com_cc_mime_types( $mimes ) {
		$mimes['svg'] = 'image/svg+xml';
		return $mimes;
	}
	add_filter( 'upload_mimes', 'raythompsonwebdev_com_cc_mime_types' );



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
	 * Add custom image sizes attribute to enhance responsive image functionality
	 * for post thumbnails.
	 *
	 * @since Twenty Sixteen 1.0
	 *
	 * @param  array $attr       Attributes for the image markup.
	 * @param  int   $attachment Image attachment ID.
	 * @param  array $size       Registered image size or flat array of height and width dimensions.
	 * @return string A source size value for use in a post thumbnail 'sizes' attribute.
	 */
	function raythompsonwebdev_com_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
		if ( 'post-thumbnail' === $size ) {
			$attr['sizes']   = '(max-width: 736px) 85vw, (max-width: 1024px) 67vw, (max-width: 1280px) 60vw, (max-width: 1920px) 62vw, 840px';
			! $attr['sizes'] = '(max-width: 736px) 85vw, (max-width: 1024px) 67vw, (max-width: 1920px) 88vw, 1440px';
		}
		return $attr;
	}
	add_filter( 'wp_get_attachment_image_attributes', 'raythompsonwebdev_com_post_thumbnail_sizes_attr', 10, 3 );


	/**
	 *  Responsive images.
	 *
	 *  @param  array $sizes    Registered image size or flat array of height and width dimensions.
	 *  @param  array $size     Registered image size or flat array of height and width dimensions.
	 */
	function raythompsonwebdev_com_content_image_sizes_attr( $sizes, $size ) {
		$width                  = $size[0];
		736 <= $width && $sizes = '(max-width: 736px) 85vw, (max-width: 1024px) 67vw, (max-width: 1920px) 62vw, 980px';

		if ( 'page' === get_post_type() ) {
			736 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
		} else {
			736 > $width && 360 <= $width && $sizes = '(max-width: 736px) 85vw, (max-width: 1024px) 67vw, (max-width: 1280px) 61vw, (max-width: 1920px) 45vw, 667px';
			360 > $width && $sizes                  = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
		}

		return $sizes;
	}
	add_filter( 'wp_calculate_image_sizes', 'raythompsonwebdev_com_content_image_sizes_attr', 10, 2 );

	/**
	 * Description Attachment page script.
	 *
	 * @since 1.0
	 */
	if ( ! function_exists( 'raythompsonwebdev_com_attachment_nav' ) ) :
		/**
		 * Desription Display navigation to next/previous image in attachment pages.
		 *
		 * @since 1.0.
		 */
		function raythompsonwebdev_com_attachment_nav() {
			?>
		<nav class="navigation post-navigation" role="navigation">
			<div class="post-nav-box clear">
				<h2 class="screen-reader-text"><?php esc_html_e( 'Attachment post navigation', 'raythompsonwebdev-com' ); ?></h2>
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

	if ( ! function_exists( 'raythompsonwebdev_com_attached_image' ) ) :
		/**
		 * Description Print the attached image with a link to the next attached image.
		 * Summary Appropriated from Twenty Fourteen 1.0.
		 */
		function raythompsonwebdev_com_attached_image() {
			$post = get_post();

			// Filter the default attachment size.
			$attachment_size     = apply_filters( 'raythompsonwebdev_com_attachment_size', array( 810, 810 ) );
			$next_attachment_url = wp_get_attachment_url();

			// Grab the IDs of all the image attachments in a gallery so we can get the URL of the next adjacent image in a gallery, or the first image (if we're looking at the last image in a gallery), or, in a gallery of one, just the link to that image file.
			$args = array(
				'post_parent'    => $post->post_parent,
				'fields'         => 'ids',
				'numberposts'    => 1,
				'post_status'    => 'inherit',
				'post_type'      => 'attachment',
				'post_mime_type' => 'image',
				'order'          => 'ASC',
				'orderby'        => 'menu_order ID',

			);

			$attachment_ids = new WP_Query( $args );

			// If there is more than 1 attachment in a gallery...
			if ( count( $attachment_ids, 0 ) > 1 ) {
				foreach ( $attachment_ids as $attachment_id ) {
					if ( $attachment_id === $post->ID ) {
						$next_id = current( $attachment_ids );
						break;
					}
				}
				// get the URL of the next image attachment...
				if ( $next_id ) {
					$next_attachment_url = get_attachment_link( $next_id );
				} // or get the URL of the first image attachment.
				else {
					$next_attachment_url = get_attachment_link( array_shift( $attachment_ids ) );
				}
			}
			printf(
				'<a href="%1$s" rel="attachment">%2$s</a>',
				esc_url( $next_attachment_url ),
				wp_get_attachment_image( $post->ID, $attachment_size )
			);
		}
endif;

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

	