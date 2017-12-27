
  //search field togle
 jQuery(document).ready(function($){

   $('header button.menu-toggle').on('click', function(){
       $('header nav.menu-main-container ul#menu-main').animate({
            opacity : 'toggle',
            height: 'toggle'
            }, 'slow');
   });
 });

 // Hide/show toggle button on scroll
 jQuery(document).ready(function($){
     
     	var position, direction, previous;

 	$(window).scroll(function(){
 		if( $(this).scrollTop() >= position ){
 			direction = 'down';
 			if(direction !== previous){
 				$('header button.menu-toggle').addClass('hide');
 				previous = direction;
 			}
 		} else {
 			direction = 'up';
 			if(direction !== previous){
 				$('header button.menu-toggle').removeClass('hide');
 				previous = direction;
 			}
 		}
 		position = $(this).scrollTop();
 	});

  });
