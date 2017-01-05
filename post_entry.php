<?php 

error_reporting(E_ALL);
ini_set('display_errors', true);

	//if we're creating a new entry, we loop through all the files until we reach the end and then write to that file
	if (!isset($_POST["file_name"])) {
		$number = 1;
		$file_name = "entries/" . (string) $number . ".txt";
		while (file_exists($file_name) == true) {
			$number++;
			$file_name = "entries/" . (string) $number . ".txt";
		}
	}

	//if we're editing an existing file, our file name was passed under $_GET["post_name"]
	else {
		$file_name = $_POST["file_name"];
	}

	$file = fopen($file_name, "w");
    if( $file == false ) {
        echo ( "Error in opening file" );
        exit();
     }
    if (!isset($_POST["file_name"])) {
    	date_default_timezone_set('America/New_York');
    	$date = date('m/d/Y', time());
	}
    fwrite($file, $date);
    fwrite($file, "<br><br>");
	fwrite($file, $_POST["post"]);
	fwrite($file, "\n\r");
	fwrite($file, "<br><b>Tags:</b><div class = 'tags'>");
	//hack--array_intersection is not recognizing the first element of each array even if it matches
	if (!isset($_POST["file_name"])) {
		fwrite($file, "tagged, ");
	}
	fwrite($file, $_POST["tags"]);
	fwrite($file, "</div>");
	header("Location: show_entries.php");
	exit;
?>