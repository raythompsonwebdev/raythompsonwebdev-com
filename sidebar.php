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
	<h1>Banner</h1>

<?php
if ( ! is_active_sidebar( 'categoree-widget-area' ) ) {
	return; }
?>

	<article class="side-bar-box">
		<?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'categoree-widget-area' ) ) : ?>

		<?php endif; ?>

	</article>

	<article class="side-bar-box">
	<?php
	if ( ! is_active_sidebar( 'Primary Sidebar' ) ) {
		return; }
	?>

		<?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'Primary Sidebar' ) ) : ?>

		<?php endif; ?>

	</article>

	<article class="side-bar-box">

	<?php
	if ( ! is_active_sidebar( 'archives-widget-area' ) ) {
		return; }
	?>

		<?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'archives-widget-area' ) ) : ?>

		<?php endif; ?>
	</article>

</aside>
