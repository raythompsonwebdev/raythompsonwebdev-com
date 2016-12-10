<?php get_header(); ?>

<section id="main-content" class="group">  
	
	<?php if ( have_posts() ) : ?>

<h1 id="pageTitle">Here's what we've found:</h1>


<?php while ( have_posts() ) : the_post(); ?>


<article class="post group" <?php post_class() ?> id="post-<?php the_ID(); ?>">

<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>

<figure class="thumb"><?php the_post_thumbnail('thumb'); ?></figure>
<?php $query = new WP_Query( array ( 'post_type' => 'post', 'post_
count' => '5' ) );

while ( $query->have_posts() ) : $query->the_post(); ?>

<?php endwhile; ?>

<article class="entry"><?php the_excerpt(); ?></article>


</article>

<?php endwhile; ?>

<?php else : ?>

<h2 class="center">Not Found</h2>
<p class="center">Sorry, but you are looking for something
that isn't here.</p>
<?php get_search_form(); ?>
<?php endif; ?>

<br/>



<?php get_sidebar(); ?>
</section>
          




<?php get_footer(); ?>