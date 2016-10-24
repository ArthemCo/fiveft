(function () {
	'use strict';

	var toggle = document.getElementById('nav-toggle'),
		body = document.getElementById('bod'), // lol
		shade = document.getElementById('dismiss-overlay');
	
	function toggleNav() {
		body.classList.toggle('nav-is-open');
	}
	

	toggle.addEventListener('click', function (event) {
		event.preventDefault();
		toggleNav();
	});

	shade.addEventListener('click', function () {
		toggleNav();
	});

	window.addEventListener('scroll', function () {
		if (body.classList.contains('nav-is-open')) {
			toggleNav();
		}
	});

}());