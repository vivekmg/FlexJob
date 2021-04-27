<?php
    include('datacon.php');
    if(isset($_POST["u_report"]))
    {
        $description="";
        $id="";
        if(isset($_POST["description"]))
        {
            $description=$_POST["description"];
        }
        if(isset($_POST["id"]))
        {
            $id=$_POST["id"];
        }
        
        $que="insert into userreport_tbl(`u_id`,`description`) VALUES('$id','$description')";
       if(mysqli_query(sets(),$que))
       {
           echo "Report Submitted";
       }

    }
    if(isset($_POST["c_report"]))
    {
        $description="";
        $id="";
        if(isset($_POST["description"]))
        {
            $description=$_POST["description"];
        }
        if(isset($_POST["id"]))
        {
            $id=$_POST["id"];
        }
        
        $que="insert into companyreport_tbl(`c_id`,`description`) VALUES('$id','$description')";
       if(mysqli_query(sets(),$que))
       {
           echo "Report Submitted";
       }
    }
    if(isset($_POST["j_report"]))
    {
        $description="";
        $id="";
        if(isset($_POST["description"]))
        {
            $description=$_POST["description"];
        }
        if(isset($_POST["id"]))
        {
            $id=$_POST["id"];
        }
        
        $que="insert into jobreport_tbl(`j_id`,`description`) VALUES('$id','$description')";
       if(mysqli_query(sets(),$que))
       {
           echo "Report Submitted";
       }
    }
?>