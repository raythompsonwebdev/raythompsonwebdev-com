<?php
/**
 * *PHP version 7.2
 *
 * Template Name: Profile
 *
 * Profile page | core/page-profile.php.
 *
 * @category   Profile_Page
 * @package    WordPress
 * @subpackage Raythompsonwebdev-com
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       https:www.raythompsonwebdev.co.uk custom template
 */
get_header();
?>

<div id="profile_container">

	<h1><?php _e( 'About Me', 'raythompsonwebdev-com' ); ?></h1>

	<article id="text-box-profile">

		<div class="introimg">
			<a href="<?= esc_url( get_permalink() ); ?>" rel="bookmark">

				<img src="<?= esc_url( 'https://raythompsonwebdev.co.uk/wp-content/themes/raythompsonwebdev-com/images/raythompsonwebdev.jpg', 'display' ); ?>" alt="<?php esc_attr_e( 'young-raythompsonwebdev', 'raythompsonwebdev-com' ); ?>" rel="prefetch" />
			</a>
		</div>

		<p><?php _e( 'I have had a passion for web development since 2012 after attending a part-time course in web design at ELATT and have tinkered about since then with HTML, CSS and Javascipt, Ajax to create front end user interfaces , responsive websites and website templates. I also enjoy developing programs to use on the server using languages like PHP, MySQL, Ruby and I also like WordPress theme development and maintenance.', 'raythompsonwebdev-com' ); ?></p>

<p><?php _e( 'I gained some experience of the web design and web development process when collaborating with other students at ELATT to complete projects for Level 3 City and Guild exam. I have learnt a lot about the web industry from my tutors, which really appealed to me.', 'raythompsonwebdev-com' ); ?></p>
		<p>
			<?php _e( 'Since then , whenever I have the spare time, I spend most of it practising coding, ', 'raythompsonwebdev-com' ); ?>
			
			<strong><a href="<?= esc_url( 'https://raythompsonwebdev.co.uk/projects', 'display' ); ?>" target="new">building web applications</a></strong>

			<?php _e( ',  trying out new coding techniques , attempting to solve coding problems and helping others on-line whenever I can. ', 'raythompsonwebdev-com' ); ?>
			<strong><a href="<?= esc_url( 'https://raythompsonwebdev.co.uk/blog', 'display' ); ?>" target="new"></a></strong>
		</p>
	<div class="clearfix"></div>
	</article>

	<?php 
	
		//echo do_shortcode( '[chart]' ); 

		include get_template_directory() . '/inc/profile-page/profile-chart.php';
		
		?>

	<article id="text-box-profile-a">
	<p><?php _e( 'The whole web development process changes rapidly with websites now becoming more like applications and Javascript getting an upgrade.', 'raythompsonwebdev-com' ); ?> </p>

	<p>
			<?php _e( 'I keep up to date as much as I can while still working full-time. I like hearing the latest news in web development by listening to podcasts, I like reading blogs , books, magazines on web devleopment. I have also done a few on-line coding courses. I particularly like websites ', 'raythompsonwebdev-com' ); ?><strong><a href="<?php echo esc_url( 'https://www.freecodecamp.org/raythompsonwebdev', 'display' ); ?>" target="new" >FreeCode Camp </a></strong> and <strong><a href="<?php echo esc_url( 'https://www.codeacademy.com', 'display' ); ?>" target="new"> CodeAcademy</a></strong> among others.
			</p>
			<p>
			<?php _e( 'I have also attended a few local meetups, events and short courses like', 'raythompsonwebdev-com' ); ?>
			<strong><a href="<?php echo esc_url( 'https://vimeo.com/232481032', 'display' ); ?>" target="new">Digital Futures 2017</a></strong>
			<?php _e( ' and do a bit of volunteering whenever I can, like when I volunteered at', 'raythompsonwebdev-com' ); ?>
			<strong><a href="<?php echo esc_url( 'https://2018.london.wordcamp.org/attendees/', 'display' ); ?>" target="new">WordCamp 2018</a></strong> in London &#046;</p>
			<p><?php _e( 'I have also helped friends and others with coding problems and issues related to the web like problems with website page loading speed etc . ', 'raythompsonwebdev-com' ); ?> </p>


		<p><?php _e( 'My goal is to become web developer full-time producing useful and practical web applications that help gain access to information that help improve lives. I want to be able to contribute to improving user experience on the web, particularly for those have difficulty accessing  websites and web applications due to weak connection or other accessibility issues. ', 'raythompsonwebdev-com' ); ?> </p>

		<p><?php _e( 'I am currently seeking employment and development opportunities within the Web Development Industry.', 'raythompsonwebdev-com' ); ?></p>



	</article>

	<?php 
			//echo do_shortcode( '[hero]' ); 
			

			include get_template_directory() . '/inc/profile-page/profile-slider.php';
	
	?>

</div>

<div class="clearfix"></div>

<?php get_footer(); ?>
