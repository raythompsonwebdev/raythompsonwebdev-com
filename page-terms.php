<?php
/*
Template Name: Terms
*/
?>

<?php get_header(); ?>



  <h1><?php the_title(); ?></h1>

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post();

        get_template_part('templates/content', 'page');?>

    <?php endwhile;?>

    <?php else :?>

        <?php  get_template_part('templates/content', 'none');?>

    <?php endif;
        ?>

<div class="clearfix"></div>

<?php get_footer(); ?>
