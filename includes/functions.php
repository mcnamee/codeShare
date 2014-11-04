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
function strToURL( $filename ) {
	return strtolower(str_replace(' ', '.', $filename));
}

/*
 *	Converts str from URLS
 */
function strFromURL( $filename ) {
	return str_replace('.', ' ', $filename);
}