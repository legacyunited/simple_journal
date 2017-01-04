<?php 
	$post_name = $_GET["file_name"];
	$post = fopen($post_name, "w");
	ftruncate($post, 0);
	fclose($post);
	header("Location: " . $_SERVER["HTTP_REFERER"]);

?>