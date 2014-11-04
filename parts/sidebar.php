<?php
/*
 *
 *	Sidebar Output
 *
 */

	$ignore = array('.','..','.DS_Store');
	$dir = 'snippets';
	$directories = array_diff(scandir($dir), $ignore);
?>

<ul class="cs_main_nav">
	<?php
		foreach( $directories as $directory ) :
			$files = array_diff(scandir($dir . '/' . $directory), $ignore);
	?>
	<li><?php echo $directory; ?>
		<?php if( !empty($files) ) : ?>
		<ul>
			<?php foreach( $files as $file ) : ?>
			<li><a href="/snippet/<?php echo strToURL($directory); ?>/<?php echo strToURL(prettyFileName($file)); ?>"><?php echo prettyFileName($file, true); ?></a></li>
			<?php endforeach; ?>
		</ul>
		<?php endif; ?>
	</li>
	<?php endforeach; ?>
</ul>