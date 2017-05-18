 
 jQuery(document).ready(function($){

 $('.fancybox').fancybox({
      openEffect  : 'elastic',
      closeEffect : 'elastic'

    }),

 $('.showcase-img').click(

  function(){
    
      $(this).find('.showcase-content').slideToggle(1000 , 'easeInOutExpo' );
 
  });
 
 
});
 
 
 //Hero Slider
jQuery(document).ready(function($){

  $('.hero-slider ul a').click(function() {

   //reset all the items

    $('.customBlock ul a').removeClass('active');

    //set current item as active

    $(this).addClass('active');

     //scroll it to the right position

    $('.hero-slider .mask').scrollTo($(this).attr('rel'), 300);

     //disable click event

      return false;

  });

});
 
 //REsponsive chart
jQuery(document).ready(function($){

   $("#chart #bars li .bar").each( function( key, bar ) {

     var percentage = $(this).data('percentage');

     $(this).animate({

     'height' : percentage + '%'

     }, 1000);

   });

 });


