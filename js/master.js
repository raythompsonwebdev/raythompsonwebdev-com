
  //search field togle
<<<<<<< HEAD
 jQuery(document).ready(function($){

   $('header button.menu-toggle').on('click', function(){
=======
	/* $('header button.menu-toggle').on('click', function(){
>>>>>>> 0f8836b434da8d3e31955a7d44ed61c6333c4864
       $('header nav.menu-main-container ul#menu-main').animate({
            opacity : 'toggle',
            height: 'toggle'
            }, 'slow');
   });*/


 // Hide/show toggle button on scroll
 jQuery(document).ready(function($){
     
<<<<<<< HEAD
     	var position, direction, previous;
=======
  var position, direction, previous;
>>>>>>> 0f8836b434da8d3e31955a7d44ed61c6333c4864

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

	 $('header button.menu-toggle').on('click', function(event){
    
		event.preventDefault();
	
		// create menu variables
		var slideoutMenu = $('header nav.menu-main-container ');
		var slideoutMenuWidth = $('header nav.menu-main-container ').width();
	
		// toggle open class
		slideoutMenu.toggleClass("open");
	
		// slide menu
		if (slideoutMenu.hasClass("open")) {
			slideoutMenu.animate({
				left: "0px"
			});	
		} else {
			slideoutMenu.animate({
				left: -slideoutMenuWidth
			}, 500);	
		}
							
		 
	
	});
	 


  });
