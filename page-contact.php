<?php
/*
Template Name: contact 
*/
?>

<?php get_header(); ?>


<section id="main-content" class="group" role="main">

<h1>Contact Page</h1>

<p>I am available to help with any small scale web development project</p>


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
		<br/>
			

			
<article class="contact-wide">
	
			


		</article>


    	<br/>

</section>

<div class="clearfix"></div>
<?php get_footer(); ?>