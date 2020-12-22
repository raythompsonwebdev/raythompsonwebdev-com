<?php
/**
 * *PHP version 7.2.
 *
 * Template Name: Projects
 *
 * Archive Gallery | core/page-projects.php.
 *
 * @category   Page_Projects
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       https:www.raythompsonwebdev.co.uk
 * @package    WordPress
 * @subpackage Raythompsonwebdev-com
 */

get_header();
?>

<h1><?php the_title(); ?></h1>
<article class="main-text">

<p><?php esc_html_e( 'Check out websites and web applications I am currently adding improvements to.', 'raythompsonwebdev-com' ); ?></p>
</article>


<!--PhotoContainer -->
<main id="showcaseContainer" >

	<div class="content">

		<br/>

		<!-- Panel Container Starts Here -->
		<?php
			$raythompsonwebdev_com_args = array(
				'post_type'      => 'project',
				'posts_per_page' => 10,
			);
			$raythompsonwebdev_com_loop = new WP_Query( $raythompsonwebdev_com_args );
			if ( have_posts() ) :
				while ( $raythompsonwebdev_com_loop->have_posts() ) :
					$raythompsonwebdev_com_loop->the_post();

					?>
			<!-- display slugs for custom post categories.-->
			<div id="panel" class="prod-cnt-
					<?php
					$raythompsonwebdev_com_customterms = get_the_terms( $post->ID, 'project-category' );
					foreach ( $raythompsonwebdev_com_customterms as $raythompsonwebdev_com_customterm ) {
						$raythompsonwebdev_com_pic = $raythompsonwebdev_com_customterm->slug . ' ';
						printf( '%s', esc_html( $raythompsonwebdev_com_pic ), 'raythompsonwebdev-com' );}
					?>
					<?php printf( '%s', esc_html( $raythompsonwebdev_com_project_name ), 'raythompsonwebdev-com' ); ?>"<?php post_class(); ?>--<?php the_ID(); ?> >

				<figure class="showcase-container " id="showcaseimg1">
					<div class="showcase-img">
						<?php the_post_thumbnail( 'projectpage-image' ); ?>
					</div>
					<figcaption class="showcase-content showcase">
						<h1> <?php the_title(); ?></h1>

							<a href="<?php echo esc_url( get_permalink() ); ?>">
								<?php esc_html_e( 'See Project..', 'raythompsonwebdev-com' ); ?>
							</a>

					</figcaption>

				</figure>

			</div>
			<!-- Panel Container Ends Here -->
				<?php	endwhile; ?>

			<?php	endif; ?>

			<?php wp_reset_postdata(); ?>

		<div class="clearfix"></div>

	</div><!-- End of Content -->

</main>


<?php get_footer(); ?>
