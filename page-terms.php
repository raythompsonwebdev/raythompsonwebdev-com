<?php
/**
 * Template Name: Terms
 * 
 * Websites page | core/terms.php.
 *
 * @category   Terms_Page
 * @package    Wordpress
 * @subpackage Terms_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
?>

<?php get_header(); ?>



  <h1><?php the_title(); ?></h1>

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post();

        get_template_part('templates/content', 'page');?>

    <?php endwhile;?>

    <?php else :?>

        <?php  get_template_part('templates/content', 'none');?>

    <?php endif;
        ?>

<div class="clearfix"></div>

<?php get_footer(); ?>
