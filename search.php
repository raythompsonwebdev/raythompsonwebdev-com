<?php
/**
 * *PHP version 5
 *
 * Search page | core/search.php.
 *
 * @category   Search_Page
 * @package    Raythompsonwebdev-com
 * @subpackage Search_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */

 get_header(); ?>

<?php
if ( have_posts() ) :
	?>

			<header class="byline">
				<h1 class="page-title">
				<?php
				/* translators: %s: search query. */
				printf( esc_html__( 'Search Results for: %s', 'raythompsonwebdev-com' ), '<span>' . get_search_query() . '</span>' );
				?>
				</h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

<br/>



<?php get_sidebar(); ?>



<?php get_footer(); ?>
