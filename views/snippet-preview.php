<?php include(BASE_DIR . 'parts/head.php'); ?>
<?php
	$file_path = BASE_DIR . 'snippets/' . $_GET['category'] . '/' . strFromURL($_GET['file']) . '.php';
	if( !empty($_GET['file']) AND is_file($file_path) ) :
		include($file_path);

		/* OUTPUT - PREVIEW */
?>
		<style type="text/css"><?php echo $css; ?></style>
		<h1><?php echo prettyFileName($_GET['file'], true); ?> Preview</h1>
		<?php echo $html; ?>
		<?php
			outputPlugins($plugins);
		 ?>
		<script type="text/javascript"><?php echo $js; ?></script>
	<?php else : ?>
		<h1 class="text_align_center">Sorry, I can't find that Preview</h1>
	<?php endif; ?>

<?php include(BASE_DIR . 'parts/footer.php'); ?>