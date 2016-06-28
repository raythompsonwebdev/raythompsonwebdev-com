

<?php

/*

Template Name: blog 

*/

?>

<?php get_header(); ?>
<section id="main-content" class="group" role="main">
<section id="blogleftside">       	       	      	

<article id="blog" class="left-col">
<h1>Blog 1</h1>
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
<article class="post group"><h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		
<section class="byline">by <?php the_author_posts_link(); ?> on <a href="<?php the_permalink(); ?>"><?php the_time('l F d, Y'); ?></a></section>
 <?php the_content('Read More...'); ?>

<?php endwhile; else: ?>
<p><?php load_theme_textdomain( $domain, $path ) ?></p>

<nav class="navi">
<span class="right"><?php next_post_link('Newer Posts: <strong>%link</strong>'); ?></span> 
<span class="right"><?php previous_post_link('Older Posts: <strong>%link</strong>'); ?><?php wp_link_pages(); ?></span> 
</nav><!--end of right navigation-->

</article>		

 <?php endif; ?>     			

</article>

<article class="contact-wide">

<h2>Send Comment</h2>

</article>

</section>
<?php get_sidebar(); ?>
</section>
<div class="clearfix"></div>
<?php get_footer(); ?>