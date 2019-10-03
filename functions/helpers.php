<?php

// HELPER FUNCTIONS

function setPhoneNumber($phone) {
	$string = false;
	if($phone) {
			$string = preg_replace('/[^A-Za-z0-9\-]/','', $phone);
	}
	return $string;
}

function dump($data) {
	echo '<pre>';
		var_dump($data);
	echo '</pre>';
}