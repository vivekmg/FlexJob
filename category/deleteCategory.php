<?php
require_once '../../db.php';

	$catid = mysqli_real_escape_string($con, $_POST["category_id"]);
	$query = "DELETE FROM category WHERE id = $catid";
	if(mysqli_query($con, $query)) {
		echo 'DataInserted';
	} else {
		echo "error";
		echo mysqli_error($con);
	}
 ?>