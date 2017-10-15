<?php
/*
Template Name: Contact 
*/
?>

<?php get_header(); ?>

<section id="main-content" class="group" role="main">

<h1><?php the_title(); ?></h1>

<?php if (have_posts()) :
        while (have_posts()) : the_post();

        get_template_part('templates/content', 'page');

        endwhile;

        else :
          echo '<p>No content found</p>';

        endif;
        ?>


<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('contact')) : ?>

[ do default stuff if no widgets ]

<?php endif; ?>
		
<br>
<div class="map_container">
    <img id="image-5" src="<?php echo home_url(); ?>/wp-content/themes/raythompsonwebdev-com/images/map-of-hackney.jpg" alt="map-of-hackney">
</div>     


<ul class="contact-details" >
    <li id="fa-email"><a href="">raymond.thompson@raythompsonwebdev.co.uk</a> </li>
    <br/>
   
    <br/>
</ul> 

<div class="clearfix"></div>				

</section>

<div class="clearfix"></div>
<?php get_footer(); ?>