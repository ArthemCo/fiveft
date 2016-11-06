<?php
function site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

		//	if (is_category('portfolio')) {
    wp_enqueue_script('masonry-js', get_template_directory_uri() . '/assets/js/dist/masonry/dist/masonry.pkgd.min.js', array(), '4.1.0', true);

	  // Adding scripts file in the footer
    wp_enqueue_script( 'grid-js', get_template_directory_uri() . '/assets/js/grid.js', array(), '', true );

	  // Adding scripts file in the footer
    wp_enqueue_script( 'nav-js', get_template_directory_uri() . '/assets/js/navigation.js', array(), '', true );

    // Adding scripts file in the footer
    wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/js/app.js', array( 'jquery' ), '', true );

    // Register main stylesheet
    wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.2', 'all' );

    // Comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action('wp_enqueue_scripts', 'site_scripts', 999);
