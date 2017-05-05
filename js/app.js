(function ($) {
	'use strict';
	
	// SCROLL FX
	var scrollArrow = $('#scroll-arrow'),
			windowHeight = window.innerHeight;

	$(document).on('scroll', function () {
		var y = $(this).scrollTop();
		if (y > windowHeight*0.6 ) {
			$('#nav-main').addClass('desktop-show-nav');
		}
		if (y < windowHeight*0.6) {
			$('#nav-main').removeClass('desktop-show-nav');
		}
	});

	// ajaxing in more content

	// $('.page-navigation a').on('click', function (e) {
	// 	e.preventDefault();
	// 	alert( 'Clicked Link' );
	// });

	// transitioner
	// $( function() { // Ready
	// 	var settings = { 
	// 			anchors: 'a',
	// 			blacklist: '.wp-link'
	// 	};
	// 	$( '#main' ).smoothState( settings );
	// });

	// nav UI hiding on mobile
	var w = $(window),
			windowWidth    = w.width(),
			scrollPosition = w.scrollTop(),
			isScrollingUp  = false,
			currentScroll;

	w.resize(function() {
	  windowWidth = w.width();
	});

	// hide elements on scroll, dismiss nav
	w.scroll(function() {
		currentScroll = w.scrollTop();
		if (windowWidth < 1080) {
			if (currentScroll > scrollPosition && !isScrollingUp) {
				document.body.classList.add('ui-hidden');
				isScrollingUp = !isScrollingUp;

  		} else if (currentScroll < scrollPosition && isScrollingUp) {
        document.body.classList.remove('ui-hidden')
      	isScrollingUp = !isScrollingUp;
  		}
  		scrollPosition = currentScroll;
		}
	});

}(jQuery));
