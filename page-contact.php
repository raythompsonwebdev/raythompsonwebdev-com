<?php
/*
Template Name: Contact 
*/
?>

<?php get_header(); ?>


<section id="main-content" class="group" role="main">

<h1>Contact Page</h1>

<p>Any queries about website please either complete form on the right or e-mail me at e-mail addressess below. You can also holla at me on social media</p>


<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('contact')) : ?>

[ do default stuff if no widgets ]

<?php endif; ?>
		
<br/>
<div class="social_media_container">
    <img id="image-5" src="<?php echo home_url(); ?>/wp-content/uploads/2016/12/map-of-hackney.jpg" alt="map-of-hackney">
</div>     


<ul class="skills" >
    <li> <a href="mailto:raymond.thompson@raythompwebdev.co.uk">raymond.thompson@raythompsonwebdev.co.uk</a> </li>
    <br/>
    <li><a href="mailto:ray_thomp@hushmail.com">ray_thomp@hushmail.com</a></li>
    <br/>
</ul> 

<div class="clearfix"></div>				

</section>

<div class="clearfix"></div>
<?php get_footer(); ?>