<?php
/**
 * *PHP version 5
 * 
 * Archive | core/archive.php.
 * 
 * @category   Archive
 * @package    Wordpress
 * @subpackage Archive_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
?>
<?php get_header(); ?>

<<<<<<< HEAD
=======
<section id="main-content" class="group" role="main">
    <h1 class="archive-title">
    <?php
    if (is_category() ) {
        single_cat_title();
    } elseif (is_tag() ) {
        single_tag_title();
    } elseif (is_author() ) {
        the_post();
        echo 'Author Archives: ' . get_the_author();
        rewind_posts();
    } elseif (is_day() ) {
        echo 'Daily Archives: ' . get_the_date();
    } elseif (is_month() ) {
        echo 'Monthly Archives: ' . get_the_date('F Y');
    } elseif (is_year() ) {
        echo 'Yearly Archives: ' . get_the_date('Y');
    } else {
        _e('Browsing the Archive', 'raythompsonwebdev-com');
    }
                ?>

    </h1>
>>>>>>> 06bb6834ff1bdf6bc417acbbb75f423890046b84

<h1 class="archive-title">
    <?php
    if (is_category()) {
        single_cat_title();
    } elseif (is_tag()) {
        single_tag_title();
    } elseif (is_author()) {
        the_post();
        echo 'Author Archives: ' . get_the_author();
        rewind_posts();
    } elseif (is_day()) {
        echo 'Daily Archives: ' . get_the_date();
    } elseif (is_month()) {
        echo 'Monthly Archives: ' . get_the_date('F Y');
    } elseif (is_year()) {
        echo 'Yearly Archives: ' . get_the_date('Y');
    } else {
        _e('Browsing the Archive', 'raythompsonwebdev-com');
    }
    ?>

<<<<<<< HEAD
</h1>

<?php
the_archive_title('<h2 class="page-title">', '</h2>');
?>

<?php
                    /*
                     * Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
    get_template_part( 'templates/content', get_post_format() );
                 
?>


    <p>
<?php load_theme_textdomain('raythompsonwebdev-com', get_template_directory() . '/languages') ?>
    </p>

</article>


<section class="contact-wide">

    <h1>Related Archives</h1>

</section>
=======
    <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

    <article class="post group <?php post_class() ?>" id="post-<?php the_ID(); ?>">

        <article class="entry">

        <h2>
            <?php _e('Browse by Month:', 'raythompsonwebdev-com');?>
        </h2>

        <ul><?php // Arguments
                $args = array(
                    'type' => 'monthly'
                );
                // The archives
                wp_get_archives($args);
            ?> 
        </ul>

        </article>

        <article class="entry">

            <h2><?php _e('Browse by Category:', 'raythompsonwebdev-com');?></h2>

            <ul><?php // Arguments
                    $default = array(
                        'title_li' => ''
                    );
                    // The categories
                    wp_list_categories($default);
                ?>
            </ul>

        </article>

        <article class="entry">

            <h2><?php _e('Browse by Tag:', 'raythompsonwebdev-com');?></h2>

            <ul><?php wp_tag_cloud('smallest=8&largest=28&number=0&orderby=name&order=ASC'); ?>
            </ul>

        </article>

        <!--<article class="entry">

        <h2><?php _e('Browse by Page', 'raythompsonwebdev-com');?></h2>
        <ul><?php wp_list_pages('title_li='); ?></ul>

        </article>-->

    <?php endwhile; else: ?>

        <p><?php load_theme_textdomain('raythompsonwebdev-com', get_template_directory() . '/languages') ?></p>

    <?php endif; ?>
        
    </article>


    <section class="contact-wide">

        <h1>Archives</h1>

    </section>
>>>>>>> 06bb6834ff1bdf6bc417acbbb75f423890046b84


<?php get_sidebar('archive'); ?>



<?php get_footer(); ?>
