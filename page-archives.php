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

<?php get_template_part( 'template-parts/content', 'archives' ); ?>

<section class="contact-wide">

	<h1><?php esc_html_e( 'Archive Menu', 'raythompsonwebdev-com' ); ?></h1>

</section>

<?php get_sidebar( 'archive' ); ?>

<?php get_footer(); ?>
