<?php 
    if(isset($_COOKIE["email"]))
    {
        setcookie('email','',time()-3600);
        setcookie('password','',time()-3600);
        setcookie('type','',time()-3600);
        setcookie('id','',time()-3600);

        header("Location:index.php");

    }
?>
