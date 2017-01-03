<?php 

error_reporting(E_ALL);
ini_set('display_errors', true);
	$number = 1;
	$file_name = (string) $number . ".txt";
	echo $file_name;

	while (file_exists($file_name) == true) {
		$number++;
		$file_name = (string) $number . ".txt";
		echo "blah";
	}

	$file = fopen($file_name, "w");
    if( $file == false ) {
        echo ( "Error in opening file" );
        exit();
     }
	fwrite($file, "<tags>");
	fwrite($file, $_POST["tags"]);
	fwrite($file, "</tags>");
	fwrite($file, "<br>");
	fwrite($file, $_POST["post"]);
	flock($file, LOCK_UN);
	fclose($file);
	echo $file_name;
	echo $_POST["post"];
	header("Location: show_entries.php");
	exit;
?>