<?php

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


}
add_action( 'customize_register', 'fiveft_customizer_register' );

// Default options transport to js
function fiveft_customize_register( $wp_customize ) {
	$wp_customize->remove_section( 'static_front_page' );
}
add_action( 'customize_register', 'fiveft_customize_register' );