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

		<p><?php esc_html_e( 'Since then I spend lots of my spare time learning coding languages, practising coding,&nbsp;', 'raythompsonwebdev-com' ); ?><strong><a href="<?php echo esc_url( home_url( '/' ) . 'projects' ); ?>" target="new">building web applications</a></strong><?php esc_html_e( '&nbsp;helping others with their websites in my spare time while working full-time. I became more interested in programming around 2016 after completing a few online courses like ', 'raythompsonwebdev-com' ); ?>	<strong><a href="<?php echo esc_url( 'http://www.linkedin.com/in/raymond-thompson-1b42b7b8', 'display' ); ?>" target="new">Free Code Camp</a></strong>
		<?php esc_html_e( 'that year and gained even more inspiration to learn more about coding languages like Javascipt, PHP, Ruby and Python and continue coding and building small applications.', 'raythompsonwebdev-com' ); ?>
		</p>
		<p>
				<?php esc_html_e( 'Keeping up with changes in web development and self teaching web development has been a challenge.', 'raythompsonwebdev-com' ); ?>

				<strong><a href="<?php echo esc_url( home_url( '/' ) . 'blog' ); ?>" target="new"></a></strong>
			</p>
	</article>

	<!--chart-->
	<?php	get_template_part( 'template-parts/content', 'chart' ); ?>

	<article id="text-box-profile-a">
	<p>
	<?php esc_html_e( 'I have been inspired enough to continue learning and mastering new coding techniques to solve problems I come across when coding.&nbsp;', 'raythompsonwebdev-com' ); ?>

<strong><a href="<?php echo esc_url( home_url( '/' ) . 'blog' ); ?>" target="new"></a></strong>
</p>

		<p><?php esc_html_e( 'I have gained valuable experience meeting others interested in web development, online and at live events. Events like ', 'raythompsonwebdev-com' ); ?><strong><a href="<?php echo esc_url( 'https://vimeo.com/232481032', 'display' ); ?>" target="new">Digital Futures 2017</a></strong><?php esc_html_e( '&nbsp;in Waterloo, London.', 'raythompsonwebdev-com' ); ?> 	<?php esc_html_e( 'and ', 'raythompsonwebdev-com' ); ?><strong><a href="<?php echo esc_url( 'https://2018.london.wordcamp.org/attendees/', 'display' ); ?>" target="new">WordCamp 2018 </a></strong> <?php esc_html_e( ' in London  ')?><?php esc_html_e( ' and attending pair programming sessions to solve coding problems like the one held by ', 'raythompsonwebdev-com' ); ?><strong><a href="<?php echo esc_url( 'https://2018.london.wordcamp.org/attendees/', 'display' ); ?>" target="new">Makers Academy </a></strong>	</p>
		<p><?php esc_html_e( 'My aim is to continue improving my coding skills and workflow so that I am able to help create well designed and maintainable web applications and contribute towards improving user experience, security and accessibility for web applications on the web for all users. ', 'raythompsonwebdev-com' ); ?> </p>

	</article>

	<!--slider-->
	<?php	get_template_part( 'template-parts/content', 'slider' ); ?>


	<!-- <article id="text-box-profile-b">
		<p><?php esc_html_e( 'My goal is to continue improving my coding skills and workflow. I want to be able to produce efficient, well designed, maintainable code and to contribute towards improving user experience, security and accessibility for web applications and websites.    ', 'raythompsonwebdev-com' ); ?> </p>

		<p><?php esc_html_e( 'I am actively seeking opporunities in web development industry.', 'raythompsonwebdev-com' ); ?></p>
	</article> -->

</main>



<?php get_footer(); ?>
