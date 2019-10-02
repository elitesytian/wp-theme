<?php

// LOGIN PAGE
add_action( 'customize_register', 'customizer_login_options' );
function customizer_login_options($wp_customize) {
	// SECTION
	$wp_customize->add_section( 'custom_login_settings_section' , array(
		'title' => __( 'Login', 'mytheme' )
	) );

	// Background Color
	$wp_customize->add_setting( 'login_background_color' , array(
		'default'    => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'login_background_color', array(
		'label'      => __( 'Background Color', 'mytheme' ),
		'section'    => 'custom_login_settings_section',
		'settings'   => 'login_background_color',
	) ) );

	// Form Background Color
	$wp_customize->add_setting( 'login_form_background_color' , array(
		'default'    => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'login_form_background_color', array(
		'label'      => __( 'Form Background Color', 'mytheme' ),
		'section'    => 'custom_login_settings_section',
		'settings'   => 'login_form_background_color',
	) ) );

	// Form Label Color
	$wp_customize->add_setting( 'login_form_label_color' , array(
		'default'    => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'login_form_label_color', array(
		'label'      => __( 'Form Label Color', 'mytheme' ),
		'section'    => 'custom_login_settings_section',
		'settings'   => 'login_form_label_color',
	) ) );

	// Button Background Color
	$wp_customize->add_setting( 'login_button_background_color' , array(
		'default'    => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'login_button_background_color', array(
		'label'      => __( 'Button Background Color', 'mytheme' ),
		'section'    => 'custom_login_settings_section',
		'settings'   => 'login_button_background_color',
	) ) );

	// Button Color
	$wp_customize->add_setting( 'login_button_color' , array(
		'default'    => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'login_button_color', array(
		'label'      => __( 'Button Background Color', 'mytheme' ),
		'section'    => 'custom_login_settings_section',
		'settings'   => 'login_button_color',
	) ) );
}