<?php
/**
 * *PHP version 7.2.
 *
 * Archive List page | core/archive.php.
 *
 * @category   Archive_List
 * @package    Raythompsonwebdev-com
 * @subpackage Archive_List
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
get_header(); ?>
	
<h1>Archive List</h1>

<?php
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		?>

<article class="post group <?php post_class(); ?>" id="post-<?php the_ID(); ?>">
			
	<article class="entry">
	
		<h2><?php esc_html_e( 'Browse by Month:', 'raythompsonwebdev-com' ); ?></h2>
		
		<ul>    
		<?php
		// Arguments
				$args = array( 'type' => 'monthly' );
				// The archives
				wp_get_archives( $args );
		?>
					 
		</ul>

	</article>

	<article class="entry">

		<h2><?php esc_html_e( 'Browse by Category:', 'raythompsonwebdev-com' ); ?></h2>

		<ul>
		<?php
		// Arguments
		$default = array( 'title_li' => '' );
		// The categories
		wp_list_categories( $default );
		?>
		</ul>

	</article>

	<article class="entry">

		<h2><?php esc_html_e( 'Browse by Tag:', 'raythompsonwebdev-com' ); ?></h2>

		<ul>
			<?php
				// Arguments
				$args = array(
					'smallest' => 8,
					'largest'  => 28,
					'number'   => 0,
					'orderby'  => 'name',
					'order'    => 'ASC',
				);
				// Pass the arguments
				wp_tag_cloud( $args );

			?>
		</ul>

	</article>
			
		<?php
	endwhile;

			else :

				get_template_part( 'template-parts/content', 'none' );
				?>


	<?php endif; ?>

</article>

<section class="contact-wide">

<h1><?php esc_html_e( 'Archive Menu', 'raythompsonwebdev-com' ); ?></h1>
  
</section>


<?php get_sidebar( 'archive' ); ?> 


<?php get_footer(); ?>
