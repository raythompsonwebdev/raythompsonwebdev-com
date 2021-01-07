<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package raythompsonwebdev-com
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'rtwd-post' ); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				raythompsonwebdev_com_index_posted_on();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if ( has_post_thumbnail() ) : ?>

<?php raythompsonwebdev_com_post_thumbnail(); ?>

<?php else : ?>

<figure class="post-thumbnail">

<a href="#" aria-hidden="true">

	<img src="<?php echo esc_url( home_url( '/' ) . 'wp-content/uploads/2020/10/nothing.jpg' ); ?>" alt="<?php esc_attr_e( 'No image Available', 'clashvibes' ); ?>" rel="prefetch" />

</a>
</figure><!-- featured-image -->
<?php endif;?>

	<div class="entry-content">
		<?php
		the_excerpt(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'raythompsonwebdev-com' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'raythompsonwebdev-com' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php raythompsonwebdev_com_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
