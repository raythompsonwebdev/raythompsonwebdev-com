<?php
/**
 * *PHP version 7.2
 *
 * Tag Page | core/tag.php.
 *
 * @category   Tag_Page
 * @package    WordPress
 * @subpackage Raythompsonwebdev-com
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       https:www.raythompsonwebdev.co.uk
 */

	get_header(); ?>
<main id="primary" class="site-main">

	<h1 class="archive-title">Tag: <?php single_tag_title( '', true ); ?></h1>

		<!-- Display optional tag description-->
		<?php if ( tag_description() ) : ?>

				<div class="archive-meta"><?php echo tag_description(); ?></div>

			<?php endif; ?>

		<?php get_template_part( 'template-parts/content', get_post_format() ); ?>

</main>

<?php get_sidebar( 'archive' ); ?>


<?php get_footer(); ?>
