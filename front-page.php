<?php
/**
 * *PHP version 7.2.
 *
 * Template Name :Home
 *
 * Home page | core/front-page.php.
 *
 * @category   Home_page
 * @package    Raythompsonwebdev-com
 * @subpackage Home_page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */

 get_header(); ?>

<div id="frontpage_container">

<div id="svg-image-container">
	<figure id="image-7">
		<object 
			class="style-svg" 
			type="image/svg+xml" 
			id="image-4" 
			alt="svg-image"
			data="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/raythompsonwebdev-com/images/responsive-design-devices-2.1.svg" >
		</object>
		<img id="image-5" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/raythompsonwebdev-com/images/home-page-image.jpg" alt="Your Browser does not support SVG" >
	</figure>

</div>

	<div id="textboxfront">
		<h1><?php _e( 'Hello, I\'m a Web Developer', 'raythompsonwebdev-com' ); ?></h1>

		<p><?php _e( 'My name is Raymond. I am a web developer and I create custom WordPress themes, customise WordPress themes and build websites and web applications.', 'raythompsonwebdev-com' ); ?></p>

		<p><?php _e( 'Whether it\'s for a small business or a personal goal, I can help you achieve your on-line goals with a website or web application specifically tailored for your needs.', 'raythompsonwebdev-com' ); ?></p>
	
		<section id="calltoaction">
			<article class="frntpgbox">
				<h1><?php _e( 'Code', 'raythompsonwebdev-com' ); ?></h1>
					<ul>
						<li><?php _e( 'HTML\/CSS', 'raythompsonwebdev-com' ); ?></li>
						<li><?php _e( 'PHP', 'raythompsonwebdev-com' ); ?>v</li>
						<li><?php _e( 'Javascript(ES6)', 'raythompsonwebdev-com' ); ?></li>
						
					</ul>
			</article>

			<article class="frntpgbox">
					<h1><?php _e( 'Optimisation', 'raythompsonwebdev-com' ); ?></h1>
					<ul>
						<li><?php _e( 'CRO', 'raythompsonwebdev-com' ); ?></li>
						<li><?php _e( 'SEO', 'raythompsonwebdev-com' ); ?></li>
						<li><?php _e( 'Google Analytics', 'raythompsonwebdev-com' ); ?></li>
					</ul>
			</article>

			<article class="frntpgbox">
					<h1><?php _e( 'WordPress', 'raythompsonwebdev-com' ); ?></h1>
						<ul>
							<li><?php _e( 'Installation', 'raythompsonwebdev-com' ); ?></li>
							<li><?php _e( 'Maintenance', 'raythompsonwebdev-com' ); ?></li>
							<li><?php _e( 'Custom Themes', 'raythompsonwebdev-com' ); ?></li>
						</ul>
			</article>

			<article class="frntpgbox">
				<h1><?php _e( 'Maintenance', 'raythompsonwebdev-com' ); ?></h1>
					<ul>
						<li><?php _e( 'Security', 'raythompsonwebdev-com' ); ?></li>
						<li><?php _e( 'SEO', 'raythompsonwebdev-com' ); ?></li>
						<li><?php _e( 'Debugging', 'raythompsonwebdev-com' ); ?></li>
					</ul>
			</article>
			
		</section>
		<p><?php _e( 'From idea to launch I can help you build your project with the focus on simplicity, usability and accessibility for all your users. I use clean semantic code and following latest web standards compliances and best practices. I can ensure any website or web application built can be found by most search engines, viewed within in most modern browsers and have fast page loading for a great user experience.', 'raythompsonwebdev-com' ); ?></p>
		
	</div>
	
</div>

<?php get_footer(); ?>
