<?php
include('datacon.php');
include('phpmailsender.php');
if(isset($_POST["email"]))
{
    profiledata();

}
    function profiledata(){
        $conn = sets();
        $email = $_POST['email'];
        $result = null;
        echo "run";
        if($_POST["type"]=="flancer"){
            $que = "SELECT * FROM `user_tbl` WHERE `email`='$email'";
            $result = mysqli_query($conn,$que);
        }else{
            $que = "SELECT * FROM `company_tbl` WHERE `email`='$email'";
            $result = mysqli_query($conn,$que);
        }
        
        if($result->num_rows>0)
        {
            $password = $result->fetch_assoc();
            $passwor = $password["password"];
            sendemails($email,$passwor);
           echo "mail sended!";
        }
    }

?>