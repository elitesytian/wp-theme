<?php

// SLIDER
add_action( 'customize_register', 'customizer_slider_options' );
function customizer_slider_options($wp_customize) {
	// SECTION
	$wp_customize->add_section( 'custom_slider_settings_section' , array(
		'title' => __( 'Sliders', 'mytheme' ),
		'panel' => 'theme_options_panel',
	) );

	// Default Slider Autoplay
	$wp_customize->add_setting( 'default_slider_autoplay' , array(
		'default'    => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( 'default_slider_autoplay', array(
		'label'       => 'Default Slider Autoplay',
		'type'        => 'radio',
		'section'     => 'custom_slider_settings_section',
		'choices'     => array(
			'true' => 'True',
			'false' => 'False',
		),
	) );

	// Default Slider Duration
	$wp_customize->add_setting( 'default_slider_duration' , array(
		'default'    => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( 'default_slider_duration', array(
		'label'       => 'Default Slider Duration',
		'type'        => 'number',
		'section'     => 'custom_slider_settings_section'
	) );

	// Default Slider Effect
	$wp_customize->add_setting( 'default_slider_effect', array(
		'default'    => '',
		'capability' => 'edit_theme_options',
	) );

	$wp_customize->add_control( 'default_slider_effect', array(
		'type'        => 'select',
		'section'     => 'custom_slider_settings_section',
		'label'       => __( 'Default Slider Effect' ),
		'choices'     => array(
			'slide'     => __( 'Slide' ),
			'crossfade' => __( 'Crossfade' ),
		),
	) );
}