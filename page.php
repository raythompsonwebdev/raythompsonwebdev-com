<?php get_header(); ?>

  	
<section id="main-content" class="group" role="main">
<h1>Blog Page</h1>
<section id="blogleftside">       	       	      	

<article id="blog" class="left-col">

<a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute()?>";>
<figure class="featuredImage"><?php the_post_thumbnail('custom');?></figure>
</a>

<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

<article class="post group">

<h2><?php the_title(); ?></h2>

<?php the_content('Read More...'); ?>

</article>

<section class="byline">
<p class='right'>
<a class='comments-count' href='<?php the_permalink() ?>'><?php comments_number('0', '1', '%')?></a>
</p>
         
<?php endwhile; else: ?>

<p><?php load_theme_textdomain( $domain, $path ) ?></p>

 <?php endif; ?>
  </section>    
 		
</article>

<p><?php posts_nav_link(' &bull; ', 'Older posts', 'Newer posts');?>.</p>

<article class="contact-wide">

  <h2>Send Comment</h2>

    <?php comments_template(); ?> 

</article>

	
</section>
<?php get_sidebar(); ?>
</section>


<div class="clearfix"></div>
<?php get_footer(); ?> 







