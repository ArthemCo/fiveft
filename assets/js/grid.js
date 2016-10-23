/*global Masonry */

(function () {
	'use strict';

	var elem = document.querySelector('.grid'),
		msnry;

	if (elem) {
		msnry = new Masonry(elem, {
			// options
			itemSelector: '.grid-item',
			columnWidth: 200
		});
	}

}());