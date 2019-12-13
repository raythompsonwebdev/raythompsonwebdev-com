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
 * @package    raythompsonwebdev-com
 */

get_header();
?>


<?php
/**
 * Check if there are any posts to display.
 */
if ( have_posts() ) : ?>

	<h1 class="archive-title">
		Category: <?php single_cat_title( '', true ); ?>
	</h1>

	<?php
	/**
	 * Display optional category description.
	 */
	if ( category_description() ) :	?>

		<div class="archive-meta"><?php echo category_description(); ?></div>

		<?php endif; ?>

		<?php while ( have_posts() ) : the_post(); ?>

		<article class="post group <?php post_class(); ?>" id="post-<?php the_ID(); ?>">

			<h1>
				<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
					<?php the_title(); ?>
				</a>
			</h1>

			<!--Post entry Header-->
			<header class="byline">
				<div class="entry-meta">
					<?php if ( 'post' === get_post_type() ) : ?>
					<div class="meta-content">

						<?php raythompsonwebdev_com_posted_on(); ?>

					</div>
					<?php endif; ?>
				</div>
			</header>

			<!--featured Image-->
			<a href="<?php the_permalink(); ?>" title="Permanent Link to <?php the_title_attribute(); ?>;">

				<?php if ( has_post_thumbnail() ) : ?>

					<?php raythompsonwebdev_com_post_thumbnail(); ?>

				<?php else : ?>

					<figure class="featuredImage">
						
						<img src="<?php echo esc_url('https://site.test/wordpress/wp-content/themes/raythompsonwebdev-com/images/placeholder.jpg','display');?>" alt="<?php echo esc_attr_e('No image Available','raythompsonwebdev-com');?>" rel="prefetch" />
						
					</figure>

				<?php endif; ?>

			</a>
			<!--featured Image end-->

			<div class="entry">

				<?php	the_excerpt();	?>

			</div>

			<div class="continue-reading">
				<a href="<?= esc_url( get_permalink() ); ?>" rel="bookmark">
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
<section class="contact-wide">

	<h1><?php esc_html_e( 'Category Menu', 'raythompsonwebdev-com' ); ?></h1>
  
</section>
<!--end of Comment box-->
<div class="clearfix"></div>

<?php get_sidebar('archive'); ?>

</section>

<?php get_footer(); ?>
