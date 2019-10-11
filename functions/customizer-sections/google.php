<?php

// GOOGLE SETTINGS
add_action( 'customize_register', 'customizer_google_options' );
function customizer_google_options($wp_customize) {
	// SECTION
	$wp_customize->add_section( 'custom_google_settings_section' , array(
		'title' => __( 'Google', 'mytheme' ),
		'panel' => 'theme_options_panel',
	) );

	// Google Analytics
	$wp_customize->add_setting( 'google_analytics' , array(
		'default'    => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( 'google_analytics', array(
		'label'       => 'Google Analytics',
		'type'        => 'text',
		'section'     => 'custom_google_settings_section'
	) );

	// Google Tracking Code
	$wp_customize->add_setting( 'google_tracking_code' , array(
		'default'    => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( 'google_tracking_code', array(
		'label'       => 'Google Tracking Code',
		'type'        => 'text',
		'section'     => 'custom_google_settings_section'
	) );

	// Google Tracking Number
	$wp_customize->add_setting( 'google_tracking_number' , array(
		'default'    => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( 'google_tracking_number', array(
		'label'       => 'Google Tracking Number',
		'type'        => 'text',
		'section'     => 'custom_google_settings_section'
	) );

	// Google Tag Manager
	$wp_customize->add_setting( 'google_tag_manager' , array(
		'default'    => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( 'google_tag_manager', array(
		'label'       => 'Google Tag Manager',
		'type'        => 'text',
		'section'     => 'custom_google_settings_section'
	) );
}