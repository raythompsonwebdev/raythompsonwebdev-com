<?php
/**
 * *PHP version 5
 * 
 * Blog Page | core/index.php.
 * 
 * @category   Blog_Page
 * @package    Wordpress
 * @subpackage Blog_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
?>

<?php get_header(); ?>

<!--Main content -->
<section id="main-content" class="group" role="main">
   
   <h1>Interested in web design and web development&#63;</h1>
   <div class="main-text">
    <p>Whether you are just beginning to learn or are alreading building websites I would like to share  what I have learnt so far about web design and web development through the tons of valuable web development and web design related resources I have read, watched and listened to over the past few years&#46; content like</p>
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
    // Is this the first post of the front page?
    $first_post = $wp_query->current_post == 0 && !is_paged() && !is_front_page();
    /*
     * Include the Post-Format-specific template for the content.
     * If you want to override this in a child theme, then include a file
     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
     */
    if ($first_post == true) {
        get_template_part('templates/content', 'single');
    } else {
        get_template_part('templates/content', get_post_format());
    }
    ?>

    <div class="clearfix"></div>

    <!--Related Items -->
    <section class="contact-wide">
        <h1>Related Items</h1>
    </section>

    <!--Side bar -->
    <?php get_sidebar(); ?>

</section>
<!--Main content end -->

<div class="clearfix"></div>

<!--footer -->
<?php get_footer(); ?>
