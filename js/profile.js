/* eslint-disable space-in-parens */
(function ($) {
	//Hero Slider
	$('.hero-slider ul a').click(function () {
		//reset all the items
		$('.customBlock ul a').classList.remove('active');
		//set current item as active
		$(this).classList.add('active');
		//scroll it to the right position
		$('.hero-slider > .mask').scrollTo($(this).getAttribute('rel'), 300);
		//disable click event
		return false;
	});
})(jQuery);

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
