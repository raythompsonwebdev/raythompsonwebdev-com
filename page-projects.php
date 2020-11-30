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
<section class="main-text">

<p><?php esc_html_e( 'Check out websites and web applications I am currently adding improvements to.', 'raythompsonwebdev-com' ); ?></p>
</section>


<!--PhotoContainer -->
<div id="showcaseContainer" >

	<div class="content">

		<br/>

		<!-- Panel Container Starts Here -->
		<?php
			$args = array(
				'post_type'      => 'project',
				'posts_per_page' => 10,
			);
			$loop = new WP_Query( $args );
			if ( have_posts() ) :
				while ( $loop->have_posts() ) :
					$loop->the_post();

					?>
			<!-- display slugs for custom post categories.-->
			<div id="panel" class="prod-cnt
					<?php
            $customterms = get_the_terms( $post->ID, 'project-category' );

					foreach ( $customterms as $customterm ) {
						$pic = $customterm->slug . ' ';
						echo esc_html( $pic );
					}
					?>
			"<?php post_class(); ?>--<?php the_ID(); ?> >

				<figure class="showcase-container " id="showcaseimg1">
					<div class="showcase-img">
						<?php the_post_thumbnail( 'websites' ); ?>
					</div>
					<figcaption class="showcase-content showcase">
						<h1> <?php the_title(); ?></h1>

							<a href="<?php the_permalink(); ?>">
								<?php esc_html_e( 'See More..', 'raythompsonwebdev-com' ); ?>
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

	<div class="clearfix"></div>

</div>

<div class="clearfix"></div>



<?php get_footer(); ?>
