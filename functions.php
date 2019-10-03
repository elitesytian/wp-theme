<?php
// THEME SETUPS, SCRIPTS & STYLES
locate_template( "functions/setup.php", TRUE, TRUE );

// PLUGIN FUNCTIONS & HOOKS
locate_template( "functions/plugins.php", TRUE, TRUE );

// FUNCTION CUSTOMIZER
locate_template( "functions/customizer.php", TRUE, TRUE );
// Sections
locate_template( "functions/customizer-sections/default.php", TRUE, TRUE );
locate_template( "functions/customizer-sections/login.php", TRUE, TRUE );
locate_template( "functions/customizer-sections/google.php", TRUE, TRUE );
locate_template( "functions/customizer-sections/social.php", TRUE, TRUE );
locate_template( "functions/customizer-sections/modals.php", TRUE, TRUE );
locate_template( "functions/customizer-sections/sliders.php", TRUE, TRUE );
locate_template( "functions/customizer-sections/banner.php", TRUE, TRUE );

// CUSTOM FUNCTIONS
locate_template( "functions/helpers.php", TRUE, TRUE );

// FUNCTION OVERWRITES 
locate_template( "functions/overwrites.php", TRUE, TRUE );

// UPDATES