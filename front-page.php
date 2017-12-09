<?php
/*

 * Template Name :Home

 */
?>


<?php get_header(); ?>


<section id="main-content" class="group" >

    <h1><?php the_title(); ?></h1>

    <div id="frontpage_container">

        <div id="svg-image-container">
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
    
<section id="calltoaction">
 <h1 id="front-title">I also do..</h1>
   
   <article class="frntpgbox">
   <h1>Design</h1>
   <ul>
   <li>Wireframes</li>
   <li>Prototypes</li>
   <li></li>
   <li></li>
   </ul>
   
   </article>
   <article class="frntpgbox">
   <h1>Optimisation</h1>
   <ul>
   <li>SEO</li>
   <li>Keywords</li>
   <li>Google Analytics</li>
   <li>Image Optimisation</li>
   </ul>

   </article>
   <article class="frntpgbox">
   <h1>Validation</h1>
   <ul>
   <li>HTML Validation</li>
   <li>CSS Validation</li>
   <li></li>
   <li></li>
   </ul>
   </article>
   <article class="frntpgbox">
       <h1>Maintenance</h1>
       <ul>
   <li>Wordpress Updates</li>
   <li>Wordpress Security</li>
   <li>Debugging</li>
   <li></li>
   </ul>
       </article>
        
</section>

</section>



<?php get_footer(); ?>
