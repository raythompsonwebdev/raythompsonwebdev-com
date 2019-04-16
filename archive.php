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
	
	<div class="entry">

	<?php the_content(); ?>

	
	</div>

	

 </article>

<?php endwhile; ?>


<section class="contact-wide">

<h1><?php esc_html_e( 'Archive Menu', 'raythompsonwebdev-com' ); ?></h1>
  
</section>


<?php get_sidebar( 'archive' ); ?> 


<?php get_footer(); ?>
