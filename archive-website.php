<?php
/**
 * *PHP version 5
 * 
 * Archive-website Page | core/archive-website.php.
 * 
 * @category   Archive-Website
 * @package    Wordpress
 * @subpackage Archive-website_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
?>
<?php
/**
 * Locations taxonomy archive
 */
get_header();
$term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
?>
websites
<section id="main-content" class="group" role="main">

    <?php if (have_posts()) : ?>
    
        <?php while (have_posts()) : the_post(); ?>

            <article class="post group <?php post_class() ?>" id="post-<?php the_ID(); ?>">

                <h1 class="archive-title">
                    <?php echo apply_filters('the_title', $term->name); ?>
                </h1>


                <?php if (!empty($term->description)) : ?>
                    <div class="archive-description">
                        <?php echo esc_html($term->description); ?>
                    </div>
                <?php endif; ?>
                <header class="byline">
                    <br/>
                    <div class="entry-meta">
                        <?php popperscores_posted_on(); ?>
                    </div><!-- .entry-meta -->
                </header>

                <figure class="websiteImage">
                    <?php the_post_thumbnail('websites'); ?>
                </figure>

                <div class="website-text">
                    <?php the_meta(); ?>
                    <div class="links">
                        <p class="formats">          
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

        <?php endwhile; ?>
        <?php else: ?>

            <?php get_template_part('templates/content', 'none'); ?>

        <?php endif; ?>

        <p><?php load_theme_textdomain('raythompsonwebdev-com', get_template_directory() . '/languages'); ?></p>
    </article>

    <section class="contact-wide">

        <h1>Archives</h1>

    </section>


    <?php get_sidebar('archive'); ?>


</section>

<?php get_footer(); ?>
