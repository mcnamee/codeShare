<?php
	define('BASE_DIR', __DIR__.'/');
	include(BASE_DIR . 'includes/functions.php');

	if( !empty($_GET['view']) AND is_file(BASE_DIR . 'views/' . $_GET['view'] . '.php') ) :
		include(BASE_DIR . 'views/' . $_GET['view'] . '.php');
	elseif( !empty($_GET['view']) ) :
		include(BASE_DIR . 'views/page-not-found.php');
	else :
		include(BASE_DIR . 'views/default.php');
	endif;
?>