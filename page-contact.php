<?php
/**
 * *PHP version 5
 * 
 * Template Name: Contact
 * 
 * Contact page | core/page-contact.php.
 *
 * @category   Contact_Page
 * @package    Wordpress
 * @subpackage Contact_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
?>

<?php get_header(); ?>

<section id="main-content" class="group" role="main">

<h1><?php the_title(); ?></h1>


<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('contact')) : ?>

[ do default stuff if no widgets ]

<?php endif; ?>

<br>

<div id="map_container">
   
    
</div>
 
  <script>
     function initMap() {
        var uluru = {lat: 51.55583507664607, lng: -0.06814956665039062};
        var map = new google.maps.Map(document.getElementById('map_container'), {
          zoom: 12,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      } 
      
    </script>
       
        <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpYuJIKNz2V8dAW5jZXFNSl8sftAxLO8s&callback=initMap">
    </script>
    
    
<ul class="contact-details" >
    <li id="fa-email"><a href="">raymond.thompson@raythompsonwebdev.co.uk</a> </li>


    <br/>
</ul>

<div class="clearfix"></div>

</section>

<div class="clearfix"></div>
<?php get_footer(); ?>
