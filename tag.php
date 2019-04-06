<?php
/**
 * *PHP version 5
 *
 * Tag Page | core/tag.php.
 *
 * @category   Tag_Page
 * @package    Raythompsonwebdev-com
 * @subpackage Tag_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       http:www.raythompsonwebdev.co.uk
 */
 get_header(); ?>
	   

	<?php
	// Check if there are any posts to display
	if ( have_posts() ) :
		?>

	<h1 class="archive-title">Tag: <?php single_tag_title( '', true ); ?></h1>
		<?php
		// Display optional tag description
		if ( tag_description() ) :
			?>
	<div class="archive-meta"><?php echo tag_description(); ?></div>
		<?php endif; ?>
 
		<?php
		get_template_part( 'template-parts/content', get_post_format() );

	endif;
	?>

<?php get_sidebar(); ?>


<?php get_footer(); ?>
