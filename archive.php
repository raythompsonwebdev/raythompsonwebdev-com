<?php
/**
 * PHP version 7.2
 *
 * Archive page | core/archive.php.
 *
 * @category   Archive
 * @package    WordPress
 * @subpackage Raythompsonwebdev-com
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       https:www.raythompsonwebdev.co.uk custom template
 */

get_header();

	the_archive_title( '<h1 class="page-title">', '</h1>' );
	the_archive_description( '<div class="taxonomy-description">', '</div>' );

while ( have_posts() ) :
	the_post();
	?>

	<article <?php post_class( 'rtwd-post' ); ?> id="post-<?php the_ID(); ?>">

		<h1>
			<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
		</h1>

		<!--Post entry Header-->
		<header class="byline">
			<div class="entry-meta">
      <?php if ( 'post' === get_post_type() ) : ?>

				<?php	raythompsonwebdev_com_posted_by();  ?>
        <?php	raythompsonwebdev_com_posted_on();  ?>

			<?php endif; ?>
			</div>
		</header>
		<!--featured Image-->
		<a href="<?php echo esc_url( get_permalink() ); ?>" title="Permanent Link to <?php the_title_attribute(); ?>;">

	<?php if ( has_post_thumbnail() ) { ?>

		<?php raythompsonwebdev_com_post_thumbnail(); ?>

	<?php } else { ?>

	<figure class="featuredImage">
		<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
		<img src="<?php echo esc_url( home_url( '/' ) . 'wp-content/uploads/2020/10/nothing.jpg' ); ?>"
				alt="<?php esc_attr_e( 'No image Available', 'raythompsonwebdev-com' ); ?>" rel="prefetch" />
		</a>
	</figure>

		<?php
	}
	?>
</a>
<!--featured Image end-->
		<div class="entry">

      <?php the_excerpt(); ?>

		</div>

	</article>

<?php endwhile; ?>

<section class="contact-wide">

<h1><?php esc_html_e( 'Archive Menu', 'raythompsonwebdev-com' ); ?></h1>

</section>


<?php get_sidebar( 'archive' ); ?>


<?php get_footer(); ?>





