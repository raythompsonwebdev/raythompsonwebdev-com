<?php
/**
 * *PHP version 5
 *
 * Sidebar archive | core/sidebar-archive.php.
 *
 * @category   Sidebar_Archive
 * @package    Raythompsonwebdev-com
 * @subpackage Sidebar_Archive
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */

?>

<aside id="side-bar" class="group" role="complementary">

<<<<<<< HEAD:sidebar-archive.php
	
	<article class="side-bar-box">
		<?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'categoree-widget-area' ) ) : ?>

		<?php endif; ?>
=======
    
    <article class="side-bar-box">
        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('categoree-widget-area')) : ?>
>>>>>>> 20b5c8fdc3270a567f582f269129836f52ef4a24:raythompsonwebdev-com/sidebar-archive.php

	</article>

<<<<<<< HEAD:sidebar-archive.php
	   
	<article class="side-bar-box">
		<?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'archives-widget-area' ) ) : ?>

		<?php endif; ?>
	</article>

	<article class="side-bar-box">

<?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'Primary Sidebar' ) ) : ?>

<?php endif; ?>

</article>
=======
    </article>

       
    <article class="side-bar-box">
        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('archives-widget-area')) : ?>

        <?php endif; ?>
    </article>
>>>>>>> 20b5c8fdc3270a567f582f269129836f52ef4a24:raythompsonwebdev-com/sidebar-archive.php

    <article class="side-bar-box">

<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Primary Sidebar')) : ?>

<?php endif; ?>

</article>

</aside>    
