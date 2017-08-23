<?php
/*
Template Name: Contact 
*/
?>

<?php get_header(); ?>


<section id="main-content" class="group" role="main">

<h1>Contact Page</h1>

<p>Have any questions about website projects? complete form on the right with your details or e-mail me at e-mail address below. You can also holla at me on social media. Lnks at the bottom of the page.</p>


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