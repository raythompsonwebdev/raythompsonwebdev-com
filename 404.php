<?php
/**
 * *PHP version 5.6
 * 
 * 404 page | core/404.php.
 *
 * @category   Error_Page
 * @package    Wordpress
 * @subpackage Error_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
?>

<?php get_header(); ?>

<section id="main-content" class="group" role="main">


<section id="blogleftside">


<h1>404: Page not Found!?</h1>

<h2>Just move along back to the <a href="<?php echo home_url();?>"><span style="color:#fff;">Homepage</span></a>.</h2>


</section>
<?php get_sidebar(); ?>

</section>

<?php get_footer(); ?>
