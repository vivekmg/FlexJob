<?php
 $servername = "localhost";
 $pass = "";
 $userame="root";

 function sets(){
    static $conn;
    if($conn===null)
    {
        $conn = new mysqli("localhost","root","","flexjob");
    }
    return $conn;
 }
 
 ?>