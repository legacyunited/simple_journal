<?php $title = "Show entries by order of creation"; include("show_entries_top.php"); ?>
<div class="posts">
	<?php 
		$number = 1;
		$file_name = (string) $number . ".txt";

		while (file_exists($file_name)) {
			$file = fopen($file_name, "r");
			echo fread($file, filesize($file_name));
			fclose($file);
			$number++;
			$file_name = (string) $number . ".txt";
		}

		?>

<?php include("show_entries_bottom.php"); ?>