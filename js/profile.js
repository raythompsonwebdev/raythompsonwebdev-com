

//Hero Slider
<<<<<<< HEAD
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

 $(" #chart #bars li .bar").each( function( key, bar ) {

  
  var percentage = $(this).data('percentage');

  $(this).animate({
    'width' : percentage + '%'
  }, 1000);
});

 
});


=======
(function($) {
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
})(jQuery);

//REsponsive chart
(function($) {
  	$(" #chart #bars li .bar").each( function( key, bar ) {
    	var percentage = $(this).data('percentage');
    	$(this).animate({
    		'width' : percentage + '%'
    	}, 1000);
  	});
})(jQuery);
>>>>>>> 58d42921a0881a5a17e245a161ffd18b2c6c94c8
