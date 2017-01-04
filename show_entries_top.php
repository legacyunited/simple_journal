<html>
	<head>
	<title><?php echo $title;?></title>
	</head>
	<body>
	<div class="header">
	<a href="index.php">Write an entry</a>
		<form action="show_entries_by_tag.php" method="GET">
		Search by tag(s): <input type="text" name = "tags">
		<input type="submit" value="Search by tag(s)">
		</form>
	</div>