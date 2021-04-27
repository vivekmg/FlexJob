<?php

require_once '../../db.php';

if(isset($_POST["id"]))
{
 $value = mysqli_real_escape_string($con, $_POST["value"]);
 $query = "UPDATE category SET ".$_POST["column_name"]."='".$value."' WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($con, $query))
 {
  echo 'Data Updated';
 }
}
?>
