<?php
/**
 * *PHP version 7.2
 *
 * Template Name: blog
 *
 * Blog page | core/blog.php.
 *
 * @category   Blog_Page
 * @package    WordPress
 * @subpackage Raythompsonwebdev-com
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       https:www.raythompsonwebdev.co.uk custom template
 */

get_header();
?>

<h1><?php the_title(); ?></h1>
<section class="main-text">
<h1><?php esc_html_e( 'Interested in web design and web development', 'raythompsonwebdev-com' ); ?></h1>
	<p>
<?php esc_html_e( 'Whether you are just beginning to learn or are alreading building websites I would like to share  what I have learnt so far about web design and web development through the tons of valuable web development and web design related resources I have read, watched and listened to over the past few years&#46; content like', 'raythompsonwebdev-com' ); ?>
	</p>
</section>
<br/>

<?php
// Is this the first post of the front page?.

/*
 * Include the Post-Format-specific template for the content.
 * If you want to override this in a child theme, then include a file
 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
 */


	get_template_part( 'template-parts/content', get_post_format() );

?>

<div class="clearfix"></div>

<!--Related Items -->
<section class="contact-wide">
	<h1><?php esc_html_e( 'Related Items', 'raythompsonwebdev-com' ); ?></h1>
</section>

<!--Side bar -->
<?php get_sidebar(); ?>


<!--footer -->
<?php get_footer(); ?>