<?php
/**
 * *PHP version 7.2
 *
 * Template Name: Profile
 *
 * Profile page | core/page-profile.php.
 *
 * @category   Profile_Page
 * @package    Raythompsonwebdev-com
 * @subpackage Profile_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
get_header();
?>

<div id="profile_container">

	<h1><?php esc_html_e( 'About Me', 'raythompsonwebdev-com' ); ?></h1>

	<article id="text-box-profile">

		<div class="introimg">
			<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">

				<img src="<?php echo esc_url( 'https://raythompsonwebdev.co.uk/wp-content/themes/raythompsonwebdev-com/images/raythompsonwebdev.jpg', 'display' ); ?>" alt="<?php echo esc_attr_e( 'young-raythompsonwebdev', 'raythompsonwebdev-com' ); ?>" rel="prefetch" />
			</a>
		</div>

		<p><?php echo esc_html_e( 'I have passion for web development dating back to 2012 and like tinkering with HTML, CSS and Javascipt, Ajax to create front end user interfaces , responsive websites and website templates. I also enjoy developing programs on the back end using PHP, MySQL, Ruby and WordPress theme development and maintenance.', 'raythompsonwebdev-com' ); ?></p>

<p><?php echo esc_html_e( 'My interest for web design and development began after attending a part time web design course  in East London between November 2011 and Oct 2012 where I gained some experience of the web design and development process by completing projects for tasks in exams and collaborating with other students. I learnt a bit about the web industry from my tutors, some of which really appealed to me.', 'raythompsonwebdev-com' ); ?></p>
		<p>
			<?php echo esc_html_e( 'Since then , whenever I have the spare time, I spend most of it practicing coding, ', 'raythompsonwebdev-com' ); ?><strong><a href="<?php echo esc_url( 'https://raythompsonwebdev.co.uk/projects', 'display' ); ?>" target="new">building web applications</a></strong><?php echo esc_html_e( ',  trying out new coding techniques , attempting to solve coding problems and helping others on-line whenever I can. ', 'raythompsonwebdev-com' ); ?><strong><a href="<?php echo esc_url( 'https://raythompsonwebdev.co.uk/blog', 'display' ); ?>" target="new"></a></strong>
		</p>



		<div class="clearfix"></div>
	</article>

	<?php echo do_shortcode( '[chart]' ); ?>

	<article id="text-box-profile-a">
	<p><?php echo esc_html_e( 'The whole web development process has changed rapidly over the past five years with websites now becoming more like applications and the rise of Javascript.', 'raythompsonwebdev-com' ); ?> </p>

	<p>
			<?php esc_html_e( 'I continue to keep up to date as much as I can while working full-time. I like to hear the latest news in web development. I listen to podcasts, watch videos on-line , off-line and read web devleopment related books and blogs. I have also done quite a few on-line coding courses. I particularly like websites like ', 'raythompsonwebdev-com' ); ?><strong><a href="<?php echo esc_url( 'https://www.freecodecamp.org/raythompsonwebdev', 'display' ); ?>" target="new" >FreeCode Camp </a></strong> and <strong><a href="<?php echo esc_url( 'https://www.codeacademy.com', 'display' ); ?>" target="new"> CodeAcademy</a></strong> among others.
			</p>
			<p>
			<?php esc_html_e( 'I also attend local meetup and events and short courses like', 'raythompsonwebdev-com' ); ?>
			<strong><a href="<?php echo esc_url( 'https://vimeo.com/232481032', 'display' ); ?>" target="new">Digital Futures 2017</a></strong>
			<?php esc_html_e( ' and do a bit of volunteering whenever I can, like when I volunteered at', 'raythompsonwebdev-com' ); ?>
			<strong><a href="<?php echo esc_url( 'https://2018.london.wordcamp.org/attendees/', 'display' ); ?>" target="new">WordCamp 2018</a></strong> in London &#046;</p>
			<p><?php esc_html_e( 'I have also helped friends and others with coding problems and issues they have had with websites and web applications mostly off-line. ', 'raythompsonwebdev-com' ); ?> </p>


		<p><?php esc_html_e( 'My goal is to become web developer full-time producing useful and practical web applications . I want to be able to contribute to improving user experience on the web, particularly for those have difficulty accessing  websites and web applications on the internet due to weak connection or other accessibility issues. ', 'raythompsonwebdev-com' ); ?> </p>

		<p><?php esc_html_e( 'I am curently seeking further development opportunities within the Web Industry.', 'raythompsonwebdev-com' ); ?></p>



	</article>

	<?php echo do_shortcode( '[hero]' ); ?>

</div>

<div class="clearfix"></div>

<?php get_footer(); ?>
