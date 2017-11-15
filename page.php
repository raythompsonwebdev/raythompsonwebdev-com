
<?php get_header(); ?>

<section id="main-content" class="group" role="main">

    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();

            get_template_part('templates/content', 'page');

        endwhile;

    else :
        echo '<p>No content found</p>';

    endif;
    ?>

</section>

<div class="clearfix"></div>
<?php get_footer(); ?>
