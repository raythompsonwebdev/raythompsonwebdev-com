<?php
/**
 * *PHP version 5
 *
 * Index page | core/index.php.
 *
 * @category   Index_Page
 * @package    Raythompsonwebdev-com
 * @subpackage Index_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
get_header(); ?>

<?php
if ( is_home() && ! is_front_page() ) : ?>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>

			<?php
			endif;
?>

<div class="main-text">

</div>
<br/>

<!--search form -->
<?php if (is_home() || is_archive()) : ?>
<span class="social-1"><?php get_search_form(true); ?></span>
<?php else : ?>
<span class="social-1"></span>
<?php endif; ?>


<br/><br/>


<?php

    /*
     * Include the Post-Type-specific template for the content.
     * If you want to override this in a child theme, then include a file
     * called content-___.php (where ___ is the Post Type name) and that will be used instead.
     */
    get_template_part( 'template-parts/content', get_post_type() );
?>


<div class="clearfix"></div>

<!--Related Items -->
<section class="contact-wide">
<h1>Related Items</h1>
</section>

<!--Side bar -->
<?php get_sidebar(); ?>


<!--footer -->
<?php get_footer(); ?>
