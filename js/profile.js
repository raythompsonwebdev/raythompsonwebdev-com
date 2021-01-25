/* eslint-disable space-in-parens */
jQuery(document).ready(function ($) {
	//Hero Slider
	$('.hero-slider ul a').click(function () {
		//reset all the items
		$('.customBlock ul a').removeClass('active');
		//set current item as active
		$(this).addClass('active');
		//scroll it to the right position
		$('.hero-slider > .mask').scrollTo($(this).attr('rel'), 300);
		//disable click event
		return false;
	});
});

//Responsive chart
function responsiveGraph() {
	const chartBar = document.querySelectorAll('.bar');

	chartBar.forEach(function (key) {
		let percentage = 0;

		const percentageMaxWidth = key.dataset.percentage;

		const id = setInterval(frame, 1500);

		function frame() {
			if (percentage === percentageMaxWidth) {
				clearInterval(id);
			} else {
				percentage++;

				//key.style.width = `${percentageMaxWidth}%`;
				key.style.width = ''.concat(percentageMaxWidth, '%');
			}
		}
	});
}

responsiveGraph();
