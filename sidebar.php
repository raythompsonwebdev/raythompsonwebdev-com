<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package raythompsonwebdev-com
 */

?>


<!-- #secondary -->

<aside id="side-bar" class="group widget-area" role="complementary">
	<h1>Post Categrories</h1>



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
