<?php
/**
 * *PHP version 7.2.
 *
 * 404 page | core/404.php.
 *
 * @category   Error_Page
 * @package    WordPress
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3 *
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       https:www.raythompsonwebdev.co.uk custom template
 * 
 */

get_header(); ?>

<section class="main-text">
	<h1><?php esc_html_e( '404: Page not Found!?', 'raythompsonwebdev-com' ); ?></h1>

	<h2>
	<?php esc_html_e( 'Just move along back to the', 'raythompsonwebdev-com' ); ?>
		<a href="<?= esc_url( home_url( '/' ) ); ?>">
			<span style="color:#fff;">Homepage</span>
		</a>.
	</h2>

</section>

<?php get_footer(); ?>
