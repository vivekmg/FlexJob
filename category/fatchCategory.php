<?php

require_once '../../db.php';

$columns = array('id','','catName');

$query = "SELECT * FROM category ";
if(isset($_POST["search"]["value"]))
{
 $query .= '
 WHERE catName LIKE "%'.$_POST["search"]["value"].'%"';
}
if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
}
else
{
 $query .= 'ORDER BY id DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}
$number_filter_row = mysqli_num_rows(mysqli_query($con, $query));
$result = mysqli_query($con,$query . $query1);
$data = array();
while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 $sub_array[] = $row["id"];
 $sub_array[] = '<center><img src="images/faces/face'.$row["id"].'.jpg" alt="image"/></center>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="catName">' . $row["catName"] . '</div>';//$row["catName"];
 $sub_array[] = '<center><button class="btn btn-outline-danger" name="delete" id="delete" data-id="'.$row["id"].'">Delete</button>	<button class="btn btn-outline-info" name="update" id="update" data-id="'.$row["id"].'">Edit</button></center>';
 $data[] = $sub_array;
}

function get_all_data($connect)
{
 $query = "SELECT * FROM category";
 $result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($con),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);
?>