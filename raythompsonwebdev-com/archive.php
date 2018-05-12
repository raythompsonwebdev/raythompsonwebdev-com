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
    
    <div class="wrap">

<?php if ( have_posts() ) : ?>
    <header class="page-header">
        <?php
            the_archive_title( '<h1 class="page-title">', '</h1>' );
            the_archive_description( '<div class="taxonomy-description">', '</div>' );
        ?>
    </header><!-- .page-header -->
<?php endif; ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <?php
    if ( have_posts() ) : ?>
        <?php
        /* Start the Loop */
        get_template_part('template-parts/content', get_post_format());

    else :

        get_template_part( 'template-parts/content', 'none' );

    endif; ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>

</div><!-- .wrap -->

<?php get_footer();