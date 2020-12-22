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
 * @link       https:www.raythompsonwebdev.co.uk custom template
 * @package    WordPress
 * @subpackage Raythompsonwebdev-com
 */

get_header();
?>

<main id="primary" class="site-main">
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

	<article <?php post_class( 'rtwd-post' ); ?> id="post-<?php the_ID(); ?>">

			<?php
			if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					endif;
				?>

				<header class="entry-header">
				<?php

				if ( 'post' === get_post_type() ) :
					?>
						<div class="entry-meta">
						<?php	raythompsonwebdev_com_posted_on(); ?>
						</div><!-- .entry-meta -->
					<?php endif; ?>
				</header><!-- .entry-header -->

				<!--featured Image-->

					<?php if ( has_post_thumbnail() ) : ?>

						<?php raythompsonwebdev_com_post_thumbnail(); ?>

					<?php else : ?>

						<figure class="featuredImage">

						<img src="<?php echo esc_url( home_url( '/' ) . 'wp-content/uploads/2020/10/nothing.jpg' ); ?>"	alt="<?php esc_attr_e( 'No image Available', 'raythompsonwebdev-com' ); ?>" rel="prefetch" />
						</figure>

					<?php endif; ?>

				<!--featured Image end-->

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
				</footer>

	</article><!-- #post-<?php the_ID(); ?> -->

		<?php
		endwhile;
		else :
			?>

			<?php get_template_part( 'template-part/content', 'none' ); ?>

	<?php endif; ?>

	<section class="contact-wide">

		<h1><?php esc_html_e( 'Category Menu', 'raythompsonwebdev-com' ); ?></h1>

	</section>
	<!--end of Comment box-->

</main>

<?php get_sidebar( 'archive' ); ?>

<?php get_footer(); ?>
