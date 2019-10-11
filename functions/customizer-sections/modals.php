<?php

// MODALS
add_action( 'customize_register', 'customizer_modal_options' );
function customizer_modal_options($wp_customize) {
	// SECTION
	$wp_customize->add_section( 'custom_modal_settings_section' , array(
		'title' => __( 'Modals', 'mytheme' ),
		'panel' => 'theme_options_panel',
	) );

	// Default Modal Toggle
	$wp_customize->add_setting( 'default_modal_toggle' , array(
		'default'    => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( 'default_modal_toggle', array(
		'label'       => 'Default Modal Toggle',
		'type'        => 'radio',
		'section'     => 'custom_modal_settings_section',
		'choices'     => array(
			'on' => 'On',
			'off' => 'Off',
		),
	) );

	// Default Modal Title
	$wp_customize->add_setting( 'default_modal_title' , array(
		'default'    => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( 'default_modal_title', array(
		'label'       => 'Default Modal Title',
		'type'        => 'text',
		'section'     => 'custom_modal_settings_section'
	) );

	// Default Modal ID
	$wp_customize->add_setting( 'default_modal_id' , array(
		'default'    => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( 'default_modal_id', array(
		'label'       => 'Default Modal ID',
		'type'        => 'number',
		'section'     => 'custom_modal_settings_section'
	) );
}