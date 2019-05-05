<?php
/**
 * PHP version 7.2
 *
 * Archive page | core/archive.php.
 *
 * @category   Archive
 * @package    Raythompsonwebdev-com
 * @subpackage Archive
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */

get_header(); 

	the_archive_title( '<h1 class="page-title">', '</h1>' );
	the_archive_description( '<div class="taxonomy-description">', '</div>' );

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
		<!--featured Image-->
		<a href="<?php the_permalink(); ?>" title="Permanent Link to <?php the_title_attribute(); ?>;">

<?php if ( has_post_thumbnail() ) { ?>

	<?php raythompsonwebdev_com_post_thumbnail(); ?>

<?php } else { ?>

	<figure class="featuredImage">
		<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
		<img src="<?php echo esc_url('https://raythompsonwebdev.co.uk/wp-content/themes/raythompsonwebdev-com/images/placeholder.jpg','display');?>" alt="<?php echo esc_attr_e('No image Available','raythompsonwebdev-com');?>" rel="prefetch" />
		</a>
	</figure>

	<?php
}
?>
</a>
<!--featured Image end-->
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

		

	</article>

<?php endwhile; ?>

<section class="contact-wide">

<h1><?php esc_html_e( 'Archive Menu', 'raythompsonwebdev-com' ); ?></h1>
  
</section>


<?php get_sidebar( 'archive' ); ?> 


<?php get_footer(); ?>
