<?php get_header(); ?>




<h1>Web development&#63;</h1>
<article class="main-text">

</article>
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


<!--footer -->
<?php get_footer(); ?>
