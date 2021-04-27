<?php
    include('datacon.php');
    function profiledata(){
        $conn = sets();
        $email = $_COOKIE['email'];
        if($_COOKIE["type"]=="flancer"){
            $que = "SELECT * FROM `user_tbl` WHERE `email`='$email'";
            $result = mysqli_query($conn,$que);
            return $result->fetch_assoc();
        }else{
            $que = "SELECT * FROM `company_tbl` WHERE `email`='$email'";
            $result = mysqli_query($conn,$que);
            return $result->fetch_assoc();
        }
       
    }
    function exdata($id)
    {
        $conn = sets();
        $que="select * from experience_tbl where uid='$id'" ;
        $result = mysqli_query($conn,$que);
        return $result; 
    }
    function edudata($id)
    {
        $conn=sets();
        $que="select * from education_tbl where uid='$id'";
        $result = mysqli_query($conn,$que);
        return $result;
    }
    if(isset($_GET["delete"]))
    {
        echo "check";
     echo   $_GET["delete"];
     echo $_GET["id"];
        if($_GET["delete"]=="ex"){
            echo $_GET["id"];
            deleteex($_GET["id"]);
        }else if($_GET["delete"]=="edu"){
            deleteedu($_GET["id"]);
        }
    }
    function deleteex($id)
    {
        $conn=sets();
        $que="delete from experience_tbl where id='$id' ";
       if(mysqli_query($conn,$que)){
           echo "run";
            header("Location:dashboard-profile.php");       
        }
    }
    function deleteedu($id)
    {
        $conn=sets();
        $que="delete from education_tbl where id='$id' ";
       if(mysqli_query($conn,$que)){
            header("Location:dashboard-profile.php");       
        }
    }
?>