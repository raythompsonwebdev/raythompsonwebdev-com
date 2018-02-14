<?php
/**
 * *PHP version 5
 * 
<<<<<<< HEAD:single-gallery.php
 * Single-Gallery page | core/single-gallery.php.
 *
 * @category   Single-Galleryy_Page
 * @package    Wordpress
 * @subpackage Single-Gallery_Page
=======
 * Single-Website Page | core/single-website.php.
 *
 * @category   Custom_Post
 * @package    Wordpress
 * @subpackage Custom_Post
>>>>>>> 06bb6834ff1bdf6bc417acbbb75f423890046b84:single-website.php
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
<<<<<<< HEAD:single-gallery.php
=======

get_header();
$term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
>>>>>>> 06bb6834ff1bdf6bc417acbbb75f423890046b84:single-website.php
?>
<?php get_header(); ?>

<?php 
$term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
?>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article class="post group" <?php post_class(); ?> <?php the_ID(); ?> >

        <h1><?php the_title(); ?></h1>

            <figure class="websiteImage">
              <a href="<?php echo home_url();?>/wp-content/uploads/2018/02/www-<?php global $post; $post_slug=$post->post_name; echo $post_slug; ?>-home-page-large.jpg" class="fancybox" title="">
                <?php the_post_thumbnail('websites'); ?>
                </a>
            </figure>

    <div class="website-text">
        <?php the_meta(); ?>
        <div class="links">
        <p class="formats">
            <span>Website Formats</span>
            <span>
                <a href="#" title="Desktop">
                    <i class="fa fa-desktop" title="Desktop"></i>
                </a>
            </span>
            <span>
                <a href="#" title="Tablet">
                    <i class="fa fa-tablet" title="Tablet"></i>
                </a>
            </span>
            <span>
                <a href="#" title="Mobile">
                    <i class="fa fa-mobile"></i>
                </a>
            </span> 
        </p>
       </div>
    </div>
        <footer class="byline">
            <p class='right'>
                <a class='comments-count' href='<?php the_permalink() ?>'><?php comments_number('0', '1', '%') ?></a>
            </p>
        </footer>

    </article><!--end of post group-->

        <!--navigation-->

        <nav class="navi">
            <span class="right"> 
            </span>
        </nav><!--end of right navigation-->
        <!--end of navigation-->
    <?php
        endwhile;
    else:
        ?>

        <p><?php load_theme_textdomain('raythompsonwebdev-com', get_template_directory() . '/languages'); ?></p>

    <?php endif; ?>

    <section class='contact-wide'>
        <h1>Send your Comments</h1>
        <?php
        /**
         *  If comments are open or we have at least one comment, load up the comment template.
         */
        if (comments_open() || get_comments_number() ) :
                comments_template();
        endif;
?>

    </section>


<?php get_sidebar(); ?>



<?php get_footer(); ?>
