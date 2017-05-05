(function (jQuery) {
	'use strict';
	
	// SCROLL FX
	var scrollArrow = $('#scroll-arrow'),
			windowHeight = window.innerHeight;

	$(document).on('scroll', function () {
		console.log('scroll: ' + $(this).scrollTop());

		var y = $(this).scrollTop();
		if (y > windowHeight ) {
			$('#nav-main').addClass('desktop-show-nav');
		}
		if (y < windowHeight) {
			$('#nav-main').removeClass('desktop-show-nav');
		}
	});


}($));
