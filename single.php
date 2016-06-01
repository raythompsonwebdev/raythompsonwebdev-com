
<?php get_header(); ?>

<section id="main-content" class="group" role="main">   	
<h1></h1>	
<section id="blogleftside">       	       	      	
			
<article id="blog" class="left-col">
	
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

<article class="post group" <?php post_class(); ?> <?php the_ID(); ?>>

<h1><?php the_title(); ?></h1>

<section class="byline">
 by <?php the_author_posts_link(); ?> on <span class="date"><?php the_date('l F d, Y'); ?></span><br/>
 Posted in: <?php the_category(', '); ?> | <?php the_tags('Tagged with: ', ', '); ?>
</section><!--end of by line-->

<a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute()?>";>
<figure class="featuredImage"><?php the_post_thumbnail('custom');?></figure>
</a>

<?php the_content(); ?>
<section class="byline">

<p class='right'><a class='comments-count' href='<?php the_permalink() ?>'><?php comments_number('0', '1', '%')?></a></p>
</section>
 </article><!--end of post group-->

 <!--navigation-->

<nav class="navi">
<span class="right"><?php next_post_link('Newer Posts: <strong>%link</strong>'); ?></span> 
<span class="right"><?php previous_post_link('Older Posts: <strong>%link</strong>'); ?><?php wp_link_pages(); ?></span> 
</nav><!--end of right navigation-->


<!--end of navigation-->

  <?php endwhile; else: ?>

<p><?php load_theme_textdomain( $domain, $path ) ?></p>
        <?php endif; ?>
<!--end of Comment box-->

</article><!--end of blog-left-col-->

<br/>
<article class="contact-wide" >

<h2>Send your Comment</h2>

<?php comments_template(); ?>

<br/><br/>

</article>

<br/>
      		
</section><!--end of blogleftside-->
<?php get_sidebar(); ?>
</section><!--end of main content-->


<div class="clearfix"></div>
<?php get_footer(); ?> 