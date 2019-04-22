<?php
/**
 * *PHP version 7.2.
 *
 * Category page | core/category.php.
 *
 * @category   Category_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 * @package    raythompsonwebdev-com
 */

get_header();
?>


<?php
/**
 * Check if there are any posts to display.
 */
if ( have_posts() ) :
	?>

	<h1 class="archive-title">
		Category: <?php single_cat_title( '', true ); ?>
	</h1>

	<?php
	/**
	 * Display optional category description.
	 */
	if ( category_description() ) :
		?>

		<div class="archive-meta"><?php echo category_description(); ?></div>

	<?php endif; ?>

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

					<?php
					if ( has_post_thumbnail() ) {
						?>
				<figure class="featuredImage">
					<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
						<?php the_post_thumbnail( 'featured-image' ); ?>
					</a>
				</figure>
						<?php
					} else {
						?>
				<figure class="featuredImage">
					<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
						<?php the_post_thumbnail(); ?>
					</a>
				</figure>
						<?php
					}
					?>

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

			<footer class="byline">

				<?php raythompsonwebdev_com_entry_footer(); ?>
			</footer>

		</article>

		<?php
	endwhile;

	else :
	?>

	<?php get_template_part( 'template-part/content', 'none' ); ?>

<?php endif; ?>

<!--end of Comment box-->
<div class="clearfix"></div>
<?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>
