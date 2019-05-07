<?php

/* Template Name: Archives */

get_header(); ?>

<?php
	the_archive_title( '<h1 class="page-title">', '</h1>' );
	the_archive_description( '<div class="taxonomy-description">', '</div>' );
?>

<?php
	while ( have_posts() ) :
	the_post();
?>

<article class="post group <?php post_class(); ?>" id="post-<?php the_ID(); ?>">

	<h1>
		<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
	</h1>

	<!--Post entry Header-->
		
	<div class="entry">
	
	<h2>Archives by Month:</h2>
		<ul class="post-list">
			<?php wp_get_archives('type=monthly'); ?>
		</ul>
			<h2><strong>Categories:</strong></h2>
		<ul class="post-list">
			<?php wp_list_categories( 'title_li=' ); ?>
		</ul>
		<div class="clear"></div>

		<h2><strong>Tags Cloud:</strong></h2>
		<?php wp_tag_cloud('smallest=10&largest=24unit=px&orderby=count&order=RAND'); ?>

	</div>

	<footer class="byline">
		<?php raythompsonwebdev_com_entry_footer(); ?>
	</footer>

</article>

<?php endwhile; ?>

<section class="contact-wide">

	<h1><?php esc_html_e( 'Archive Menu', 'raythompsonwebdev-com' ); ?></h1>
  
</section>

<?php get_sidebar( 'archive' ); ?> 

<?php get_footer(); ?>
