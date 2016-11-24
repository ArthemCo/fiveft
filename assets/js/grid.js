/* The following code implements desandro's
	 masonry grid and the uglipop modal lightbox,
	 as well as control infinite scrolling.
*/

// TODO: concat

// this is the lightbox
(function () {
	'use strict';
	var grid = document.querySelector('.grid'),
		modalInView = false;

	var lightbox = {

		build: function (src) {
			var bod = document.getElementById('bod'),
				modal = document.createElement('div'),
				background = document.createElement('div');

			modal.className = 'lightbox';
			background.className = 'lightbox-bg';
			bod.appendChild(modal);
			bod.appendChild(background);
			modal.innerHTML = '<img src="' + src + '" id="lightbox-img"/>';
		},

		destroy: function () {
			document.querySelector('.lightbox').remove();
			document.querySelector('.lightbox-bg').remove();
		}
	};

	// add efficient event listener to whole grid.
	/*grid.addEventListener('click', function (event) {
		event.preventDefault();
		if (event.target !== event.currentTarget) {
			var img = event.target.src; // TODO: validation
			// more here
			lightbox.build(img);

			modalInView = false;
		}
	});*/

	window.addEventListener('resize', function () {

	});
}());

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
				percentPosition: true,
				gutter: 40
			});
		}
	});

}());
