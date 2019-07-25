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

<h1><?php echo esc_html( 'Contact Page', 'raythompsonwebdev-com' ); ?></h1>

<div id="contactform">
    
    <?php the_content();?>
    
</div>

<br>

<div id="map_container"></div>

<ul class="contact-details">
<<<<<<< HEAD

    <li id="fa-email"><a href="#">raymond.thompson@raythompsonwebdev.co.uk</a></li>
=======
    <li id="fa-email"><a href="#"><?php _e( 'raymond.thompson@raythompsonwebdev.co.uk', 'raythompsonwebdev-com' ); ?></a></li>
>>>>>>> 189c8a6e2fee8d4aafe2022de31adf5229b08828

    <li id="fa-email" ><a href="#" >LINK</a></li>

    <li id="fa-email"><a href="<?php echo esc_url( 'http://twitter.com/RayThompWeb', 'display' ); ?>" target="new" title="<?php esc_attr_e( 'Follow me on Twitter', 'raythompsonwebdev-com' ); ?>">@RayThompWeb</a></li>

    <li id="fa-email"><a href="<?php echo esc_url( 'http://www.linkedin.com/in/raymond-thompson-1b42b7b8', 'display' ); ?>" target="new" title="<?php esc_attr_e( 'Follow me on LinkedIn', 'raythompsonwebdev-com' ); ?>">www.linkedin.com/in/raymond-t-1b42b7b8/</a></li>

    <li id="fa-email"><a href="<?php echo esc_url( 'http://github.com/raythompsonwebdev/', 'display' ); ?>" target="new" title="<?php esc_attr_e( 'Follow me on GitHub', 'raythompsonwebdev-com' ); ?>">github.com/raythompsonwebdev</a></li>
</ul>

<div class="clearfix"></div>

<br><br>

<?php get_footer(); ?>
