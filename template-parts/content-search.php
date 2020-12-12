<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package    WordPress
 * @subpackage Raythompsonwebdev-com
 */

$classess = array(
	'post',
	'search-results',
)

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( $classess ); ?>>
<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

	<header class="byline">


		<?php if ( 'post' === get_post_type() ) : ?>
		<!-- .entry-meta -->
		<div class="entry-meta">

			<?php raythompsonwebdev_com_posted_by(); ?>
      <?php	raythompsonwebdev_com_posted_on(); ?>

		</div>
		<?php endif; ?>

	<!-- .entry-header -->
	</header>

	<!--featured Image-->

	<?php if ( has_post_thumbnail() ) : ?>

					<?php raythompsonwebdev_com_post_thumbnail(); ?>

					<?php else : ?>

						<a class="no-post-thumbnail" href="<?php echo esc_url( get_permalink() ); ?>" aria-hidden="true">

								<img src="<?php echo esc_url( home_url( '/' ) . 'wp-content/uploads/2020/10/nothing.jpg' ); ?>"	alt="<?php esc_attr_e( 'No image Available', 'raythompsonwebdev-com' ); ?>" rel="prefetch" />

					</a>

				<?php endif; ?>
	</a>

	<!-- .entry-summary -->
	<div class="entry">
		<?php

		if ( 'project' === get_post_type() || 'post' === get_post_type() ) :

			the_excerpt();

			else :

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
						get_the_title()
					)
				);

			endif;
			?>


	</div>

</article>

<!-- #post-<?php the_ID(); ?> -->
