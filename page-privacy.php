<?php
/*
Template Name: Privacy
*/
?>

<?php get_header(); ?>


<?php if (have_posts()) :   ?>

        <?php  while (have_posts()) : the_post();

        get_template_part('templates/content', 'page');  ?>

      <?php endwhile;  ?>

      <?php
        else :

          get_template_part('templates/content', 'none');

        endif;
        ?>


<div class="clearfix"></div>


<?php get_footer(); ?>
