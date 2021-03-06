<?php
/**
 * *PHP version 5
 *
 * Sidebar archive | core/sidebar-archive.php.
 *
 * @category   Sidebar_Archive
 * @package    WordPress
 * @subpackage Raythompsonwebdev-com
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       https:www.raythompsonwebdev.co.uk custom template
 */

?>

<aside id="side-bar" class="group" role="complementary">

	
	<article class="side-bar-box">
		<?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'categoree-widget-area' ) ) : ?>

		<?php endif; ?>

	</article>

	   
	<article class="side-bar-box">
		<?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'archives-widget-area' ) ) : ?>

		<?php endif; ?>
	</article>

	<article class="side-bar-box">

		<?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'media-widget-area' ) ) : ?>

		<?php endif; ?>

	</article>

  

</aside>    
