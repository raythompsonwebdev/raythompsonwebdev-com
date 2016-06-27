<?php
/*
Template Name: Contact 
*/
?>

<?php get_header(); ?>


<section id="main-content" class="group" role="main">

<h1>Contact Page</h1>

<p>Any queries about website please either complete form on the right <br/> or e-mail me at e-mail addressess below. You can also hit me up on social media</p>


<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('contact')) : ?>

[ do default stuff if no widgets ]

<?php endif; ?>
			


<br/>

<ul class="skills" >
	
	<li>
        <i class="fa fa-envelope"></i><a href="mailto:info@raythompwebdesign.com">info@raythompwebdesign.com</a> </li>
<br/>
	<li>
		<i class="fa fa-envelope"></i><a href="mailto:ray_thomp@hushmail.com">ray_thomp@hushmail.com</a></li>
<br/>

</ul> 

<br/> 

<article class="social_media_container">

<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('map')) : ?>

			[ do default stuff if no widgets ]

				<?php endif; ?>

</article>
<div class="clearfix"></div>				

</section>

<div class="clearfix"></div>
<?php get_footer(); ?>