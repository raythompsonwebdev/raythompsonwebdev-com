<?php
/**
 * *PHP version 5
 * 
 * Tag Page | core/tag.php.
 *
 * @category   Tag_Page
 * @package    Wordpress
 * @subpackage Tag_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
?>
<?php get_header(); ?>

<section id="main-content" class="group" >
    <?php
    // Check if there are any posts to display
    if (have_posts()) :
        ?>

        <h1 class="archive-title">
            Tag: <?php single_tag_title('', true); ?>
        </h1>
        <?php
        // Display optional tag description
        if (tag_description()) :
            ?>
            <div class="archive-meta">
            <?php echo tag_description(); ?>
            </div>
        <?php endif; ?>

    <?php while (have_posts()) : the_post(); ?>

            <article class="post group"<?php post_class() ?> id="post-<?php the_ID(); ?>">

                <h1>
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                </h1>
                <header class="byline">
                    <div class="entry-meta">
                        <div class="meta-content">

        <?php popperscores_posted_on(); ?> 

                        </div>
                    </div><!-- .entry-meta -->
                </header>

                <div class="entry">

        <?php the_excerpt(); ?>

                </div>

                <footer class="byline">
                    <p class="postmetadata"><?php
                        comments_popup_link('No comments yet', '1 comment', '% comments', 'comments-link', 'Comments closed');
                        ?></p>
                </footer>

                <br/>
    <?php endwhile;
        else:
            ?>
            <?php get_template_part('templates/content', 'none'); ?>

        <?php endif; ?>
        <!--end of Comment box-->
    </article>

    <div class="clearfix"></div>

<?php get_sidebar(); ?>
</section><!--end of blogleftside-->

<?php get_footer(); ?> 
