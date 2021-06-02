<?php
/**
 * *PHP version 7.4.
 *
 * Template Name :Home
 *
 * Home page | core/front-page.php.
 *
 * @category   Home_page
 * @package    WordPress
 * @subpackage Raythompsonwebdev-com
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       https:www.raythompsonwebdev.co.uk custom template
 */

get_header(); ?>

<section id="frontpage-container">

	<?php
	while ( have_posts() ) :
		the_post();

		the_content();


		endwhile; // End of the loop.
	?>

</section>

<?php get_footer(); ?>
