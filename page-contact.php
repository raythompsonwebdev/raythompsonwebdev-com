<?php
/**
 * *PHP version 7.4.
 *
 * Template Name: Contact
 *
 * Contact page | core/page-contact.php.
 *
 * @category   Contact_Page
 * @package    WordPress
 * @subpackage Raythompsonwebdev-com
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       https:www.raythompsonwebdev.co.uk custom template
 */

get_header(); ?>

<header class="page-header">
				<h1 class="page-title"><?php the_title(); ?></h1>
</header><!-- .page-header -->

<div id="contactform">

		<?php the_content(); ?>

</div>

	<br>

	<div id="map_container"></div>

	<address id="contact-details">

		<li class="dashicons-before dashicons-email"><a href="mailto:name@mydomain.com"><?php esc_html_e( 'raymond.thompson@raythompsonwebdev.co.uk', 'raythompsonwebdev-com' ); ?></a></li>

		<li class="dashicons-before dashicons-twitter"><a href="<?php echo esc_url( 'https://twitter.com/RayThompWeb', 'display' ); ?>" target="new" title="<?php esc_attr_e( 'Follow me on Twitter', 'raythompsonwebdev-com' ); ?>"><?php esc_html_e( '@RayThompWeb', 'raythompsonwebdev-com' ); ?></a></li>

		<li class="dashicons-before dashicons-linkedin"><a href="<?php echo esc_url( 'https://www.linkedin.com/in/raymond-thompson-1b42b7b8', 'display' ); ?>" target="new" title="<?php esc_attr_e( 'Follow me on LinkedIn', 'raythompsonwebdev-com' ); ?>"><?php esc_html_e( 'www.linkedin.com/in/raymond-t-1b42b7b8/', 'raythompsonwebdev-com' ); ?></a></li>


	</address>

	<div class="clearfix"></div>

	<br><br>
</div>
<?php get_footer(); ?>
