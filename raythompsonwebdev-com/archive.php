<?php
/**
 * *PHP version 5
 *
 * Archive page | core/archive.php.
 *
 * @category   Archive_Page
 * @package    Raythompsonwebdev-com
 * @subpackage Archive_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
 get_header(); ?>

<h1 class="archive-title"><?php
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
?></h1>

<?php
the_archive_description( '<div class="archive-description">', '</div>' );
?>


<?php
/* Start the Loop */

    /*
     * Include the Post-Type-specific template for the content.
     * If you want to override this in a child theme, then include a file
     * called content-___.php (where ___ is the Post Type name) and that will be used instead.
     */
    get_template_part( 'template-parts/content', get_post_type() );


the_posts_navigation();

?>

<section class="contact-wide">

    <h1><?php esc_html__('Archives', 'raythompsonwebdev-com'); ?></h1>

</section>

<?php get_sidebar('archive'); ?>

<?php get_footer(); ?>
