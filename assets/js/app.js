(function () {
	'use strict';
	
	
}());



// // this is the lightbox
// (function () {
// 	'use strict';
// 	var grid = document.querySelector('.grid'),
// 		modalInView = false;

// 	var lightbox = {

// 		build: function (src) {
// 			var bod = document.getElementById('bod'),
// 				modal = document.createElement('div'),
// 				background = document.createElement('div');

// 			modal.className = 'lightbox';
// 			background.className = 'lightbox-bg';
// 			bod.appendChild(modal);
// 			bod.appendChild(background);
// 			modal.innerHTML = '<img src="' + src + '" id="lightbox-img"/>';
// 		},

// 		destroy: function () {
// 			document.querySelector('.lightbox').remove();
// 			document.querySelector('.lightbox-bg').remove();
// 		}
// 	};

// 	// add efficient event listener to whole grid.
// 	/*grid.addEventListener('click', function (event) {
// 		event.preventDefault();
// 		if (event.target !== event.currentTarget) {
// 			var img = event.target.src; // TODO: validation
// 			// more here
// 			lightbox.build(img);

// 			modalInView = false;
// 		}
// 	});*/

// 	window.addEventListener('resize', function () {

// 	});
// }());

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

(function () {
	'use strict';

	var toggle = document.getElementById('nav-toggle'),
		body = document.getElementById('bod'), // lol
		shade = document.getElementById('dismiss-overlay');

	function toggleNav() {
		body.classList.toggle('nav-is-open');
	}

	// check for nav element. Alternate layout disables it and this prevents an error
	if (toggle) {
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
	}
}());
