<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package    WordPress
 * @subpackage Raythompsonwebdev-com
 * 
 */

?>

<!--Post loop start -->
<?php if ( have_posts() ) :  ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<article <?php post_class('rtwd-post'); ?> id="post-<?php the_ID(); ?>">

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
								raythompsonwebdev_com_posted_on();
							?>


					<?php endif; ?>
				</div>
			</header>

			<!--featured Image-->
		

				<?php if ( has_post_thumbnail() ) : ?>
					
					<?php raythompsonwebdev_com_post_thumbnail(); ?>

					<?php else : ?>

						<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
							
								<img src="<?php echo esc_url('https://raythompsonwebdevlocal.com/wordpress/wp-content/uploads/2020/02/placeholder-1.jpg','display');?>"
									alt="<?php esc_attr_e('No image Available','raythompsonwebdev-com');?>" rel="prefetch" />
							
					</a>
												
				<?php endif; ?>
		
			<!--featured Image end-->

			

				<div class="entry">

					<?php
						the_excerpt(
							sprintf(
								wp_kses(
									/* translators: %s: Name of current post. Only visible to screen readers */
									__( 'Continue reading<div class="continue-reading screen-reader-text"> "%s"</div >', 'raythompsonwebdev-com' ),
									array(
										'div' => array(
											'class' => array(),
										),
									)
								),
								get_the_title()
							)
						);

						wp_link_pages(
							array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'raythompsonwebdev-com' ),
								'after'  => '</div>',
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

		<?php

	endwhile;

	the_posts_navigation();

	?>
<?php else : ?>

	<?php get_template_part( 'templat-parts/content', 'none' ); ?>

<?php endif; ?>
<!--Post loop end -->
