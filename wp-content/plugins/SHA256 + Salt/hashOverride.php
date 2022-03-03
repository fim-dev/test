<?php

/*
Plugin Name: SHA256 + Salt
Description: Make wordpress use SHA256 hashes + Salt instead of MD5
Author: Francia Digital Marketing
Version: 1.0
Author URI: https://www.franciadigital.com/
*/

// Plugin will enable use of SHA256 hashing for authentication.
// Salt used is 64 bit SECURE_AUTH_SALT string from 'wp-config.php' (ensure this is uniquely generated)

// wp_check_password
if( ! function_exists('wp_check_password') ) {
  function wp_check_password($password, $hash) {
		// return hash_equals( hash('sha256', SECURE_AUTH_SALT . $password)  ,   $hash);

  	$password = substr($password, 0, 64);

		$hash_equals = hash_equals( hash('sha256', SECURE_AUTH_SALT . $password)  ,   $hash);
		$hash_equals = $hash_equals;

		return $hash_equals;
  }
}

if( ! function_exists('wp_hash_password') ) {
	function wp_hash_password($password) {
		// return hash('sha256', SECURE_AUTH_SALT . $password);
		$hash = hash('sha256', SECURE_AUTH_SALT . $password);
		$hash = $hash;

		return $hash;
	}
}

?>