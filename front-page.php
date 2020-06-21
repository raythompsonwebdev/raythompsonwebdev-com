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

<div id="frontpage_container">

<section id="svg-image-container">

<h1><?php esc_html_e( 'Hello, I\'m Raymond', 'raythompsonwebdev-com' ); ?></h1>
	  <h2><?php esc_html_e( 'I\'m a web developer and I love using code to create web applications.  ', 'raythompsonwebdev-com' ); ?></h2>
	  <a id="projectLink" href="<?php echo esc_url( 'https://raythompsonwebdev.co.uk/projects/' ); ?>"><?php esc_html_e( 'See Current Projects', 'raythompsonwebdev-com' ); ?></a>


		<figure id="image-7"></figure>
	
</section>

	<div id="text-box-front">
		
		<!-- <h3><?php esc_html_e( 'Hello', 'raythompsonwebdev-com' ); ?></h3> -->
		
		<p><?php esc_html_e( 'Whether it\'s for a small business or a personal goal, I can help achieve your on-line goals with a website or web application specifically tailored for your needs or help optimise existing websites or web applications for improved performance. I can help build your project with the focus on simplicity, usability and accessibility for all your users. ', 'raythompsonwebdev-com' ); ?></p>

	<p><?php esc_html_e( 'I use clean semantic code, following the latest web standards compliances and best practices. I can ensure any websites or web applications built can be found by most search engines, viewed within in most modern browsers and have speedy page loading for a better user experience.', 'raythompsonwebdev-com' ); ?></p>
				
  

	<section id="calltoaction">
	<h1 id="front-title"><?php esc_html_e( 'What I do', 'raythompsonwebdev-com' ); ?></h1>

			<section class="frntpgbox">
			<span><i class="fas fa-code"></i></span>
				<h1><?php esc_html_e( 'Code', 'raythompsonwebdev-com' ); ?></h1>
					
		<p><?php esc_html_e( 'HTML/CSS', 'raythompsonwebdev-com' ); ?></p>
		<p><?php esc_html_e( 'PHP/MYSQL', 'raythompsonwebdev-com' ); ?></p>
		<p><?php esc_html_e( 'Javascript', 'raythompsonwebdev-com' ); ?></p>
						
					
			</section>

			<section class="frntpgbox">
				<span><i class="fas fa-photo-video"></i></span>
					<h1><?php esc_html_e( 'Optimisation', 'raythompsonwebdev-com' ); ?></h1>
					
						<p><?php esc_html_e( 'Video/Audio/Image', 'raythompsonwebdev-com' ); ?></p>
						<p><?php esc_html_e( 'SEO', 'raythompsonwebdev-com' ); ?></p>
						<p><?php esc_html_e( 'Google Analytics', 'raythompsonwebdev-com' ); ?></p>
					
			</section>

			<section class="frntpgbox">
			<span><i class="fab fa-wordpress"></i></span>
					<h1><?php esc_html_e( 'WordPress', 'raythompsonwebdev-com' ); ?></h1>
						
							<p><?php esc_html_e( 'Installation', 'raythompsonwebdev-com' ); ?></p>
							<p><?php esc_html_e( 'Custom Plugins', 'raythompsonwebdev-com' ); ?></p>
							<p><?php esc_html_e( 'Custom Themes', 'raythompsonwebdev-com' ); ?></p>
						
			</section>

			<section class="frntpgbox">
	  <span><i class="fas fa-wrench"></i></span>
				<h1><?php esc_html_e( 'Maintenance', 'raythompsonwebdev-com' ); ?></h1>
					
						<p><?php esc_html_e( 'Security', 'raythompsonwebdev-com' ); ?></p>
						<p><?php esc_html_e( 'Database', 'raythompsonwebdev-com' ); ?></p>
						<p><?php esc_html_e( 'Debugging', 'raythompsonwebdev-com' ); ?></p>
					
			</section>
			
		</section>
</section>
</div>

<?php get_footer(); ?>
