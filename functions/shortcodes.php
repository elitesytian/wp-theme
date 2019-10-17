<?php

// CUSTOM PHONE NUMBER
function custom_phone_shortcode($atts = [], $content = null, $tag = '') {
	$default_contact_number = get_theme_mod('default_contact_number');

	$atts = array_change_key_case((array)$atts, CASE_LOWER);

	$custom_atts = shortcode_atts([
		'num' => $default_contact_number,
	], $atts, $tag);

	$content = '<a href="tel:'.setPhoneNumber($custom_atts['num']).'"><span class="tractnumber">'.$custom_atts['num'].'</span></a>';

	return $content;
}
function custom_phone_shortcode_init() {
	add_shortcode('PHONE', 'custom_phone_shortcode');
}
add_action('init', 'custom_phone_shortcode_init');