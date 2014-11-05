<?php

/*
 *	Converts filename for display and URLS
 */
function prettyFileName( $filename, $display = false ) {
	$return = str_replace(array('.php', '.html', 'htm'), '', $filename);

	if( $display ) {
		$return = ucwords(str_replace(array('.', '_', '-'), ' ', $return));
	}

	return $return;
}

/*
 *	Converts filename to URLS
 */
function strToURL($string, $max_length = 50) {
	// Convert to lowercase and remove all non-alpha numeric chars (except underscores and hyphens)
	$new_name = preg_replace('/[^a-z0-9\s\_\-]/', '', strtolower(trim($string)));
	$new_name = preg_replace('/[^a-z0-9]+/', '-', $new_name);

	if (strlen($new_name) > $max_length) {
		return substr($new_name, 0, strrpos(substr($new_name, 0, $max_length), '-')); // Trim off to meet max length
	} else {
		return $new_name;
	}
}

/*
 *	Converts str from URLS
 */
function strFromURL( $filename ) {
	return str_replace('.', ' ', $filename);
}

/*
 *	Check if string is URL Safe
 * 	 - TRUE if it's not safe
 */
function checkUrlSafe( $string ) {
	if( preg_match( '/[^a-z0-9\s\_\-]/', $string ) ) {
		return TRUE;
	} else {
		return FALSE;
	}
}