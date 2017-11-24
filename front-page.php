<?php
/*

 * Template Name :Home

 */
?>


<?php get_header(); ?>


<section id="main-content" class="group" role="main">

    <h1><?php the_title(); ?></h1>

    <div id="frontpage_container">

        <div id="svg-image-container">

            <figure id="image-6">
                <img id="image-5" src="<?php echo home_url();?>/wp-content/uploads/2017/10/home-page-image.png" alt="images of different screen sizes">
            </figure>

            <figure id="image-7">
                <object class="style-svg" type="image/svg+xml" id="image-4" data="<?php echo home_url(); ?>/wp-content/themes/raythompsonwebdev-com/images/responsive-design-devices-2.1.svg" >
                </object>
            </figure>

        </div>

        <article id="text-box-front" role="article">

            <?php the_content(); ?>

           
        </article>

       <div class="clearfix"></div>
  
	
    </div>

  <div class="clearfix"></div>
   
  
   <section id="calltoaction">
	  <h1 id="front-title"><a href="">See projects</a></h1>    	   
	   <div class="frntpgbox"> Wordpress</div>
	   <div class="frntpgbox"> SEO</div>
	   <div class="frntpgbox">Web Apps</div>
	   <div class="frntpgbox">Google Analytics</div>
  	
   </section>

</section>



<?php get_footer(); ?>
