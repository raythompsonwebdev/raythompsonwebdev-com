<?php
/**
 * Sample implementation of the Custom Header feature.
 *
 * You can add an optional custom header image to header.php like so ...
 *
 * @link http://codex.wordpress.org/Custom_Headers
 *
 * @package    WordPress
 * @subpackage Raythompsonwebdev-com
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses raythompsonwebdev_com_header_style()
 */
function raythompsonwebdev_com_custom_header_setup() {

	add_theme_support(
		'custom-header',
		apply_filters(
			'raythompsonwebdev_com_custom_header_args',
			array(
				'default-image'          => '',
				'default-text-color'     => '062351',
				'width'                  => 1600,
				'height'                 => 100,
				'flex-height'            => true,
				'wp-head-callback'       => 'raythompsonwebdev_com_header_style',
				'admin-head-callback'    => 'raythompsonwebdev_com_admin_header_style',
				'admin-preview-callback' => 'raythompsonwebdev_com_admin_header_image',
			)
		)
	);

	// custom logo.
	add_theme_support(
		'custom-logo',
		array(
			'width'       => 96,
			'height'      => 96,
			'flex-width'  => true,
			'flex-height' => true,
			'header-text' => array( 'site-title', 'site-description' ),
		)
	);
}
add_action( 'after_setup_theme', 'raythompsonwebdev_com_custom_header_setup' );


if ( ! function_exists( 'raythompsonwebdev_com_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog
	 *
	 * @see raythompsonwebdev_com_custom_header_setup().
	 */
	function raythompsonwebdev_com_header_style() {

		$header_text_color = get_header_textcolor();

		// If no custom options for text are set, let's bail
		// get_header_textcolor() options: HEADER_TEXTCOLOR is default, hide text (returns 'blank') or any hex value.
		if ( add_theme_support( 'custom_header' ) === $header_text_color ) {
			return;
		}

		// If we get this far, we have custom styles. Let's do this.
		?>
		<style type="text/css">
		<?php
			// Has the text been hidden?
		if ( ! display_header_text() ) :
			?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
			<?php
			// If the user has set a custom color for the text use that.
		else :
			?>
			.site-title a,
			.site-description {
				color: #<?php echo esc_attr( $header_text_color ); ?>;
			}
		<?php endif; ?>
		</style>
		<?php
	}
endif; // raythompsonwebdev_com_header_style.

