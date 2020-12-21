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

<main id="profile_container">

	<h1><?php esc_html_e( 'About Me', 'raythompsonwebdev-com' ); ?></h1>

	<article id="text-box-profile">

		<p><?php esc_html_e( 'I have had a passion for web development since 2012 after attending a course in basic web design for beginners at a place called ELATT in Hackney, London. The experience of taking part in the course, learning the process of developing a website inspired me to learn more about web development. ', 'raythompsonwebdev-com' ); ?></p>

		<p><?php esc_html_e( 'Since then I spend lots of my spare time learning coding languages, practising coding,&nbsp;', 'raythompsonwebdev-com' ); ?><strong><a href="<?php echo esc_url( home_url( '/' ) . 'projects' ); ?>" target="new">building web applications</a></strong><?php esc_html_e( '&nbsp;helping others with their websites in my spare time while working full-time. I became more interested in programming around 2016 after taking computer science fundementals courses on&nbsp;', 'raythompsonwebdev-com' ); ?>	<strong><a href="<?php echo esc_url( 'http://www.linkedin.com/in/raymond-thompson-1b42b7b8', 'display' ); ?>" target="new">Lynda.com</a></strong>
		<?php esc_html_e( '&nbsp;that year and have since then found it easier to understand how and why coding languages like Javascipt, PHP and Ruby work the way they do.', 'raythompsonwebdev-com' ); ?>
		</p>
	</article>

	<!--chart-->
	<?php	get_template_part( 'template-parts/content', 'chart' ); ?>

	<article id="text-box-profile-a">
		<p>
				<?php esc_html_e( 'Keeping up with changes in web development and self teaching web development has been a challenge. I have been inspired enough to continue learning and mastering new coding techniques to solve coding problems I come across.&nbsp;', 'raythompsonwebdev-com' ); ?>

				<strong><a href="<?php echo esc_url( home_url( '/' ) . 'blog' ); ?>" target="new"></a></strong>
			</p>
		<p><?php esc_html_e( 'I have gained some experience working with others interested in web development at events and on projects. I took part in a project called&nbsp;', 'raythompsonwebdev-com' ); ?><strong><a href="<?php echo esc_url( 'https://vimeo.com/232481032', 'display' ); ?>" target="new">Digital Futures 2017</a></strong><?php esc_html_e( '&nbsp;in Waterloo, London where I worked with other student to enhance a dance performance with coreographed lights and music using Ruby and Python', 'raythompsonwebdev-com' ); ?> </p>

					<p>
				<?php esc_html_e( 'I also attended ', 'raythompsonwebdev-com' ); ?><strong><a href="<?php echo esc_url( 'https://2018.london.wordcamp.org/attendees/', 'display' ); ?>" target="new">WordCamp 2018 </a></strong> <?php esc_html_e( ' in London as a volunteer helping visitors find there way around the venue, putting out sinage. I also attended contributors day and even reviewed a WordPress theme for the theme review team', 'raythompsonwebdev-com' ); ?>	</p>

	</article>

	<!--slider-->
	<?php	get_template_part( 'template-parts/content', 'slider' ); ?>


	<article id="text-box-profile-b">
		<p><?php esc_html_e( 'My aim is to continue improving my coding skills and workflow so that I am able to create efficeintly, well designed and maintaibable web applications. I want to be able to contribute to improving user experience on the web, particularly for those have difficulty accessing websites and web applications due to weak signals or unreliable networks . ', 'raythompsonwebdev-com' ); ?> </p>

		<p><?php esc_html_e( 'I am actively seeking opporunities in web development industry.', 'raythompsonwebdev-com' ); ?></p>
	</article>

</main>



<?php get_footer(); ?>
