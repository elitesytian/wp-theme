<?php

// COLORS
add_action( 'customize_register', 'customizer_colors_options' );
function customizer_colors_options($wp_customize) {
	// SECTION
	$wp_customize->add_section( 'custom_color_settings_section' , array(
		'title' => __( 'Colors', 'mytheme' ),
		'panel' => 'theme_options_panel',
	) );

	// Primary Color
	$wp_customize->add_setting( 'primary_color' , array(
		'default'    => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_color', array(
		'label'      => __( 'Primary Color', 'mytheme' ),
		'section'    => 'custom_color_settings_section',
		'settings'   => 'primary_color',
	) ) );

	// Secondary Color
	$wp_customize->add_setting( 'secondary_color' , array(
		'default'    => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'secondary_color', array(
		'label'      => __( 'Secondary Color', 'mytheme' ),
		'section'    => 'custom_color_settings_section',
		'settings'   => 'secondary_color',
	) ) );

	// Tertiary Color
	$wp_customize->add_setting( 'tertiary_color' , array(
		'default'    => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tertiary_color', array(
		'label'      => __( 'Tertiary Color', 'mytheme' ),
		'section'    => 'custom_color_settings_section',
		'settings'   => 'tertiary_color',
	) ) );
}