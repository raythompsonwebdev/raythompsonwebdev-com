<?php
/**
 * *PHP version 7
 *
 * Single Projects | core/single-projects.php.
 *
 * @category   Single_Project
 * @package    WordPress
 * @subpackage Raythompsonwebdev-com
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       https:www.raythompsonwebdev.co.uk
 */

get_header();

?>



<?php
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		?>

<article class="post group" <?php post_class(); ?> <?php the_ID(); ?> >

  <h1><?php esc_html_e( 'Web Projects', 'raythompsonwebdev-com' ); ?></h1>

  <div class="website-text">

	<div class="item item1">

	  <figure class="websiteImage">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2020/10/www-
							<?php
							$post_slug = $post->post_name;
							esc_html_e( $post_slug, 'raythompsonwebdev-com' );
							?>
		-home-page-large.jpg" class="fancybox" title="<?php the_title_attribute(); ?> Website Image">

		<?php the_post_thumbnail( 'website-image' ); ?>


		</a>
	  </figure>
	</div>

	<div class="item item2">
    <?php $project_name = get_post_meta( get_the_ID(), 'project_name', true ); ?>
    <div id="project-title">
      <h1 class="post-meta-key">
        <?php esc_html_e( 'Name', 'raythompsonwebdev-com' ); ?>
      </h1>
      <p class="websitetext"><?php esc_html_e( $project_name ); ?></p>
    </div>
    <?php $project_code = get_post_meta( get_the_ID(), 'project_code', true ); ?>
    <div id="project-code">
      <h1 class="post-meta-key">
        <?php esc_html_e( 'Code', 'raythompsonwebdev-com' ); ?>
      </h1>

      <p class="websitetext"><?php esc_html_e( $project_code ); ?></p>
    </div>
    <?php $project_url = get_post_meta( get_the_ID(), 'project_url', true ); ?>
    <div id="project-url">
        <h1 class="post-meta-key">
        <?php esc_html_e( 'URL', 'raythompsonwebdev-com' ); ?>
      </h1>
      <a class="webformats" href="<?php esc_html_e( $project_url ); ?>" target="blank" title="<?php esc_attr_e( 'See Website', 'raythompsonwebdev-com' ); ?>"><?php esc_html_e( $project_url ); ?> </a>
    </div>

    <div id="project-github">
        <h1 class="post-meta-key">
        <?php esc_html_e( 'Github', 'raythompsonwebdev-com' ); ?>
      </h1>

      <?php $url_mp = site_url( 'github.com', 'https' ); ?>

      <a class="webformats" href="<?php echo esc_url( 'https://github.com/raythompsonwebdev/', 'raythompsonwebdev-com' ); ?><?php esc_html_e( $post_slug ); ?>" title="<?php esc_attr_e( 'See github repository', 'raythompsonwebdev-com' ); ?>">See Code on Github	</a>
    </div>


	</div>

		<?php $project_description = get_post_meta( get_the_ID(), 'project_description', true ); ?>

	<div class="item item3">
	  <h1 class="post-meta-key">
			<?php esc_html_e( 'Description', 'raythompsonwebdev-com' ); ?>

	  </h1>

	  <p class="websitetext"><?php esc_html_e( $project_description ); ?></p>

	</div>


  </div>

  <footer class="byline">

  </footer>

</article><!--end of post group-->

	<?php

		endwhile;

		if ( is_singular( 'project' ) ) :

	?>

		<nav class="navigation">

			<h2 ><?php esc_html_e( 'Navigation', 'rathompsonwebdev-com' ); ?></h2>
			<div class="nav-links">

			<div class="nav-previous">
				<?php previous_post_link( '%link' ); ?>
			</div>

			<div class="nav-next">
				<?php next_post_link( '%link' ); ?>
			</div>

			</div>

		</nav>

	<?php endif; ?>

<?php endif; ?>



<?php get_footer(); ?>
