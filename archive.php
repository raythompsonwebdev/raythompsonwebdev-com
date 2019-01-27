<?php
/**
 * *PHP version 7.2
 *
 * Archive page | core/archive.php.
 *
 * @category   Archive_Page
 * @package    Raythompsonwebdev-com
 * @subpackage Archive_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
get_header(); ?>

<?php
	the_archive_title( '<h1 class="page-title">', '</h1>' );
	the_archive_description( '<div class="taxonomy-description">', '</div>' );
?>


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

	<?php if ( has_post_thumbnail() ) { ?>
		<figure class="featuredImage">
				<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
					<?php the_post_thumbnail( 'featured-image' ); ?>
				</a>
		</figure>
	<?php } else { ?>
		<figure class="featuredImage">
				<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
					<?php the_post_thumbnail(); ?>
				</a>
		</figure>
	<?php } ?>

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

					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html_e( 'Pages:', 'raythompsonwebdev-com' ),
							'after'  => '</div>',
						)
					);
		?>

	</div>

	<footer class="byline">
		<?php raythompsonwebdev_com_entry_footer(); ?>
	</footer>

 </article>

<?php endwhile; ?>


<section class="contact-wide">

<h1><?php esc_html_e( 'Archive Menu', 'raythompsonwebdev-com' ); ?></h1>
  
</section>


<?php get_sidebar( 'archive' ); ?> 


<?php get_footer(); ?>
