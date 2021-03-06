<?php

/**
 * Check for WP_Customizer_Control existence before adding custom control because WP_Customize_Control
 * is loaded on customizer page only
 *
 * @see _wp_customize_include()
 */

if ( class_exists( 'WP_Customize_Control' ) ) {
	require_once( get_template_directory().'/functions/customizer-toggle.php' );
}


/**
 * Begin adding customizer options
 *
 *
 */
function fiveft_customizer_register( $wp_customize ) {
	// Added to existing Title tag
	$wp_customize->add_setting( 'fiveft_header_logo' );
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'header_logo', array(
				'label'    => __('Header Logo', 'fiveft'),
				'section'  => 'title_tagline',
				'settings' => 'fiveft_header_logo',
			)
		)
	);

	// Same thing, add social media icons
	$wp_customize->add_setting( 'fiveft_nav_facebook' );
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'fiveft_nav_facebook', array(
				'label'    => __( 'Facebook link', 'fiveft' ),
				'section'  => 'title_tagline',
				'settings' => 'fiveft_nav_facebook',
			)
		)
	);
	// Same thing, add social media icons
	$wp_customize->add_setting( 'fiveft_nav_twitter' );
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'fiveft_nav_twitter', array(
				'label'    => __( 'Twitter link', 'fiveft' ),
				'section'  => 'title_tagline',
				'settings' => 'fiveft_nav_twitter',
			)
		)
	);
	// Same thing, add social media icons
	$wp_customize->add_setting( 'fiveft_nav_youtube' );
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'fiveft_nav_youtube', array(
				'label'    => __( 'YouTube link', 'fiveft' ),
				'section'  => 'title_tagline',
				'settings' => 'fiveft_nav_youtube',
			)
		)
	);
	// Same thing, add social media icons
	$wp_customize->add_setting( 'fiveft_nav_flickr' );
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'fiveft_nav_flickr', array(
				'label'    => __( 'Flickr link', 'fiveft' ),
				'section'  => 'title_tagline',
				'settings' => 'fiveft_nav_flickr',
			)
		)
	);
	// Same thing, add social media icons
	$wp_customize->add_setting( 'fiveft_nav_instagram' );
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'fiveft_nav_instagram', array(
				'label'    => __( 'Instagram link', 'fiveft' ),
				'section'  => 'title_tagline',
				'settings' => 'fiveft_nav_instagram',
			)
		)
	);


	/* Hero image settings */
	$wp_customize->add_section('section_hero', array(
	    'priority' => 1,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Homepage Layout', 'fiveft' ),
	    'description' => 'These options allow you to customize the homepage, and change layout from grid to hero image.'
	) );

	// Image selection
	$wp_customize->add_setting( 'hero_img' );
    $wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'hero_img', array(
				'label'    => __( 'Hero Image', 'fiveft' ),
				'section'  => 'section_hero',
				'settings' => 'hero_img',
				'priority' => 1
			)
		)
	);

  $wp_customize->add_setting( 'hero_img_2' );
    $wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'hero_img_2', array(
				'label'    => __( 'Hero Image Two', 'fiveft' ),
				'section'  => 'section_hero',
				'settings' => 'hero_img_2',
				'priority' => 1
			)
		)
	);

  $wp_customize->add_setting( 'hero_img_3' );
    $wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'hero_img_3', array(
				'label'    => __( 'Hero Image Three', 'fiveft' ),
				'section'  => 'section_hero',
				'settings' => 'hero_img_3',
				'priority' => 1
			)
		)
	);

	// Select page to link to
	$wp_customize->add_setting('hero_link', array('default' => '1'));
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'hero_link',
			array(
				'label'     => __('Call to Action link', 'fiveft'),
				'section'   => 'section_hero',
				'settings'  => 'hero_link',
				'priority'  => 2,
				'type'      => 'dropdown-pages',
				'description'=> '',
			)
		)
	);

	// Link Text
	$wp_customize->add_setting( 'hero_link_text', array(
		'default' => '',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => '',
	) );
	$wp_customize->add_control( 'hero_link_text', array(
		'type' => 'input',
		'priority' => 3,
		'section' => 'section_hero',
		'label' => __( 'Hero Screen text', 'fiveft' ),
		'description' => '',
	) );

	// set color theme for hero image elements
	$wp_customize->add_setting('hero_layout_toggle', array('default' => '0'));
	$wp_customize->add_control( 
		new Customizer_Toggle_Control( 
			$wp_customize, 'hero_layout_toggle', array(
			'label'	      => __( 'Enable Alternate Homepage', 'fiveft' ),
			'section'     => 'section_hero',
			'settings'    => 'hero_layout_toggle',
			'type'        => 'light',// light, ios, flat
			'priority'    => 0
	) ) );

	// set color theme for hero image elements
	$wp_customize->add_setting('hero_theme', array('default' => '0'));
	$wp_customize->add_control(
    new Customizer_Toggle_Control( 
			$wp_customize, 'hero_theme', array(
			'label'     => __('Light Theme', 'fiveft'),
			'section'   => 'section_hero',
			'settings'  => 'hero_theme',
			'type'      => 'light',
			'priority'  => 0
  ) ) );



}
add_action( 'customize_register', 'fiveft_customizer_register' );

// Default options transport to js
function fiveft_customize_register( $wp_customize ) {
	$wp_customize->remove_section( 'static_front_page' );
}
add_action( 'customize_register', 'fiveft_customize_register' );
