
  //search field togle
 jQuery(document).ready(function($){

   $('button#find-search').on('click', function(){
       $('.social-1').animate({
            opacity : 'toggle',
            height: 'toggle'
            }, 'slow');;
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
