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

<!--Post loop start -->
<?php if ( have_posts() ) : ?>

	<?php
	while ( have_posts() ) :
		the_post();
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

							<?php
								raythompsonwebdev_com_posted_by();
							?>

					<?php endif; ?>
				</div>
			</header>

			<!--featured Image-->

				<?php if ( has_post_thumbnail() ) : ?>

					<?php raythompsonwebdev_com_post_thumbnail(); ?>

					<?php else : ?>

						<figure class="featuredImage">

								<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2020/10/nothing.jpg"
									alt="<?php esc_attr_e( 'No image Available', 'raythompsonwebdev-com' ); ?>" rel="prefetch" />

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

		<?php	endwhile;	?>

		<nav class="navigation">

			<h2 ><?php esc_html_e( 'Navigation', 'rathompsonwebdev-com' ); ?></h2>
			<div class="nav-links">

			<div class="nav-previous">
				<?php previous_post_link( '%link' ); ?>
			</div>

			<div class="nav-next">
				<?php next_post_link( '%link' ); ?>
			</div>

			</div>

		</nav>

<?php else : ?>

	<?php get_template_part( 'template-part/content', 'none' ); ?>

<?php endif; ?>
<!--Post loop end -->

