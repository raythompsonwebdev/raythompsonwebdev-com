
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

	// sliding menu mobile
	$('header button.menu-toggle').on('click', function(event){

		event.preventDefault();

		// create menu variables
		var slideoutMenu = $('header nav.menu-main-container ');
		var slideoutMenuHeight = $('header nav.menu-main-container ').height();

		// toggle open class
		slideoutMenu.toggleClass("open");

		// slide menu
		if (slideoutMenu.hasClass("open")) {
			slideoutMenu.animate({
				top: "0px"
			});
		} else {
			slideoutMenu.animate({
				top: -slideoutMenuHeight
			}, 500);
		}
	});

});
