<?php
	define('BASE_DIR', __DIR__.'/');
	include(BASE_DIR . 'includes/functions.php');
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" prefix="og: http://ogp.me/ns#"> <!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>codeShare</title>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="icon"  href="http://mcnam.ee/favicon.ico"  type="image/x-icon" />

	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
	<link href="/assets/css/grid.min.css" rel="stylesheet" />
	<link href="/assets/css/styles.css" rel="stylesheet" />

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/modernizr/modernizr-2.6.2.js"></script>
</head>

<body>
	<header>
		<div class="cs_logo"><a href="/">codeShare</a></div>
	</header>

	<div id="cs_sidebar" class="grid_4">
		<?php include('parts/sidebar.php'); ?>
	</div> <!-- /#sidebar -->

	<div id="cs_content" class="grid_20">
		<?php
			if( !empty($_GET['view']) AND is_file(BASE_DIR . 'view/' . $_GET['view'] . '.php') ) { 
				include(BASE_DIR . 'view/' . $_GET['view'] . '.php');
			}
		?>
	</div> <!-- /#content -->

	<!-- <footer></footer> -->

	<script src="/assets/js/custom.js" type="text/javascript"></script>
</body>
</html>
