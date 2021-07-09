<?php
/**
 * *PHP version 5
 *
 * Sidebar | core/sidebar.php.
 *
 * @category   Sidebar
 * @package    WordPress
 * @subpackage Raythompsonwebdev-com
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       https:www.raythompsonwebdev.co.uk custom template
 */

?>


<!-- #secondary -->

<aside id="side-bar" class="group widget-area" role="complementary">
	<h1>Side Menu</h1>



	<article class="side-bar-box">
		<?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'categoree-widget-area' ) ) : ?>

		<?php endif; ?>

	</article>


	<article class="side-bar-box">

		<?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'Primary Sidebar' ) ) : ?>

		<?php endif; ?>

	</article>

	<article class="side-bar-box">
		<?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'archives-widget-area' ) ) : ?>

		<?php endif; ?>
	</article>

</aside>
