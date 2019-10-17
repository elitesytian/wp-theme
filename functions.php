<?php
// THEME SETUPS, SCRIPTS & STYLES
locate_template( "functions/setup.php", TRUE, TRUE );

// PLUGIN FUNCTIONS & HOOKS
locate_template( "functions/plugins.php", TRUE, TRUE );

// FUNCTION CUSTOMIZER
locate_template( "functions/customizer.php", TRUE, TRUE );

// CUSTOM FUNCTIONS
locate_template( "functions/helpers.php", TRUE, TRUE );

// CUSTOM SHORTCODES
locate_template( "functions/shortcodes.php", TRUE, TRUE );

// FUNCTION OVERWRITES 
locate_template( "functions/overwrites.php", TRUE, TRUE );

// UPDATES