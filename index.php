<?php
/**
 * *PHP version 7.2
 *
 * Index page | core/index.php.
 *
 * @category   Index_Page
 * @package    WordPress
 * @subpackage Raythompsonwebdev-com
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       https:www.raythompsonwebdev.co.uk custom template.
 */

get_header(); ?>


  <?php  get_template_part( 'template-parts/content', get_post_format() ); ?>

  <div class="clearfix"></div>

  <!--Related Items -->
  <section class="contact-wide">
    <h1><?php _e( 'Related Items', 'raythompsonwebdev-com' ); ?></h1>
  </section>

<!--Side bar -->
<?php get_sidebar(); ?>


<!--footer -->
<?php get_footer(); ?>
