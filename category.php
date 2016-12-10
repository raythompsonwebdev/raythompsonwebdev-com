
<?php get_header(); ?>

   	
<section id="main-content" class="group" >
  <?php 
// Check if there are any posts to display
if ( have_posts() ) : ?>

<h1 class="archive-title">Category: <?php single_cat_title( '', true ); ?></h1>
<?php
// Display optional category description
 if ( category_description() ) : ?>
<div class="archive-meta"><?php echo category_description(); ?></div>
<?php endif; ?>
	   

<?php while ( have_posts() ) : the_post(); ?>

<article class="post group"<?php post_class() ?> id="post-<?php the_ID(); ?>">

<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
<header class="byline">

	<span class="bylineauthor"><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></span>

</header>

<article class="entry group">

<?php the_excerpt(); ?>

 <p class="postmetadata"><?php
  comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'Comments closed');
?></p>
</article>

<br/>
<?php endwhile; 
else: ?>
<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>
<!--end of Comment box-->
</article>

<?php get_sidebar(); ?>
</section>

<div class="clearfix"></div>
<?php get_footer(); ?> 