<?php
/**
 * Template part for displaying pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package 
 */
?>


<article class="post post-gallery">
	
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

	<?php the_content(); ?>
	
</article>


