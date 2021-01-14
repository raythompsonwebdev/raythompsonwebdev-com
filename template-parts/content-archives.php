<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package raythompsonwebdev-com
 */

?>

<?php
while ( have_posts() ) :
	the_post();
	?>

<article class="post group <?php post_class( 'rtwd-post' ); ?>" id="post-<?php the_ID(); ?>">

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<!--Post entry Header-->

	<div class="entry">

		<h2><?php esc_html_e( 'Archives by Month:', 'raythompsonwebdev-com' ); ?></h2>

		<ul class="post-list">
		<?php wp_get_archives( 'type=monthly' ); ?>
		</ul>
			<h2><strong><?php esc_html_e( 'Categories:', 'raythompsonwebdev-com' ); ?></strong></h2>
		<ul class="post-list">
		<?php wp_list_categories( 'title_li=' ); ?>
		</ul>
		<h2><strong><?php esc_html_e( 'Tags:', 'raythompsonwebdev-com' ); ?></strong></h2>
		<?php
			$raythompsonwebdev_com_tags = get_tags();
		if ( $raythompsonwebdev_com_tags ) {
			?>
			<ul class="post-list">
			<?php
			foreach ( $raythompsonwebdev_com_tags as $raythompsonwebdev_com_tag ) {

				/* translators: %s: posts tags. */
					 echo '<li><a href="' . get_tag_link( $raythompsonwebdev_com_tag->term_id ) . '" title="' . sprintf( __( 'View all posts in %s' ), esc_html( $raythompsonwebdev_com_tag->name, 'raythompsonwebdev-com' ) ) . '" ' . '>' . esc_html( $raythompsonwebdev_com_tag->name, 'raythompsonwebdev-com' ) . '</a></li>';

			}
			?>
			</ul>

		<?php	} ?>

		<div class="clear"></div>

	</div>

	<?php if ( get_edit_post_link() ) : ?>
	<footer class="byline">
		<?php
		edit_post_link(
			sprintf(
				wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'raythompsonwebdev-com' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			),
			'<span class="edit-link">',
			'</span>'
		);
		?>
		<?php raythompsonwebdev_com_entry_footer(); ?>
	</footer>
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->

<?php endwhile; ?>
