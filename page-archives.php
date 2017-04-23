<?php
/*
Template Name: Archives-pages
*/

?>

<?php get_header(); ?>
 	
<section id="main-content" class="group" role="main">
    
<h1><?php the_title(); ?> List</h1>

<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

            
<article class="entry">
 
<h2><?php _e('Browse by Month:', 'raythompwebdesign-com');?></h2>
    
<ul><?php // Arguments
                $args = array(
                    'type' => 'monthly'
                );
                // The archives
                wp_get_archives( $args );
            ?> </ul>

</article>

<article class="entry">

<h2><?php _e('Browse by Category:', 'raythompwebdesign-com');?></h2>
    
<ul><?php // Arguments
        $default = array(
            'title_li' => ''
        );
        // The categories
        wp_list_categories( $default ); 
    ?>
</ul>

</article>

<article class="entry">

<h2><?php _e('Browse by Tag:', 'raythompwebdesign-com');?></h2>

<ul><?php wp_tag_cloud('smallest=8&largest=28&number=0&orderby=name&order=ASC'); ?></ul>

</article>

<article class="entry">

<h2><?php _e('Browse by Page', 'raythompwebdesign-com');?></h2>
<ul><?php wp_list_pages('title_li='); ?></ul>
   
</article>
        
<?php endwhile; else: ?>

<p><?php load_theme_textdomain( 'raythompwebdesign-com', get_template_directory() . '/languages' ) ?></p>

<?php endif; ?>


<section class="contact-wide">

<h1>Related Items</h1>
  
</section>


<?php get_sidebar('archive'); ?> 

</section>
<div class="clearfix"></div>
<?php get_footer(); ?>







