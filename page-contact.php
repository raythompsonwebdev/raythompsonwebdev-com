<?php
/**
 * *PHP version 7.2.
 *
 * Template Name: Contact
 *
 * Contact page | core/page-contact.php.
 *
 * @category   Contact_Page
 * @package    Raythompsonwebdev-com
 * @subpackage Contact_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 * 
 */
get_header(); ?>

<h1><?php _e( 'Contact Page', 'raythompsonwebdev-com' ); ?></h1>

<div id="contactform">
    
    <?php the_content();?>
    
</div>

<br>

<div id="map_container"></div>

<address id="contact-details">

    <li><a href="mailto:name@mydomain.com">raymond.thompson@raythompsonwebdev.co.uk</a></li>

    <li><a href="<?php echo esc_url( 'https://twitter.com/RayThompWeb', 'display' ); ?>" target="new" title="<?php esc_attr_e( 'Follow me on Twitter', 'raythompsonwebdev-com' ); ?>">@RayThompWeb</a></li>

    <li><a href="<?php echo esc_url( 'https://www.linkedin.com/in/raymond-thompson-1b42b7b8', 'display' ); ?>" target="new" title="<?php esc_attr_e( 'Follow me on LinkedIn', 'raythompsonwebdev-com' ); ?>">www.linkedin.com/in/raymond-t-1b42b7b8/</a></li>

    <li><a href="<?php echo esc_url( 'https://github.com/raythompsonwebdev/', 'display' ); ?>" target="new" title="<?php esc_attr_e( 'Follow me on GitHub', 'raythompsonwebdev-com' ); ?>">github.com/raythompsonwebdev</a></li>
</address>

<div class="clearfix"></div>

<br><br>

<?php get_footer(); ?>
