//Fancybox
jQuery(document).ready(function($){

 $('.showcase-img').click(

  function(){

      $(this).find('.showcase-content').slideToggle(1000 , 'easeInOutExpo' );

  })


});

 //search field togle
 jQuery(document).ready(function($){

   $("#wrapper_container #main-content #blogrightside .blogbox .social-1 form.searchform div label").click(function(){
       $("#wrapper_container #main-content #blogrightside .blogbox .social-1 form.searchform div input").toggle();

   });


 });

 // Hide/show toggle button on scroll
 jQuery(document).ready(function($){
 	var position, direction, previous;

 	$(window).scroll(function(){
 		if( $(this).scrollTop() >= position ){
 			direction = 'down';
 			if(direction !== previous){
 				$('a.nav-toggle').addClass('hide');

 				previous = direction;
 			}
 		} else {
 			direction = 'up';
 			if(direction !== previous){
 				$('a.nav-toggle').removeClass('hide');

 				previous = direction;
 			}
 		}
 		position = $(this).scrollTop();
 	});

     });