<?php

// SOCIAL SETTINGS
add_action( 'customize_register', 'customizer_social_options' );
function customizer_social_options($wp_customize) {
	// SECTION
	$wp_customize->add_section( 'custom_social_settings_section' , array(
		'title' => __( 'Social', 'mytheme' )
	) );

	// Social Toggle
	$wp_customize->add_setting( 'social_toggle' , array(
		'default'    => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( 'social_toggle', array(
		'label'       => 'On / Off',
		'type'        => 'radio',
		'section'     => 'custom_social_settings_section',
		'choices'     => array(
			'on' => 'On',
			'off' => 'Off',
		),
	) );

	// Facebook
	$wp_customize->add_setting( 'facebook_link' , array(
		'default'    => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( 'facebook_link', array(
		'label'       => 'Facebook Link',
		'type'        => 'url',
		'section'     => 'custom_social_settings_section'
	) );

	// Twitter
	$wp_customize->add_setting( 'twitter_link' , array(
		'default'    => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( 'twitter_link', array(
		'label'       => 'Twitter Link',
		'type'        => 'url',
		'section'     => 'custom_social_settings_section'
	) );

	// LinkedIn
	$wp_customize->add_setting( 'linkedin_link' , array(
		'default'    => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( 'linkedin_link', array(
		'label'       => 'LinkedIn Link',
		'type'        => 'url',
		'section'     => 'custom_social_settings_section'
	) );

	// Instagram
	$wp_customize->add_setting( 'instagram_link' , array(
		'default'    => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( 'instagram_link', array(
		'label'       => 'Instagram Link',
		'type'        => 'url',
		'section'     => 'custom_social_settings_section'
	) );

	// YouTube
	$wp_customize->add_setting( 'youtube_link' , array(
		'default'    => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( 'youtube_link', array(
		'label'       => 'YouTube Link',
		'type'        => 'url',
		'section'     => 'custom_social_settings_section'
	) );
}