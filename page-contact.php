<?php
/**
 * *PHP version 5
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


<h1><?php the_title(); ?></h1>

<div class="main-text">

<p> <?php esc_html_e( 'Have any questions about website projects? complete form on the right with your details or e-mail me at e-mail address below. You can also holla at me on social media. Lnks at the bottom of the page.', 'raythompsonwebdev-com' ); ?></p>
<br/>
<br/>
<br/>
<br/>
</div>


<div id="contactform">
<?php the_content(); ?>
</div>


<br>

<div id="map_container">

	
</div>

	<ul class="contact-details" >
	<li id="fa-email"><a href="">raymond.thompson@raythompsonwebdev.co.uk</a> </li>


	<br/>




</ul>

<div class="clearfix"></div>
<br>
<br>

<?php get_footer(); ?>
