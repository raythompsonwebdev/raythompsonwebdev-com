<?php
/**
 * *PHP version 7.2.
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

<h1><?php esc_html_e( 'Contact Page', 'raythompsonwebdev-com' ); ?></h1>

<section id="contactform">

	<?php the_content(); ?>

</section>

<br>

<div id="map_container"></div>

<address id="contact-details">

	<li><a href="mailto:name@mydomain.com"><i class="fas fa-envelope-square"></i>raymond.thompson@raythompsonwebdev.co.uk</a></li>

	<li><a href="<?php echo esc_url( 'https://twitter.com/RayThompWeb', 'display' ); ?>" target="new" title="<?php esc_attr_e( 'Follow me on Twitter', 'raythompsonwebdev-com' ); ?>"><i class="fab fa-twitter"></i>@RayThompWeb</a></li>

	<li><a href="<?php echo esc_url( 'https://www.linkedin.com/in/raymond-thompson-1b42b7b8', 'display' ); ?>" target="new" title="<?php esc_attr_e( 'Follow me on LinkedIn', 'raythompsonwebdev-com' ); ?>"><i class="fab fa-linkedin"></i>www.linkedin.com/in/raymond-t-1b42b7b8/</a></li>

	<li><a href="<?php echo esc_url( 'https://github.com/raythompsonwebdev/', 'display' ); ?>" target="new" title="<?php esc_attr_e( 'Follow me on GitHub', 'raythompsonwebdev-com' ); ?>"><i class="fab fa-github"></i>github.com/raythompsonwebdev</a></li>
</address>

<div class="clearfix"></div>

<br><br>

<?php get_footer(); ?>
