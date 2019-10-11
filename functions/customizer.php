<?php

locate_template( "functions/customizer-sections/overwrite.php", TRUE, TRUE );

// THEME OPTIONS PANEL
add_action( 'customize_register', 'custom_theme_options_panel' );
function custom_theme_options_panel($wp_customize) {
	$wp_customize->add_panel( 'theme_options_panel', array(
		'priority'   => 10,
		'capability' => 'edit_theme_options',
		'title'      => __('Theme Options', 'mytheme'),
	) );
}

// Sections
locate_template( "functions/customizer-sections/default.php", TRUE, TRUE );
locate_template( "functions/customizer-sections/banner.php", TRUE, TRUE );
locate_template( "functions/customizer-sections/sliders.php", TRUE, TRUE );
locate_template( "functions/customizer-sections/login.php", TRUE, TRUE );
locate_template( "functions/customizer-sections/social.php", TRUE, TRUE );
locate_template( "functions/customizer-sections/modals.php", TRUE, TRUE );
locate_template( "functions/customizer-sections/google.php", TRUE, TRUE );