<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package raythompsonwebdev-com
 */

?>

<article class="post group" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="byline">

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			

				<?php
					raythompsonwebdev_com_posted_by();
				?>

		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

		<!--featured Image-->
		<a href="<?php the_permalink(); ?>" title="Permanent Link to <?php the_title_attribute(); ?>;">

			<?php if ( has_post_thumbnail() ) { ?>
					<figure class="featuredImageSearch">
							<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
									<?php the_post_thumbnail( ); ?>
							</a>
					</figure>
			<?php } else { ?>
					
			<?php raythompsonwebdev_com_post_thumbnail(); ?>
			
			<?php } ?>
		</a>

			<!-- .entry-summary -->	
			<div class="entry">
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
						get_the_title()
					)
				);
				?>


			</div>

		<div class="continue-reading">
				<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
						<?php
						printf(
							/* Translators: %s = Name of the current post. */
										wp_kses( __( 'Continue reading %s', 'raythompsonwebdev-com' ), array( 'span' => array( 'class' => array() ) ) ), the_title( '<span class="screen-reader-text">"', '"</span>', false )
						);
						?>
				</a>
		</div>

	<!-- .entry-footer -->					
	<footer class="byline">
		<?php raythompsonwebdev_com_entry_footer(); ?>
	</footer>

</article>

<!-- #post-<?php the_ID(); ?> -->


