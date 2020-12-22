<?php
/**
 * PHP version 7.2
 *
 * Template Name: Archives
 *
 * Archives page | core/page-archives.php.
 *
 * @category   Archives_Page
 * @package    WordPress
 * @subpackage Raythompsonwebdev-com
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       https:www.raythompsonwebdev.co.uk custom template
 */

get_header(); ?>

<main id="primary" class="site-main">
<?php
	the_archive_title( '<h1 class="page-title">', '</h1>' );
	the_archive_description( '<div class="taxonomy-description">', '</div>' );
?>

<?php get_template_part( 'template-parts/content', 'archives' ); ?>

</main>
<?php get_sidebar( 'archive' ); ?>

<?php get_footer(); ?>
