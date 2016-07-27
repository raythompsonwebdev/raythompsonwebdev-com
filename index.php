<?php get_header(); ?>

<section id="main-content" class="group" role="main">
<h1>Blog Page</h1>
<section id="blogleftside"> 
	
<article id="blog" class="left-col">

<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
 				

<article class="post group <?php post_class() ?>" id="post-<?php the_ID(); ?>">

<h1 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>

<header class="byline"> 
Date: <?php the_date('jS F Y') ?> at <?php the_time('g:i a'); ?> <br />
Written by <?php the_author() ?> </header>



<a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute()?>";>
<figure class="featuredImage"><?php the_post_thumbnail('featured-image');?></figure>
</a>

<section class="newsExcerpt"><?php the_excerpt();?></section>

<br/>

<footer class="byline">
Posted in <?php the_category(', ') ?> | <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>

<p class='right'>
<a class='comments-count' href='<?php the_permalink() ?>'><?php comments_number('0', '1', '%') ?></a>
</p>

<br/>
<p><?php $lastmodified = get_the_modified_time('U'); $posted = get_the_time('U');
			if ($lastmodified > $posted) {
			echo "Edited " . human_time_diff(get_the_time('U'),	get_the_modified_time('U')) . " later";
			}?>
</p>

</footer>
</article>
<?php endwhile; ?>
<?php else: ?>

<h1>No posts to show</h1>
<p>Sorry, we got nada. Nothing. Bupkis. Zippo. Diddly-squat. Sorry to disappoint.</p>
<?php endif; ?>	

</article>
<div class="clearfix"></div>
<article class="contact-wide">
<h2>Related Items</h2> 		
</article>

</section>
<?php get_sidebar(); ?> 

</section>


<div class="clearfix"></div>
<?php get_footer(); ?>