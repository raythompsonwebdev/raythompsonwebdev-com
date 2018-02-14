
<?php get_header(); ?>


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


<?php get_sidebar('archive'); ?>



<?php get_footer(); ?>
