<!-- footer-->           	



<footer>



<div class="socialpics">

<a class="social-icon linkedin-icon" href="https://uk.linkedin.com/pub/raymond-thompson/b8/2b7/1b4" target="new" title="Follow us on LinkedIn"><span><i class="fa fa-linkedin"></i></span></a>

<a class="social-icon twitter-icon" href="http://twitter.com/RayThompWeb" target="new" title="Follow us on Twitter"><span><i class="fa fa-twitter"></i></span></a>

<a class="social-icon facebook-icon" href="https://www.facebook.com/raythompwebdesigncom-1228332087181328" target="new" title="Like us on Facebook"><span><i class="fa fa-facebook"></i></span></a>

<a class="social-icon google-icon" href="https://github.com/DigbyCeaser/RayThompWeb" target="new" title="Follow us on GitHub"><span><i class="fa fa-github"></i></span></a>

</div>

<?php wp_nav_menu( array('menu' => 'Secondary', 'container' => 'footer' )); ?>

</footer> 


<p id="copyr">&copy; 2014 - Raymond Thompson - UK

<br/>

<script> document.write("Page Last Updated: " + document.lastModified); </script>

</p>  

</div>



<script >

jQuery(document).ready(function($){

 $('.fancybox').fancybox({
      openEffect  : 'elastic',
      closeEffect : 'elastic'

    });

});

</script>

<script >

jQuery(document).ready(function($){

  $("#chart #bars li .bar").each( function( key, bar ) {

    var percentage = $(this).data('percentage');

    $(this).animate({

    'height' : percentage + '%'

    }, 1000);

  });

});

</script>


<script >

jQuery(document).ready(function($){

  $('.hero-slider ul a').click(function() {

   //reset all the items

    $('.customBlock ul a').removeClass('active');

    //set current item as active

    $(this).addClass('active'); 

     //scroll it to the right position

    $('.mask').scrollTo($(this).attr('rel'), 300);

     //disable click event

      return false;   

  });

});

</script>



<script >

jQuery(document).ready(function($){
  
 $('button.text-btn-a').bind().click(function(){
     
      $('.showcase-a').toggle('fast');
 

    }),

   $('button.text-btn-b').bind().click(

    function(){

      $('.showcase-b').toggle('fast');

    }),

   $('button.text-btn-c').bind().click(

    function(){

      $('.showcase-c').toggle('fast');

    }),

   $('button.text-btn-d').bind().click(

    function(){

      $('.showcase-d').toggle('fast');

    }),

   $('button.text-btn-e').bind().click(

    function(){

      $('.showcase-e').toggle('fast');

    }),

   $('button.text-btn-f').bind().click(

    function(){

      $('.showcase-f').toggle('fast');

    }),

   $('button.text-btn-g').bind().click(

    function(){

      $('.showcase-g').toggle('fast');

    }),

   $('button.text-btn-h').bind().click(

    function(){

      $('.showcase-h').toggle('fast');

    }),

   $('button.text-btn-i').bind().click(

    function(){

      $('.showcase-i').toggle('fast');

    })

  
});

</script>

<div class="fixed-side-social-container">
<a class="social-icon linkedin-icon" href="https://uk.linkedin.com/pub/raymond-thompson/b8/2b7/1b4" target="new" title="Follow us on LinkedIn"><span><i class="fa fa-linkedin"></i></span></a>

<a class="social-icon twitter-icon" href="http://twitter.com/RayThompWeb" target="new" title="Follow us on Twitter"><span><i class="fa fa-twitter"></i></span></a>

<a class="social-icon facebook-icon" href="https://www.facebook.com/raythompwebdesigncom-1228332087181328" target="new" title="Like us on Facebook"><span><i class="fa fa-facebook"></i></span></a>

<a class="social-icon google-icon" href="https://github.com/DigbyCeaser/RayThompWeb" target="new" title="Follow me on GitHub "><span><i class="fa fa-github"></i></span></a>
</div>


<?php

function mf_responsive_nav(){

echo '<script>

  var navigation = responsiveNav("#mobile-nav" );

  </script>';

}

add_action('wp_footer', 'mf_responsive_nav');

?>





<?php wp_footer(); ?> 

</body>

</html>