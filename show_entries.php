<html>
	<head>
	<title>Show entries</title>
	</head>
	<body>
	<div class="header">
	</div>
	<div class="posts">
		<?php 
			$number = 1;
			$file_name = (string) $number . ".txt";

			while (file_exists($file_name) == true) {
				$file = fopen($file_name, "w");
				echo fread($file, filesize(file_name));
				fclose($file);
			}

			$number++;
			$file_name = (string) $number . ".txt";
			echo "blah";

			?>
	</div>
	</body>
</html>