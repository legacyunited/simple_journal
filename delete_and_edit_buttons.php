<form action="delete_post.php" method="get">
	<input type="hidden" name="file_name" value="<?php echo $file_name?>">
	<input type="submit" value="Delete">
</form>
<form action="edit_page.php" method="get">
	<input type="hidden" name="file_name" value="<?php echo $file_name?>">
	<input type="submit" value="Edit">
</form>