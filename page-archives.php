<?php
/*
Template Name: Archives-pages
*/

?>

<?php get_header(); ?>
 	
<section id="main-content" class="group" role="main">
    
<h1><?php the_title(); ?> List</h1>

<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
            
<article class="entry-content">
 
<h2><?php _e('Browse by Month:', 'raythompsonwebdev-com');?></h2>
    
<ul><?php wp_get_archives('type=monthly'); ?></ul>

<h2><?php _e('Browse by Category:', 'raythompwebdesign-com');?></h2>
    
<ul><?php wp_list_categories('title_li='); ?></ul>

<h2><?php _e('Browse by Tag:', 'raythompwebdesign-com');?></h2>

<ul><?php wp_tag_cloud('smallest=8&largest=28&number=0&orderby=name&order=ASC'); ?></ul>

<h2><?php _e('Browse by Page', 'raythompwebdesign-com');?></h2>
<ul><?php wp_list_pages('title_li='); ?></ul>
   
</article>
        
<?php endwhile; else: ?>

<p><?php load_theme_textdomain( 'raythompwebdesign-com', get_template_directory() . '/languages' ) ?></p>

<?php endif; ?>


<article class="contact-wide">

<h2>Archives</h2>
  
</article>


<?php get_sidebar('archives'); ?> 

</section>
<div class="clearfix"></div>
<?php get_footer(); ?>







