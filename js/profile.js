//Hero Slider

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

/*


	var graphBar = document.getElementsByClassName("bar");


	for (var i = 0; i < graphBar.length; i++) {

		//console.log(graphBar)

		console.log(graphBar[i])

		var graphItem = graphBar[i];

		var percentage = graphBar[i].dataset.percentage

		//console.log(graphItem)

		var pos = 0;

		var id = setInterval(frame, 50);

		function frame() {

			if (pos == this.percentage) {

				clearInterval(id);

			} else {
				/* code to change the element style *//*
				pos++;
				graphItem.style.width =  pos + '%';

			}
		}
	}

	*/


