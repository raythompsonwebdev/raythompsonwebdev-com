<?php
/**
 * *PHP version 7.2
 *
 * Index page | core/index.php.
 *
 * @category   Index_Page
 * @package    WordPress
 * @subpackage Raythompsonwebdev-com
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       https:www.raythompsonwebdev.co.uk custom template.
 */

<<<<<<< HEAD
get_header(); ?>
=======
get_header();
?>



	<div id="primary" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;
>>>>>>> underscores


	<?php get_template_part( 'template-parts/content', get_post_format() ); ?>

	<div class="clearfix"></div>

	<!--Related Items -->
	<section class="contact-wide">
	<h1><?php esc_html_e( 'Related Items', 'raythompsonwebdev-com' ); ?></h1>
	</section>

<!--Side bar -->
<?php get_sidebar(); ?>


<<<<<<< HEAD
<!--footer -->
<?php get_footer(); ?>
=======
		endif;
		?>

	</div><!-- #main -->

<?php
get_sidebar();
get_footer();
>>>>>>> underscores
