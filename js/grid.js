

(function () {
	'use strict';

	imagesLoaded('.grid', function() {
		var elem = document.querySelector('.grid'),
				msnry;

		if (elem) {
			msnry = new Masonry(elem, {
				// options
				itemSelector: '.grid-item',
				columnWidth: '.grid-item',
				percentPosition: true,
				gutter: 40
			});
		}

	});

}());
