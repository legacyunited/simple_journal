<?php 

error_reporting(E_ALL);
ini_set('display_errors', true);
	$number = 1;
	$file_name = (string) $number . ".txt";

	while (file_exists($file_name) == true) {
		$number++;
		$file_name = (string) $number . ".txt";
	}

	$file = fopen($file_name, "w");
    if( $file == false ) {
        echo ( "Error in opening file" );
        exit();
     }
	fwrite($file, "<div class = 'post'>");
	fwrite($file, "<div class = 'post-content'>");
	fwrite($file, $_POST["post"]);
	fwrite($file, "</div");
	fwrite($file, "<br>");
	fwrite($file, "<div class = 'tags'>");
	fwrite($file, $_POST["tags"]);
	fwrite($file, "</div>");
	fwrite($file, "</div>");
	fclose($file);
	header("Location: show_entries.php");
	exit;
?>