<?php
/**
 * *PHP version 5
 * 
 * Template Name: Privacy
 *
 * Privacy page | core/page-privacy.php.
 *
 * @category   Privacy_Page
 * @package    Raythompsonwebdev-com
 * @subpackage Privacy_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
get_header(); ?>


<?php if (have_posts()) :   ?>

        <?php  while (have_posts()) : the_post();

            get_template_part('template-parts/content', 'page');  ?>

        <?php endwhile;  ?>

        <?php
        else :

            get_template_part('template-parts/content', 'none');

        endif;
        ?>


<div class="clearfix"></div>


<?php get_footer(); ?>
