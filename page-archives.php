<?php

/* Template Name: Archive Page Custom */

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
	<header class="byline">
		<div class="entry-meta">
			<?php if ( 'post' === get_post_type() ) : ?>
				<div class="meta-content">

					<?php
						raythompsonwebdev_com_posted_on();
					?>

				</div>
			<?php endif; ?>
		</div>
	</header>
	
	<div class="entry">

	<?php the_content(); ?>

	<p><strong>By Date</strong></p>
<ul>

</ul>

<p><strong>Categories:</strong></p>
<ul class="bycategories">
	<?php wp_list_categories( 'title_li=' ); ?>
</ul>
<div class="clear"></div>

<p><strong>Tags Cloud:</strong></p>
	<?php wp_tag_cloud(); ?>

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
