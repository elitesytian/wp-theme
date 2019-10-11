<?php

// BANNER SETTINGS
add_action( 'customize_register', 'customizer_banner_options' );
function customizer_banner_options($wp_customize) {
	// SECTION
	$wp_customize->add_section( 'custom_banner_settings_section' , array(
		'title' => __( 'Banner', 'mytheme' ),
		'panel' => 'theme_options_panel',
	) );

	// Default Banner Image
	$wp_customize->add_setting( 'default_banner_img', array(
		'default'    => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'default_banner_img', array(
		'label'       => 'Default Banner Image',
		'section'     => 'custom_banner_settings_section', // site identity section
		'settings'    => 'default_banner_img',
		'description' => ''
	) ) );
}
