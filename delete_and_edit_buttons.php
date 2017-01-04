<div class="edit_delete">
	<form action="delete_post.php" method="get" class="edit">
		<input type="hidden" name="file_name" value="<?php echo $file_name?>">
		<input type="submit" value="Delete">
	</form>
	<form action="edit_page.php" method="get" class="delete">
		<input type="hidden" name="file_name" value="<?php echo $file_name?>">
		<input type="submit" value="Edit">
	</form>
</div>