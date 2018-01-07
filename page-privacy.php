<?php
/**
 * *PHP version 5.6
 * 
 * Template Name: Privacy
 * 
 * Header | core/pages-privacy.php.
 * 
 * @category   Privacy_Page
 * @package    Wordpress
 * @subpackage Privacy_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
?>

<?php get_header(); ?>

<section id="main-content" class="group" role="main">
   		
  <h1><?php the_title(); ?></h1>

<?php if (have_posts()) :
        while (have_posts()) : the_post();

        get_template_part('templates/content', 'page');

        endwhile;

        else :
          echo '<p>No content found</p>';

        endif;
        ?>     			


<div class="clearfix"></div>
       		
</section>
<div class="clearfix"></div>
<?php get_footer(); ?>