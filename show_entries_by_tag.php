<?php $title = "Show entries by tag(s)"; include("show_entries_top.php"); ?>

<div class="posts">
	<?php 
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
		//Gets the requested tags in array form
		$requested_tags = explode(", ", $_GET["tags"]);

		$number = 1;
		$file_name = (string) $number . ".txt";

		//iterates through existing files (Make into function later)
		while (file_exists($file_name)) {
			$file = fopen($file_name, "r");
			$line = fgets($file);

			//reads file until line where <div class="tags"> is contained
			while (!strpos($line, "<div class = 'tags'>")) {
				$line = fgets($file);
			}
			fclose($file);

			//strip the tags from the line (leaving only a string of the tags seperated by space and comma)
			$tags = strip_tags($line);

			//split tags into an array of tags
			$tags = explode(", ", $tags);

			//checks to see if there are any similarities between the requested tags and the current file's tags
			$matching = (array_intersect($requested_tags, $tags) != false);

			//if so, prints out the file
			if ($matching) {
				$file = fopen($file_name, "r");
				echo fread($file, filesize($file_name));;
				fclose($file);
			}

			
			$number++;
			$file_name = (string) $number . ".txt";
		}

		?>
</div>
<?php include("show_entries_bottom.php"); ?>