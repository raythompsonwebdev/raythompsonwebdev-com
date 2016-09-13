<?php
/*
Template Name: Contact 
*/
?>

<?php get_header(); ?>


<section id="main-content" class="group" role="main">

<h1>Contact Page</h1>

<p>Any queries about website please either complete form on the right or e-mail me at e-mail addressess below. You can also holla at me on social media</p>

<h1></h1>

<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('contact')) : ?>

[ do default stuff if no widgets ]

<?php endif; ?>
			


<br/>
<article class="social_media_container">



</article>

<ul class="skills" >
	
	<li>
        <i class="fa fa-envelope"></i><a href="mailto:info@raythompwebdesign.com">info@raythompwebdesign.com</a> </li>
<br/>
	<li>
		<i class="fa fa-envelope"></i><a href="mailto:ray_thomp@hushmail.com">ray_thomp@hushmail.com</a></li>
<br/>

</ul> 

<br/> 


<div class="clearfix"></div>				

</section>

<div class="clearfix"></div>
<?php get_footer(); ?>