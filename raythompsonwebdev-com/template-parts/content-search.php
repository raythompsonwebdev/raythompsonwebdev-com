<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package raythompsonwebdev-com
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="byline">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
            
            <div class="meta-content">
                <?php
                    raythompsonwebdev_com_posted_on();
                    raythompsonwebdev_com_posted_by();
                ?>
            </div>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php raythompsonwebdev_com_post_thumbnail(); ?>

	<div class="entry">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="byline">
		<?php raythompsonwebdev_com_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->


