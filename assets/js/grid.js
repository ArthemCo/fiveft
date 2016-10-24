/*global Masonry */

(function () {
	'use strict';

	window.addEventListener('load', function () {
		var elem = document.querySelector('.grid'),
			msnry;

		if (elem) {
			msnry = new Masonry(elem, {
				// options
				itemSelector: '.grid-item',
				columnWidth: '.grid-item',
				gutter: 0
			});
		}
	});

}());