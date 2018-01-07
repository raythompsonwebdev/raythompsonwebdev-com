<?php
/**
 * *PHP version 5
 * 
 * Sidebar-Archive | core/sidebar-archive.php.
 *
 * @category   Sidebar-Archive
 * @package    Wordpress
 * @subpackage Sidebar-Archive
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
?>

<aside id="side-bar" class="group" role="complementary">

    
    <article class="side-bar-box"> 

        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Primary Sidebar')) : ?>

        <?php endif; ?>

    </article>
    
    
    <article class="side-bar-box"> 
        <h2>Link</h2> 
        

    </article>
    
    <article class="side-bar-box"> 
        <h2>Link</h2> 
        

    </article>

</aside>    
