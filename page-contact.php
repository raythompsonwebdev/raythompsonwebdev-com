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




<?php if ( have_posts() ) : ?>
      <?php	while ( have_posts() ) :	the_post();	?>
          <?php the_content(); ?>
          <?php	endwhile;	?>
      <?php endif; ?>


<br>


<div class="clearfix"></div>
<br>
<br>

<?php get_footer(); ?>
