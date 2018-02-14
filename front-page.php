<?php
/**
 * *PHP version 5
 * 
 * Home Page | core/front-page.php.
 * 
 * @category   Home
 * @package    Wordpress
 * @subpackage Home
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
?>


<?php get_header(); ?>



    <h1><?php the_title(); ?></h1>

    <div id="frontpage_container">

        <div id="svg-image-container">
        

<<<<<<< HEAD

            <!--<figure id="image-6">
                <img id="image-5" src="<?php echo home_url(); ?>/wp-content/uploads/2017/12/home-page-image.png" alt="images of different screen sizes">
               </figure>-->
=======
         <!--<figure id="image-6">
             <img id="image-5" src="<?php echo home_url();?>/wp-content/uploads/2017/12/home-page-image.png" alt="images of different screen sizes">
            </figure>-->
>>>>>>> 0f8836b434da8d3e31955a7d44ed61c6333c4864

            <figure id="image-7">
                <object class="style-svg" type="image/svg+xml" id="image-4" data="<?php echo home_url(); ?>/wp-content/themes/raythompsonwebdev-com/images/responsive-design-devices-2.1.svg" >
                </object>
            </figure>
        
        </div>

        <article id="text-box-front" role="article">

            <?php the_content(); ?>

        </article>

<<<<<<< HEAD
        <div class="clearfix"></div>
    </div>

    <section id="calltoaction">
        <h1 id="front-title">I also do..</h1>

        <article class="frntpgbox">
            <h1>Design</h1>
            <ul>
                <li>Wireframes</li>
                <li>Prototypes</li>
                <li>Photoshop to HTML/CSS</li>
                <li>Photoshop to Wordpress</li>
            </ul>

        </article>
        <article class="frntpgbox">
            <h1>Optimisation</h1>
            <ul>
                <li>Code Optimisation</li>
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
                <li>PHP Documentation</li>
                <li></li>
            </ul>
        </article>
        <article class="frntpgbox">
            <h1>Maintenance</h1>
            <ul>
                <li>Wordpress Updates</li>
                <li>Wordpress Security</li>
                <li>PHP Debugging</li>
                <li></li>
            </ul>
        </article>

    </section>

=======
<div class="clearfix"></div>
    </div>
    
<section id="calltoaction">
 <h1 id="front-title">I also do..</h1>
   
   <article class="frntpgbox">
   <h1>Design</h1>
   <ul>
   <li>Wireframes</li>
   <li>Prototypes</li>
   <li>Photoshop to HTML</li>
   <li></li>
   </ul>
   
   </article>
   <article class="frntpgbox">
   <h1>Optimisation</h1>
   <ul>
   <li>Code Optimisation</li>
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

<<<<<<< HEAD
=======
>>>>>>> 0f8836b434da8d3e31955a7d44ed61c6333c4864
</section>


>>>>>>> 06bb6834ff1bdf6bc417acbbb75f423890046b84

<?php get_footer(); ?>
