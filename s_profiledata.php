<?php
 include('datacon.php');
 function companyjobdata($id){
    $conn = sets();
    $que="select * from job_tbl as j where j.c_id='$id'";
    $result = mysqli_query($conn,$que);
    return $result;
}


?>