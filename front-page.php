<?php
/**
 * *PHP version 7.4.
 *
 * Template Name :Home
 *
 * Home page | core/front-page.php.
 *
 * @category   Home_page
 * @package    WordPress
 * @subpackage Raythompsonwebdev-com
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       https:www.raythompsonwebdev.co.uk custom template
 */

get_header(); ?>

<div id="frontpage-container">

	<article id="fntpage-banner">

	<?php
		while ( have_posts() ) :
			the_post();

			the_content();


		endwhile; // End of the loop.
	?>

			<figure id="image-7"></figure>

	</article>

	<div id="text-box-front">

		<section id="calltoaction">
			<h1 id="front-title"><?php esc_html_e( 'I do..', 'raythompsonwebdev-com' ); ?></h1>

				<section class="frntpgbox">
					<!-- <span><i class="fa fa-code" aria-hidden="true"></i></span> -->
					<span class="dashicons dashicons-html"></span>
					<h1><?php esc_html_e( 'Code', 'raythompsonwebdev-com' ); ?></h1>

					<p><?php esc_html_e( 'HTML &#38; CSS', 'raythompsonwebdev-com' ); ?></p>
					<p><?php esc_html_e( 'PHP &#38; MYSQL', 'raythompsonwebdev-com' ); ?></p>
					<p><?php esc_html_e( 'Javascript ES5&#47;ES6', 'raythompsonwebdev-com' ); ?></p>


				</section>

				<section class="frntpgbox">
					<!-- <span><i class="fas fa-photo-video" aria-hidden="true"></i></span> -->
					<span class="dashicons dashicons-images-alt"></span>
						<h1><?php esc_html_e( 'Optimisation', 'raythompsonwebdev-com' ); ?></h1>

							<p><?php esc_html_e( 'Video, Audio &#38; Image', 'raythompsonwebdev-com' ); ?></p>
							<p><?php esc_html_e( 'SQL Database', 'raythompsonwebdev-com' ); ?></p>
							<p><?php esc_html_e( 'On-Site SEO', 'raythompsonwebdev-com' ); ?></p>

				</section>

				<section class="frntpgbox">
					<!-- <span><i class="fab fa-wordpress-simple" aria-hidden="true"></i></span> -->
					<span class="dashicons dashicons-wordpress"></span>
						<h1><?php esc_html_e( 'WordPress', 'raythompsonwebdev-com' ); ?></h1>

					<p><?php esc_html_e( 'Set Up &#38; Installation', 'raythompsonwebdev-com' ); ?></p>
					<p><?php esc_html_e( 'Themes &#38; Plugins', 'raythompsonwebdev-com' ); ?></p>
					<p><?php esc_html_e( 'Gutenberg Blocks', 'raythompsonwebdev-com' ); ?></p>

				</section>

				<section class="frntpgbox">
					<!-- <span><i class="fas fa-wrench" aria-hidden="true"></i></span> -->
					<span class="dashicons dashicons-admin-tools"></span>
							<h1><?php esc_html_e( 'Maintenance', 'raythompsonwebdev-com' ); ?></h1>

					<p><?php esc_html_e( 'Web Security', 'raythompsonwebdev-com' ); ?></p>
					<p><?php esc_html_e( 'Database', 'raythompsonwebdev-com' ); ?></p>
					<p><?php esc_html_e( 'Code Debugging', 'raythompsonwebdev-com' ); ?></p>

				</section>

		</section>

	</div>



</div>

<?php get_footer(); ?>
