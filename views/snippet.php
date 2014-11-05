<?php include(BASE_DIR . 'parts/head.php'); ?>
<?php include(BASE_DIR . 'parts/header.php'); ?>
<?php include(BASE_DIR . 'parts/sidebar.php'); ?>

<div id="cs_content" class="grid_20">
	<?php

		$file_path = BASE_DIR . 'snippets/' . $_GET['category'] . '/' . strFromURL($_GET['file']) . '.php';
		if( !empty($_GET['file']) AND is_file($file_path) ) :
			include($file_path);

			/* If 1 element: grid_24, 2 els: grid_12, 3 els: grid_8 */
			if( !empty($html) AND !empty($js) AND !empty($css) ) {
				$grid_width = "grid_8";
			} elseif( !empty($html) || !empty($js) || !empty($css) ) {
				$grid_width = "grid_12";
			} else {
				$grid_width = "grid_24";
			}

			/* CODE SNIPPETS */
	?>
			<a class="cs_openCodeshare __cs_openCodeshare" href="#"><i class="fa fa-code"></i></a>
			<div class="cs_codeshare">
				<?php if( !empty($plugins) ) : ?>
				<div class="grid_24">
					<h2>Plugins</h2>
					<pre><code class="__cs_codeEditor language-markup" title="html" contenteditable="true"><?php
						outputPlugins($plugins, true);
					 ?></code></pre>
				</div>
				<?php endif; ?>

				<?php if( !empty($html) ) : ?>
					<div class="<?php echo $grid_width; ?> inner">
						<h2>HTML</h2>
						<pre><code class="__cs_codeEditor language-markup" title="html" contenteditable="true"><?php echo htmlspecialchars($html); ?></code></pre>
					</div>
				<?php endif; ?>

				<?php if( !empty($css) ) : ?>
					<div class="<?php echo $grid_width; ?> inner">
						<h2>CSS</h2>
						<pre><code class="__cs_codeEditor language-css" title="css" contenteditable="true"><?php echo $css; ?></code></pre>
					</div>
				<?php endif; ?>

				<?php if( !empty($js) ) : ?>
					<div class="<?php echo $grid_width; ?> inner">
						<h2>JS</h2>
						<pre><code class="__cs_codeEditor language-javascript" title="javascript" contenteditable="true"><?php echo $js; ?></code></pre>
					</div>
				<?php endif; ?>
			</div> <!-- /.cs_codeshare -->

	<?php
		/* OUTPUT - PREVIEW */
	?>
		<iframe src="<?php echo '/snippet-preview/' . $_GET['category'] . '/' . strFromURL($_GET['file']); ?>" class="scale_with_grid cs_previewIframe"></iframe>
	<?php else : ?>
		<h1 class="text_align_center">Sorry, I can't find that Snippet</h1>
	<?php endif; ?>
</div> <!-- /#content -->

<?php include(BASE_DIR . 'parts/footer.php'); ?>