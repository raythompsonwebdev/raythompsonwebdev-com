<?php
/**
 * *PHP version 7.2
 *
 * Index page | core/index.php.
 *
 * @category   Index_Page
 * @package    Raythompsonwebdev-com
 * @subpackage Index_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       http:www.raythompsonwebdev.co.uk custom template.
 */

get_header(); ?>

<!--<h1><?php _e( 'Web Developer and Enthusiatic WordPress User ?', 'raythompsonwebdev-com' ); ?></h1>

<article class="main-text">
  
  <p>
    <?php _e( ' I would like to share with you what I have learnt through the numerous tutorials tons of valuable web development and web design related resources I have read, watched and listened to over the past few years&#46;', 'raythompsonwebdev-com' ); ?>
  </p>

  <br/>

</article>-->

  <!--search form -->
  <?php if ( is_home() || is_archive() ) : ?>
    <span class="social-1"><?php get_search_form(); ?></span>
  <?php else : ?>
    <span class="social-1"></span>
  <?php endif; ?>

  <br/><br/>

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
