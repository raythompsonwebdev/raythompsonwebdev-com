const menuToggle = document.querySelector('.menu-toggle');

menuToggle.addEventListener('click', function (event) {
	event.preventDefault();

	// create menu variables
	const slideoutMenu = document.querySelector('.menu-main-container ');

	const slideoutMenuHeight = slideoutMenu.offsetHeight;

	// toggle open class
	slideoutMenu.classList.toggle('open');

	slideoutMenu.style.transition = 'all 0.3s ease-in 0s';

	// slide menu
	if (slideoutMenu.classList.contains('open')) {
		slideoutMenu.style.top = '0px';
	} else {
		slideoutMenu.style.transition = 'all 0.3s ease-in 0s';
		slideoutMenu.style.top = -slideoutMenuHeight + 'px';
	}
});

// Hide/show toggle button on scroll

let prevScrollpos = window.pageYOffset;

window.onscroll = function () {
	const currentScrollPos = window.pageYOffset;

	if (prevScrollpos > currentScrollPos) {
		document.querySelector('.menu-toggle').classList.remove('hide');
	} else {
		document.querySelector('.menu-toggle').classList.add('hide');
	}

	prevScrollpos = currentScrollPos;
};
