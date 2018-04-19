<?php
/**
 * *PHP version 5
 *
 * Archive Gallery | core/archive-gallery.php.
 *
 * @category   Archive_Gallery
 * @package    Raythompsonwebdev-com
 * @subpackage Archive_Gallery
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       http:www.raythompsonwebdev.co.uk 
 */
 
 get_header();



?>

<h1><?php post_type_archive_title(); ?></h1>
<div class="main-text">
    
</div>
<div class="seperator"></div>
<div class="seperator"></div>

<div id="photocontainer" ><!-- Container Starts Here -->

<div class="content">

<nav class="menuSwitch" role="navigation">

  <ul>
    <?php ?>

      <li class="cat-active" category="prod-cnt"><?php _e('All', 'raythompsonwebdev-com'); ?></li>

        <li class="" category="web-applications"><?php _e('From Scratch', 'raythompsonwebdev-com'); ?></li>

          <li class="" category="wordpress"><?php _e('Wordpress', 'raythompsonwebdev-com'); ?></li>

        <li class="" category="bootstrap"><?php _e('Bootstrap', 'raythompsonwebdev-com'); ?></li>

      <li class="" category="foundation"><?php _e('Foundation', 'raythompsonwebdev-com'); ?></li>

  </ul>
</nav>

<br/>

<!-- Panel Container Starts Here -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<!-- display slugs for custom post categories-->
<div id="panel" class="prod-cnt <?php
$terms = get_the_terms($post -> ID, 'gallery-category');
foreach ($terms as $term) {
    echo $term -> slug . ' ';
}
    ?>"
    <?php post_class(); ?> <?php the_ID(); ?> >

  <figure class="showcase-container " id="showcaseimg1">
<div class="showcase-img">
    <?php the_post_thumbnail('websites'); ?>
</div>
  <figcaption class="showcase-content showcase">
  <h1> <?php the_title(); ?></h1>

  <div class="links">
    <a href="<?php the_permalink() ?>"><?php esc_html_e('See More..', 'raythompsonwebdev-com'); ?></a></div>
  </figcaption>

  </figure>

</div>
<!-- Panel Container Ends Here -->
<?php
        endwhile;
else:
    ?>

    
<?php endif; ?>

<div class="clearfix"></div>

</div><!-- End of Content -->

<div class="clearfix"></div>

</div><!-- End of PhotoContainer -->

<div class="clearfix"></div>



<?php get_footer(); ?>
