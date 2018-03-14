<?php
/**
 * *PHP version 5
 * 
 * Template Name: Archives-pages
 *
 * Archives page | core/page-archives.php.
 *
 * @category   Archives_Page
 * @package    Raythompsonwebdev-com
 * @subpackage Archives_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
get_header(); ?>
    
<h1><?php the_title(); ?> List</h1>

<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

<article class="post group <?php post_class() ?>" id="post-<?php the_ID(); ?>">
            
<article class="entry">
 
<h2><?php _e('Browse by Month:', 'raythompsonwebdev-com'); ?></h2>
    
<ul><?php // Arguments
        $args = array('type' => 'monthly');
        // The archives
        wp_get_archives($args);
            ?> </ul>

</article>

<article class="entry">

    <h2><?php _e('Browse by Category:', 'raythompsonwebdev-com'); ?></h2>

    <ul><?php // Arguments
    $default = array('title_li' => '');
    // The categories
    wp_list_categories($default);
        ?>
    </ul>

</article>

<article class="entry">

    <h2><?php _e('Browse by Tag:', 'raythompsonwebdev-com'); ?></h2>

    <ul><?php wp_tag_cloud('smallest=8&largest=28&number=0&orderby=name&order=ASC'); ?></ul>

</article>

<!--<article class="entry">

<h2><?php _e('Browse by Page', 'raythompsonwebdev-com');?></h2>
<ul><?php wp_list_pages('title_li='); ?></ul>
   
</article>-->
        
<?php endwhile; 
        else: 
        
    get_template_part('template-parts/content', 'none');
    ?>


<?php endif; ?>
 </article>

<section class="contact-wide">

<h1>Archive Pages</h1>
  
</section>


<?php get_sidebar('archive'); ?> 


<?php get_footer(); ?>







