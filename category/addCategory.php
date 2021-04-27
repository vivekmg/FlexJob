<?php
require_once '../../db.php';

//if(isset($_POST["category_name"]))
//{
 $categoryName = mysqli_real_escape_string($con, $_POST["category_name"]);
 
 $query = "INSERT INTO category(catName) VALUES('$categoryName')";
 if(mysqli_query($con, $query))
 {
  echo 'DataInserted';
 } else {
 	echo "error";
 	echo mysqli_error($con);
 }
//}


?>