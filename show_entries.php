<html>
	<head>
	<title>Show entries</title>
	</head>
	<body>
	<div class="header">
		<a href="index.php">Write an entry</a>
		<form action="show_entries_by_tag.php" method="GET">
		Search by tag(s): <input type="text" name = "tags">
		<input type="submit">
		</form>
	</div>
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
	</div>
	</body>
</html>