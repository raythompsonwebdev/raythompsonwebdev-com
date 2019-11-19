
//Responsive chart

(function responsiveGraph(){

	var chartBar = document.querySelectorAll(".bar");

	chartBar.forEach( function( key ) {
		
		var percentage = 0;

		var percentageMaxWidth = key.dataset.percentage;

		var id = setInterval(frame, 1500);

		function frame() {

			if (percentage == percentageMaxWidth) {
			  clearInterval(id);
			} else {
			  percentage++;

			  key.style.width = `${percentageMaxWidth}%`;
			}
		  }
			
	});

})();
 
/*
//jQuery(document).ready(function($){

	var sliderbtn  = document.querySelectorAll('.hero-btn');
	
	for( let i = 0; i < sliderbtn.length; i++){

		//console.log(sliderbtn[i])

		sliderbtn[i].addEventListener('click', function(e){
			
			var target = e.target;

			console.log(target.getAttribute('rel'));

			var rel = target.getAttribute('rel');

			//$(this).attr('rel')

			//$('.hero-slider ul a').classList.remove('active');
			//$(this).addClass('active');

			document.querySelector('.slider-body').scroll(rel, 50);
			
			return false;

		})


	}

//Hero Slider
		
//});

*/

jQuery(document).ready(function($){

  //Hero Slider
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


