<?php
	$ignore = array('.','..','.DS_Store');
	$dir = 'snippets';
	$directories = array_diff(scandir($dir), $ignore);
?>
<div id="cs_sidebar" class="grid_4">
	<ul class="cs_main_nav">
		<?php
			foreach( $directories as $directory ) :
				
				$old_dir_path = BASE_DIR . $dir . '/' . $directory;

				/* Don't show files that aren't in a category */
				if( !is_file( $old_dir_path ) ) :

					/* Rename any folders that don't fit our conventions */
					if( checkUrlSafe($directory) ) :
						$directory = strToURL($directory);
						$dir_path = BASE_DIR . $dir . '/' . $directory;
						rename( $old_dir_path, $dir_path );
					else :
						$dir_path = $old_dir_path;
					endif;
					
					/* Get files in this folder */
					$files = array_diff(scandir($dir_path), $ignore);

				else :
					$files = '';
				endif;
		?>
			<?php if( !empty($files) ) : ?>
			<li><?php echo prettyFileName($directory, true); ?>
				<ul>
					<?php
						foreach( $files as $file ) :
							$old_file_path = BASE_DIR . $dir . '/' . $directory . '/' . $file;

							/* Rename any files that don't fit our conventions */
							if( checkUrlSafe( prettyFileName($file) )  ) :
								$file = strToURL(prettyFileName($file)) . '.php';
								$file_path = BASE_DIR . $dir . '/' . $directory . '/' . $file;
								rename( $old_file_path, $file_path );
							else :
								$file_path = $old_file_path;
							endif;

							if( !empty($file_path) && is_file($file_path) ) :
					?>

					<li><a href="/snippet/<?php echo strToURL($directory); ?>/<?php echo strToURL(prettyFileName($file)); ?>"><?php echo prettyFileName($file, true); ?></a></li>
						<?php endif; ?>
					<?php endforeach; ?>
				</ul>
			</li>
			<?php endif; ?>
		<?php endforeach; ?>
	</ul>
</div> <!-- /#sidebar -->