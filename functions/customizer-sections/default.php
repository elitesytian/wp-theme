<?php

// CUSTOM DEFAULTS
add_action('customize_register', 'customizer_default_options');
function customizer_default_options($wp_customize) {
	// SECTION
	$wp_customize->add_section( 'custom_default_settings_section' , array(
		'title' => __( 'Defaults', 'mytheme' )
	) );

	// Default Contact Number
	$wp_customize->add_setting( 'default_contact_number' , array(
		'default'    => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( 'default_contact_number', array(
		'label'       => 'Default Contact Number',
		'type'        => 'text',
		'section'     => 'custom_default_settings_section'
	) );

	// Default Email Address
	$wp_customize->add_setting( 'default_email_address' , array(
		'default'    => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( 'default_email_address', array(
		'label'       => 'Default Email Address',
		'type'        => 'email',
		'section'     => 'custom_default_settings_section'
	) );

	// Copyright Text
	$wp_customize->add_setting( 'copyright_text' , array(
		'default'    => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( 'copyright_text', array(
		'label'       => 'Copyright Text',
		'type'        => 'text',
		'section'     => 'custom_default_settings_section'
	) );

	// Loader Toggle
	$wp_customize->add_setting( 'loader_toggle' , array(
		'default'    => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( 'loader_toggle', array(
		'label'       => 'Loader Toggle',
		'type'        => 'radio',
		'section'     => 'custom_default_settings_section',
		'choices'     => array(
			'on' => 'On',
			'off' => 'Off',
		),
	) );

	$wp_customize->add_setting( 'loader_img', array(
		'default'    => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'loader_img', array(
		'label'       => 'Loader Image',
		'section'     => 'custom_default_settings_section', // site identity section
		'settings'    => 'loader_img',
		'description' => ''
	) ) );

}