<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	$file_name = $_GET["file_name"];

	$file = fopen($file_name, "r");
	$line = fgets($file);
	$post_body = $line;

	while (!strpos($line, "class = 'tags'")) {
		$post_body .= $line;
		$line = fgets($file);
	}

	$tags = strip_tags($line);
	$post_body = strip_tags($post_body);

	ftruncate($file, 0);
	fclose($file);


?>

<html>
	<head>
	<link rel="stylesheet" type="text/css" href="style.css">
		<title>Journal Interface</title>
	</head>
	<body>
		<form action="post_entry.php" method="post">
		<p>Tags:</p><input type="text" name="tags" value="<?php echo $tags ?>"> <br>
		<p>Post:</p><textarea name="post" rows="10" cols="50"><?php echo $post_body ?></textarea><br>
		<input type="hidden" name="file_name" value="<?php echo $file_name ?>">
		<input type="submit">
		<a href = "show_entries.php">Show entries</a>
	</body>
</html>