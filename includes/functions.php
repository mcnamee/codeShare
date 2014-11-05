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

/*
 *	Output plugins nicely - js to script and css to link
 */
function outputPlugins( $plugins, $display = false ) {
	if( !empty($plugins) ) :
		foreach($plugins as $key => $plugin) :
			if( is_array($plugin) ) :
				if( $key == 'js' ) :
					foreach( $plugin as $js ) :
						$output = '<script src="' . $js . '"></script>';
						if( $display ) { $output = htmlspecialchars($output); }
						echo $output . "\n";
					endforeach;
				endif;

				if( $key == 'css' ) :
					foreach( $plugin as $css ) :
						$output = '<link href="' . $css . '" rel="stylesheet" />';
						if( $display ) { $output = htmlspecialchars($output); }
						echo $output . "\n";
					endforeach;
				endif;
			elseif( !empty($plugin) ) :
				$output = '<script src="' . $plugin . '"></script>';
				if( $display ) { $output = htmlspecialchars($output); }
				echo $output . "\n";
			endif;
		endforeach;
	endif;
}