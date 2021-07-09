<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package    WordPress
 * @subpackage Raythompsonwebdev-com
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
				raythompsonwebdev_com_posted_on();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<!--featured Image-->
	<?php if ( has_post_thumbnail() ) : ?>

		<?php raythompsonwebdev_com_post_thumbnail(); ?>

<?php else : ?>

<figure class="featured-image">

<a href="#" aria-hidden="true">

	<img src="<?php echo esc_url( home_url( '/' ) . 'wp-content/uploads/2020/10/nothing.jpg' ); ?>" alt="<?php esc_attr_e( 'No image Available', 'raythompsonwebdev-com' ); ?>" rel="prefetch" />

</a>
</figure><!-- featured-image -->
<?php endif; ?>
	<div class="entry-content">
		<?php
		the_content(
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

		<article <?php post_class( 'single-post' ); ?> id="post-<?php the_ID(); ?>">

			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="page-title" >', '</h1>' );
				else :
					the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;
				?>

			<!--Post entry Header-->
			<header class="byline">
				<div class="entry-meta">
					<?php if ( 'post' === get_post_type() ) : ?>

							<?php raythompsonwebdev_com_posted_by(); ?>
						<?php raythompsonwebdev_com_posted_on(); ?>

					<?php endif; ?>
				</div>
			</header>

			<!--featured Image-->

				<?php if ( has_post_thumbnail() ) : ?>

					<?php raythompsonwebdev_com_post_thumbnail(); ?>

					<?php else : ?>

						<figure class="featuredImage">

								<img src="<?php echo esc_url( home_url( '/' ) . 'wp-content/uploads/2020/10/nothing.jpg' ); ?>"	alt="<?php esc_attr_e( 'No image Available', 'raythompsonwebdev-com' ); ?>" rel="prefetch" />

						</figure>


				<?php endif; ?>


			<!--featured Image end-->

			<!--Post entry-->
			<div class="entry">

				<?php	the_content(); ?>



			</div>

			<!--Post entry footer-->
			<footer class="byline">

				<?php raythompsonwebdev_com_entry_footer(); ?>

				<p>
					<?php
						$lastmodified = get_the_modified_time( 'U' );
						$posted       = get_the_time( 'U' );
					if ( $lastmodified > $posted ) {
						echo 'Edited ' . esc_html( human_time_diff( get_the_time( 'U' ) ), esc_html( get_the_modified_time( 'U' ) ) ) . ' later';
					}
					?>
				</p>

			</footer>


		</article>

		<?php	endwhile; ?>

		<nav class="navigation">

			<h2 ><?php esc_html_e( 'Navigation', 'rathompsonwebdev-com' ); ?></h2>
			<div class="nav-links">

		<div class="nav-previous"><?php previous_post_link( '%link' ); ?></div>

		<div class="nav-next"><?php next_post_link( '%link' ); ?></div>

			</div>

		</nav>

<?php else : ?>

	<?php get_template_part( 'template-part/content', 'none' ); ?>

<?php endif; ?>
<!--Post loop end -->

