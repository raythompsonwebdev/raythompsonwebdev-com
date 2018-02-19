<?php
/*
 Template Name: Archives-pages
 */
?>

<?php get_header(); ?>
 	
    
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
        
<?php endwhile; else: ?>

<p><?php load_theme_textdomain( 'raythompsonwebdev-com', get_template_directory() . '/languages' ) ?></p>

<?php endif; ?>
 </article>

<section class="contact-wide">

<h1>Archive Pages</h1>
  
</section>


<?php get_sidebar('archive'); ?> 


<?php get_footer(); ?>







