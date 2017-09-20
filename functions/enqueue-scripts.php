<?php

function site_scripts() {
	// Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way
  global $wp_styles; 

	// Libraries
	wp_enqueue_script( 'imagesloaded-js', get_template_directory_uri() . '/assets/js/dist/imagesloaded.pkgd.min.js', array(), '4.1.1', true);
	wp_enqueue_script( 'masonry-js', get_template_directory_uri() . '/assets/js/dist/masonry.pkgd.min.js', array(), '4.1.0', true);
	wp_enqueue_script( 'smooth-js', get_template_directory_uri() . '/assets/js/dist/smoothstate.js', array(), '0.7.2', true);

	// Site JS
	wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/js/app.min.js', array(),  '1.0.5', true );

	// Main stylesheet
	wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.6', 'all' );

	// Comment reply script for threaded comments
	if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
	  wp_enqueue_script( 'comment-reply' );
	}
}
add_action('wp_enqueue_scripts', 'site_scripts', 999);

// Disables the clutter in the HEAD
function disable_wp_emojicons() {

  // all actions related to emojis
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

  // filter to remove TinyMCE emojis
  add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
}
add_action( 'init', 'disable_wp_emojicons' );

//Making jQuery Google API
function modify_jquery() {
	if (!is_admin()) {
		// comment out the next two lines to load the local copy of jQuery
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js', false, '3.2.1');
		wp_enqueue_script('jquery');
	}
}
add_action('init', 'modify_jquery');