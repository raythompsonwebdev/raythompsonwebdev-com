<?php
/**
 * *PHP version 7.2.
 *
 * Single Page | core/single.php.
 *
 * @category   Single_Page
 * @package    WordPress
 * @subpackage Raythompsonwebdev-com
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3.
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git.
 * @link       https:www.raythompsonwebdev.co.uk.
 */

get_header();
?>

	<div id="primary" class="site-main">

		<?php

			get_template_part( 'template-parts/content', 'single' );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous&#58;', 'raythompsonwebdev-com' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next&#58;', 'raythompsonwebdev-com' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

		endwhile; // End of the loop.
		?>

			<section class='contact-wide'>

				<h1><?php esc_html_e( 'Send your Comments', 'raythompsonwebdev-com' ); ?></h2>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
					endif;
				?>

			</section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
