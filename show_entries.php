<?php $title = "Show entries by order of creation"; include("show_entries_top.php"); ?>
<div class="posts">
	<?php 
		$number = 1;
		$file_name = (string) $number . ".txt";

		//Runs through all files and reads them out
		while (file_exists($file_name)) {

			//Only print the contents of a file if it's not empty
			if (!(0==filesize($file_name)))
			{
				$file = fopen($file_name, "r");
				echo fread($file, filesize($file_name));
				fclose($file);

				//include edit and delete buttons
				include("delete_and_edit_buttons.php");
			}

			$number++;
			$file_name = (string) $number . ".txt";
		}

		?>
</div>

<?php include("show_entries_bottom.php"); ?>