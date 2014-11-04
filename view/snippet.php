<?php

	$file_path = BASE_DIR . 'snippets/' . $_GET['category'] . '/' . strFromURL($_GET['file']) . '.php';
	if( !empty($_GET['file']) AND is_file($file_path) ) { 
		include($file_path);
	}
?>