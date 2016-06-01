
<?php get_header(); ?>

<section id="main-content" class="group" role="main">
	

		<h1><?php // Output the category title
if ( is_category() ) { single_cat_title(); } 
      // Output the tag title
elseif ( is_tag() ) { single_tag_title();
      // For everything else

} else { _e('Browsing the Archive', 'raythompwebdesign-com'); }
?></h1>
		
<section id="blogleftside">
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>	
	
<article id="blog" class="left-col">
          
<article class="post group">
		
<h2><?php _e('Browse by Month:', 'raythompwebdesign-com');?></h2>
    
<ul><?php wp_get_archives('type=monthly'); ?></ul>

<h2><?php _e('Browse by Category:', 'raythompwebdesign-com');?></h2>
    
<ul><?php wp_list_categories('title_li='); ?></ul>

<h2><?php _e('Browse by Tag:', 'raythompwebdesign-com');?></h2>

<ul><?php wp_tag_cloud('smallest=8&largest=28&number=0&orderby=name&order=ASC'); ?></ul>
   
</article>
        
<?php endwhile; else: ?>

<p><?php load_theme_textdomain( $domain, $path ) ?></p>

<?php endif; ?>

</article>

<br/>
<article class="contact-wide">

<h2>Archives</h2>
  
</article>

</section>
<?php get_sidebar(); ?> 
</section>
<div class="clearfix"></div>
<?php get_footer(); ?>







