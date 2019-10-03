<?php

// CUSTOM lOGIN PAGE
function my_login_page() {
	$logo                          = get_theme_mod('site_logo');
	$login_background_color        = get_theme_mod('login_background_color');
	$login_form_background_color   = get_theme_mod('login_form_background_color');
	$login_form_label_color        = get_theme_mod('login_form_label_color');
	$login_button_background_color = get_theme_mod('login_button_background_color');
	$login_button_color            = get_theme_mod('login_button_color');
	?>
	<style type="text/css">
		#login h1 a,
		.login h1 a {
			background-image: url(<?php echo $logo; ?>);
			height:65px;
			width:320px;
			background-size: contain;
			background-repeat: no-repeat;
			padding-bottom: 30px;
			margin-bottom:15px;
		}
		body.login {
			background-color:<?php echo $login_background_color; ?>;
		}
		<?php
			if($login_form_background_color) {
				?>
					body.login div#login form#loginform {
						background-color:<?php echo $login_form_background_color; ?>;
					}
					body.login div#login form#loginform p label {
						color:#fff;
					}
				<?php
			}
		?>
		body.login div#login form#loginform p.submit input#wp-submit {
			border:2px solid <?php echo $login_button_background_color; ?>;
			box-shadow:none;
			border-radius:0;
			background-color:<?php echo $login_button_background_color; ?>;
			color:<?php echo $login_button_color; ?>;
			height:40px;
			line-height:40px;
			line-height: 36px;
			padding: 0 15px;
			text-shadow: none;
			font-weight:bold;
			text-transform:uppercase;
			transition:.3s;
		}
		body.login div#login form#loginform p.submit input#wp-submit:hover {
			background-color:transparent;
			color:<?php echo $login_button_color;; ?>;
		}
		</style>
	<?php
}
add_action( 'login_enqueue_scripts', 'my_login_page' );