
<?php get_header(); ?>

<section id="main-content" class="group" role="main">


    <?php
         if (get_post_format() == false) {
           get_template_part('templates/content', 'single');
         } else {
           get_template_part('templates/content', get_post_format());
         } ?>


    <section class='contact-wide'>

        <h1>Send your Comments</h2>

        <?php
        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
                comments_template();
        endif;
?>

    </section>


<?php get_sidebar(); ?>

</section><!--end of main content-->

<div class="clearfix"></div>

<?php get_footer(); ?>
