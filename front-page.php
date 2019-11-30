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

<section id="svg-image-container">

<h1><?php _e( 'Hello, I\'m Raymond', 'raythompsonwebdev-com' ); ?></h1>
      <h2><?php _e( 'I build beautiful web applications', 'raythompsonwebdev-com' ); ?></h2>
      <a id="projectLink" href="<?php echo esc_url( 'https://raythompsonwebdev.co.uk/projects/'); ?>"><?php _e( 'See Current Projects', 'raythompsonwebdev-com' ); ?></a>


        <figure id="image-7"></figure>

	<!--<figure id="image-7">
		<object 
			class="style-svg" 
			type="image/svg+xml" 
			id="image-4" 
			alt="svg-image"
			data="wp-content/themes/raythompsonwebdev-com/images/responsive-design-devices-2.1.svg" >
		</object>
		<img id="image-5" src="wp-content/themes/raythompsonwebdev-com/images/home-page-image.jpg" alt="Your Browser does not support SVG" >
	</figure>-->

</section>

	<div id="text-box-front">
		
		<!-- <h3><?php _e( 'Hello', 'raythompsonwebdev-com' ); ?></h3> -->

		<p><?php _e( 'I am a web developer and I love to create custom WordPress themes, customise WordPress themes and build web applications.', 'raythompsonwebdev-com' ); ?></p>

		<p><?php _e( 'Whether it\'s for a small business or a personal goal, I can help you achieve your on-line goals with a website or web application specifically tailored for your needs.', 'raythompsonwebdev-com' ); ?></p>
	<p><?php _e( 'From idea to launch I can help build your project with the focus on simplicity, usability and accessibility for all your users. I use clean semantic code and following latest web standards compliances and best practices. I can ensure any website or web application built can be found by most search engines, viewed within in most modern browsers and have fast page loading for a great user experience.', 'raythompsonwebdev-com' ); ?></p>
				
  

    <section id="calltoaction">
    <h1 id="front-title"><?php _e( 'What I can do', 'raythompsonwebdev-com' ); ?></h1>

			<section class="frntpgbox">
			<span><i class="fa fa-wordpress"></i></span>
				<h1><?php _e( 'Code', 'raythompsonwebdev-com' ); ?></h1>
					
        <p><?php _e( 'HTML5/CSS3', 'raythompsonwebdev-com' ); ?></p>
        <p><?php _e( 'PHP', 'raythompsonwebdev-com' ); ?></p>
        <p><?php _e( 'Javascript', 'raythompsonwebdev-com' ); ?></p>
						
					
			</section>

			<section class="frntpgbox">
				<span><i class="fa fa-laptop"></i></span>
					<h1><?php _e( 'Optimisation', 'raythompsonwebdev-com' ); ?></h1>
					
						<p><?php _e( 'Video/Audio', 'raythompsonwebdev-com' ); ?></p>
						<p><?php _e( 'SEO', 'raythompsonwebdev-com' ); ?></p>
						<p><?php _e( 'Google Analytics', 'raythompsonwebdev-com' ); ?></p>
					
			</section>

			<section class="frntpgbox">
			<span><i class="fa fa-wrench"></i></span>
					<h1><?php _e( 'WordPress', 'raythompsonwebdev-com' ); ?></h1>
						
							<p><?php _e( 'Installation', 'raythompsonwebdev-com' ); ?></p>
							<p><?php _e( 'Custom Plugins', 'raythompsonwebdev-com' ); ?></p>
							<p><?php _e( 'Custom Themes', 'raythompsonwebdev-com' ); ?></p>
						
			</section>

			<section class="frntpgbox">
      <span><i class="fa fa-wrench"></i></span>
				<h1><?php _e( 'Maintenance', 'raythompsonwebdev-com' ); ?></h1>
					
						<p><?php _e( 'Security', 'raythompsonwebdev-com' ); ?></p>
						<p><?php _e( 'Database', 'raythompsonwebdev-com' ); ?></p>
						<p><?php _e( 'Debugging', 'raythompsonwebdev-com' ); ?></p>
					
			</section>
			
		</section>
</section>
</div>

<?php get_footer(); ?>
