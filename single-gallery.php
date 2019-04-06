<?php
/**
 * *PHP version 5
 *
 * Single Gallery | core/single-gallery.php.
 *
 * @category   Single_Gallery
 * @package    Raythompsonwebdev-com
 * @subpackage Single_Gallery
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       http:www.raythompsonwebdev.co.uk
 */

get_header();

$customterm = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
?>

		<?php
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				?>

	<article class="post group" <?php post_class(); ?> <?php the_ID(); ?> >

		<h1><?php echo esc_html('Website/Web Applications', 'raythompsonwebdev-com');?></h1>

			<figure class="websiteImage">
<<<<<<< HEAD
			  <a href="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2018/07/www-
					<?php
					global $post;
					$post_slug = $post->post_name;
					echo esc_html( $post_slug, 'raythompsonwebdev-com' );
					?>
				-home-page-large.jpg" class="fancybox" title="<?php the_title_attribute(); ?> Website Image">
=======
			  <a href="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2019/02/www-<?php global $post;	$post_slug = $post->post_name;	echo esc_html( $post_slug, 'raythompsonwebdev-com' );?>-home-page-large.jpg" class="fancybox" title="<?php the_title_attribute(); ?> Website Image">
>>>>>>> 7d14e557dc52072d48c36d64d3e1fffd5676664f
					<?php the_post_thumbnail( 'websites' ); ?>
				</a>
			</figure>

<div class="website-text">

				<?php $prjct_name = get_post_meta( get_the_ID(), 'project_name', true ); ?>

	<h1 class="post-meta-key">
				<?php esc_html_e( 'Name', 'raythompsonwebdev-com' ); ?>
	</h1>

	<p class="websitetext"><?php echo esc_html( $prjct_name ); ?></p>


				<?php $prjct_descrp = get_post_meta( get_the_ID(), 'project_description', true ); ?>

	<h1 class="post-meta-key">
				<?php esc_html_e( 'Description', 'raythompsonwebdev-com' ); ?>
	</h1>

	<p class="websitetext"><?php echo esc_html( $prjct_descrp ); ?></p>


				<?php $prjct_code = get_post_meta( get_the_ID(), 'project_code', true ); ?>

	<h1 class="post-meta-key">
				<?php esc_html_e( 'Code', 'raythompsonwebdev-com' ); ?>
	</h1>

	<p class="websitetext"><?php echo esc_html( $prjct_code ); ?></p>


				<?php $prjct_url = get_post_meta( get_the_ID(), 'project_url', true ); ?>

	<h1 class="post-meta-key">
				<?php esc_html_e( 'URL', 'raythompsonwebdev-com' ); ?>
	</h1>


	<a class="webformats" href="<?php echo esc_html( $prjct_url ); ?>"><?php echo esc_html( $prjct_url ); ?></a>

	<h1 class="post-meta-key">
				<?php esc_html_e( 'Github', 'raythompsonwebdev-com' ); ?>
	</h1>

				<?php $urlmp = site_url( 'github.com', 'https' ); ?>

			<a class="webformats" href="<?php echo esc_url( 'https://github.com/raythompsonwebdev/' ); ?><?php echo esc_html( $post_slug, 'raythompsonwebdev-com' ); ?>" title="<?php echo esc_attr_e( 'See Code on Github', 'raythompsonwebdev-com' ); ?>">See Code on Github	</a>
	




</div>
		<footer class="byline">
					
		</footer>

	</article><!--end of post group-->

				<?php
		endwhile;

			if ( is_singular( 'gallery' ) ) {
				?>

			<nav class="navigation">
				<h2 ><?php echo esc_html( 'Navigation', 'rathompsonwebdev-com' ); ?></h2>
				<div class="nav-links">

				<div class="nav-previous">
						<?php previous_post_link( '%link' ); ?>
				</div>

				<div class="nav-next">
						<?php next_post_link( '%link' ); ?>
				</div>
				
				</div>
			
		</nav>
			<?php } ?>

	<?php endif; ?>



<?php get_footer(); ?>
