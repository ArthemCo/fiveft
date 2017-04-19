<?php
function site_scripts() {
	// Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way
  global $wp_styles; 

	// Libraries
	wp_enqueue_script('masonry-js', get_template_directory_uri() . '/assets/js/dist/masonry.pkgd.min.js', array(), '4.1.0', true);
	wp_enqueue_script('smooth-js', get_template_directory_uri() . '/assets/js/dist/smoothstate.js', array(), '0.7.2', true);

	wp_enqueue_script( 'grid-js', get_template_directory_uri() . '/assets/js/grid.js', array(), '1.0.2', true );
	wp_enqueue_script( 'nav-js', get_template_directory_uri() . '/assets/js/navigation.js', array(), '1.0.1', true );
	wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/js/app.js', array(), '1.0.1', true );

	// Register main stylesheet
	wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.5', 'all' );

	// Comment reply script for threaded comments
	if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
	  wp_enqueue_script( 'comment-reply' );
	}
}
add_action('wp_enqueue_scripts', 'site_scripts', 999);
