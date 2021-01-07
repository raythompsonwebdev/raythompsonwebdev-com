<?php
/**
 * *PHP version 7.2.
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

<main id="frontpage_container">

	<section id="fntpage_banner">

		<h1><?php esc_html_e( 'Hello, I\'m Raymond', 'raythompsonwebdev-com' ); ?></h1>
		<h2><?php esc_html_e( 'I\'m a web developer. I enjoy coding and the challenges it brings.  ', 'raythompsonwebdev-com' ); ?></h2>

			<p><?php esc_html_e( 'I create web applications and website interfaces that provide effective solutions to meet your on-line needs. I use clean semantic code and follow the latest web standards compliances and best practices. That ensures that websites can be found by most search engines, viewed within in most modern browsers and have speedy page loading for a better user experience.', 'raythompsonwebdev-com' ); ?></p>

			<p><?php esc_html_e( ' Whether its website interface or a full web application I can create elegant and maintainable solutions. To see some of my past work click button on the right', 'raythompsonwebdev-com' ); ?></p>

			<a id="projectLink" href="<?php echo esc_url( home_url( '/' ) . 'projects' ); ?>"><?php esc_html_e( 'See Current Projects', 'raythompsonwebdev-com' ); ?></a>

			<figure id="image-7"></figure>

	</section>

		<div id="text-box-front">
				<!-- <h3><?php esc_html_e( 'Hello', 'raythompsonwebdev-com' ); ?></h3> -->

		<section id="calltoaction">
		<h1 id="front-title"><?php esc_html_e( 'I do..', 'raythompsonwebdev-com' ); ?></h1>

				<section class="frntpgbox">
				<span><i class="fa fa-code" aria-hidden="true"></i></span>
					<h1><?php esc_html_e( 'Code', 'raythompsonwebdev-com' ); ?></h1>

			<p><?php esc_html_e( 'HTML & CSS', 'raythompsonwebdev-com' ); ?></p>
			<p><?php esc_html_e( 'PHP & MYSQL', 'raythompsonwebdev-com' ); ?></p>
			<p><?php esc_html_e( 'Javascript ES5/ES6', 'raythompsonwebdev-com' ); ?></p>


				</section>

				<section class="frntpgbox">
					<span><i class="fas fa-photo-video" aria-hidden="true"></i></span>
						<h1><?php esc_html_e( 'Optimisation', 'raythompsonwebdev-com' ); ?></h1>

							<p><?php esc_html_e( 'Video, Audio & Image', 'raythompsonwebdev-com' ); ?></p>
							<p><?php esc_html_e( 'SQL Database', 'raythompsonwebdev-com' ); ?></p>
							<p><?php esc_html_e( 'On-Site SEO', 'raythompsonwebdev-com' ); ?></p>

				</section>

				<section class="frntpgbox">
					<span><i class="fab fa-wordpress-simple" aria-hidden="true"></i></span>
						<h1><?php esc_html_e( 'WordPress', 'raythompsonwebdev-com' ); ?></h1>

				<p><?php esc_html_e( 'Set Up & Installation', 'raythompsonwebdev-com' ); ?></p>
				<p><?php esc_html_e( 'Themes & Plugins', 'raythompsonwebdev-com' ); ?></p>
				<p><?php esc_html_e( 'Gutenberg Blocks', 'raythompsonwebdev-com' ); ?></p>

				</section>

				<section class="frntpgbox">
				<span><i class="fas fa-wrench" aria-hidden="true"></i></span>
						<h1><?php esc_html_e( 'Maintenance', 'raythompsonwebdev-com' ); ?></h1>

				<p><?php esc_html_e( 'Web Security', 'raythompsonwebdev-com' ); ?></p>
				<p><?php esc_html_e( 'Database', 'raythompsonwebdev-com' ); ?></p>
				<p><?php esc_html_e( 'Code Debugging', 'raythompsonwebdev-com' ); ?></p>

				</section>

			</section>
	</section>


</main>

<?php get_footer(); ?>
