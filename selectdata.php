<?php
    include('datacon.php');
    function jobdata($id){
        $conn = sets();
        $que="select * from job_tbl as j where j.c_id='$id'";
        $result = mysqli_query($conn,$que);
        return $result;
    }
    function companydata($id){
        $conn = sets();
        $que="select * from company_tbl where id='$id'";
        $result = mysqli_query($conn,$que);
        return $result;
    }
    function companylist(){
        $conn = sets();
        $que="SELECT * FROM `company_tbl`";
        $result = mysqli_query($conn,$que);
        return $result;
    }
    function jobdatalist(){
        $conn = sets();
        $que="select c.*,c.name as cname , j.*  from job_tbl as j,company_tbl as c where j.c_id=c.id and j.status=0";
        $result = mysqli_query($conn,$que);
        return $result;
    }
    function userlist()
    {  
  
            $que="SELECT * FROM `user_tbl`";
            $conn = sets();
            $result = mysqli_query($conn,$que);
            return $result;
    
       
    }

    function userdata($id){
        $conn = sets();
        $que="select * from user_tbl where uid='$id'";
        $result = mysqli_query($conn,$que);
        return $result;
        
    
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
    function selectctegories()
    {
        $que="select * from category_tbl";
        $result =mysqli_query(sets(),$que);
        return $result;
    }

    function selectproejcts($id)
    {
        $que="select COUNT(*) as o from ongoing_tbl where u_id='$id'";
       $results= mysqli_query(sets(),$que);
       $pro=$results->fetch_assoc();
       $p['0']=$pro["o"];
       $que="select COUNT(*) as o from complete_tbl where u_id='$id'";
       $results= mysqli_query(sets(),$que);
       $pro=$results->fetch_assoc();
       $p['1']=$pro["o"];      
       $que="select COUNT(*) as o from cancel_tbl where u_id='$id'";
       $results= mysqli_query(sets(),$que);
       $pro=$results->fetch_assoc();
       $p['2']=$pro["o"];
       return $p;
    }

    function selectinvoice($id,$n)
    {
        if($n==1)
        {
            $que="select * from orders as ot,company_tbl as ct,job_tbl as jt where jt.jid=ot.item_number and jt.c_id =ct.id and ct.id='$id'";
        }
        else
        {
            $que="select * from orders as ot where ot.u_id='$id'";
        }
        $result=mysqli_query(sets(),$que);
        return $result;
    }
?>