(function () {
	'use strict';

	var msnry;
	var elem = document.querySelector('.grid');

	if (elem) {
		var imgLoad = new imagesLoaded('.grid');

		msnry = new Masonry(elem, {
			// options
			itemSelector: '.grid-item',
			columnWidth: '.grid-item',
			percentPosition: true,
			gutter: 40
		});

		imgLoad.on( 'done' , function (instance, imgage) {
			msnry.layout();
		});

		setTimeout(function(){ msnry.layout(); }, 1000);
	}
}());
