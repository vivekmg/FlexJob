<?php
    include('datacon.php');
if(isset($_POST["sendproposal"]))
{
    $uid=false;
    $jid= false;
    $duration=false;
    $description=false;
    $price=false;

    if(isset($_POST["amount"]))
    {
        $price=$_POST["amount"];
    }
    if(isset($_POST["duration"]))
    {
        $duration=$_POST["duration"];
    }
    if(isset($_POST["message"]))
    {
        $description=$_POST["message"];
    }
    if(isset($_POST["jid"]))
    {
        $jid=$_POST["jid"];
    }
    $uid=$_COOKIE["uid"];
    
        $que= "INSERT INTO `bid_tbl` (`id`, `j_id`, `u_id`, `description`, `duration`, `price`) 
            VALUES (NULL, '$jid', '$uid', '$description', '$duration', '$price');";
        if(mysqli_query(sets(),$que)){
            echo "Proposal sended";
        }
}

function checkapply($jid,$uid){
    $que="select * from bid_tbl where j_id='$jid' and u_id='$uid'";
    $rows= mysqli_query(sets(),$que);
    if(mysqli_num_rows($rows)>0){
        return true;
    }else{
        return false;
    }
} 
    function jobdetails($id){
        $conn = sets();
        $que="select c.*,c.name as cname , j.*  from job_tbl as j,company_tbl as c where j.c_id=c.id and j.jid='$id'";
        $result = mysqli_query($conn,$que);
        return $result;
        mysqli_free_result($result);
    }

    function jobselections($id,$status)
    {
        $que="select * from job_tbl as jt where jt.c_id=$id and jt.status='$status'";
        $result= mysqli_query(sets(),$que);
        return $result;
        mysqli_free_result($result);
    }

    function totalproposal($id){
        $que="select count(*) from bid_tbl where j_id='$id'";
        $result=mysqli_query(sets(),$que);
        return $result;
        mysqli_free_result($result);
        
    }

    function companysidedata($jid,$pro){
        if($pro>0)
        {
            $que= "select jb.*,bd.duration as bddu, bd.price as bdprice,bd.description as bddes,u.name as uname, u.uid as userid from user_tbl as u ,job_tbl as jb ,bid_tbl as bd where jb.jid=bd.j_id and bd.j_id='$jid'and bd.u_id=u.uid ";
            $result = mysqli_query(sets(),$que);
            return $result;
            mysqli_free_result($result);
        }else{
            $que="select * from job_tbl where jid='$jid'";
            $result= mysqli_query(sets(),$que);
            return $result;
            mysqli_free_result($result);
        }
      
    }

    if(isset($_GET["hire"]))
    {
       
        $numbers =explode(',',$_GET["hire"]);
        $que="update job_tbl set status = '1' where jid = '$numbers[0]';
        insert into ongoing_tbl (`id`,`u_id`,`j_id`,`c_id`) 
        values(NULL,'$numbers[2]','$numbers[0]','$numbers[1]')";
        if(mysqli_multi_query(sets(),$que))
        {
            echo $numbers[0];
           header("Location:dashboard-ongoingjob.php");
        }
    }


    function ongingjobs($jid)
    {
        $que = "select *,ot.id as onid,jt.name as jname,ut.name as uname, bt.price as bdprice, bt.duration as bddu,bt.description as bddes from ongoing_tbl as ot, user_tbl as ut, bid_tbl as bt , job_tbl as jt WHERE ot.u_id=ut.uid and jt.jid=ot.j_id and bt.u_id=ut.uid and jt.jid=bt.j_id and jt.jid='$jid'";
       $result= mysqli_query(sets(),$que);
       return $result;
    }
    function canceljobs($jid)
    {
        $que = "select *,ot.id as onid,jt.name as jname,ut.name as uname, bt.price as bdprice, bt.duration as bddu,bt.description as bddes from cancel_tbl as ot, user_tbl as ut, bid_tbl as bt , job_tbl as jt WHERE ot.u_id=ut.uid and jt.jid=ot.j_id and bt.u_id=ut.uid and jt.jid=bt.j_id and jt.jid='$jid'";
        $result= mysqli_query(sets(),$que);
        return $result;
    }
    function completejobs($jid)
    {
        $que = "select *,ot.id as onid,jt.name as jname,ut.name as uname, bt.price as bdprice, bt.duration as bddu,bt.description as bddes from complete_tbl as ot, user_tbl as ut, bid_tbl as bt , job_tbl as jt WHERE ot.u_id=ut.uid and jt.jid=ot.j_id and bt.u_id=ut.uid and jt.jid=bt.j_id and jt.jid='$jid'";
        $result= mysqli_query(sets(),$que);
        return $result;
    }
    if(isset($_GET["com"]))
    {
        $numbers =explode(',',$_GET["com"]);
        $que="update job_tbl set status = '2' where jid = '$numbers[0]';
        insert into complete_tbl (`id`,`u_id`,`j_id`,`c_id`) values(NULL,'$numbers[1]','$numbers[0]','$numbers[2]');
        delete from ongoing_tbl where id='$numbers[3]'";
    
        if(mysqli_multi_query(sets(),$que)){
            echo "run";
           header("Location:dashboard-completejobs.php");
        }
    }
    if(isset($_GET["can"]))
    {
        $numbers =explode(',',$_GET["can"]);
        $que="update job_tbl set status = '3' where jid = '$numbers[0]';
        insert into cancel_tbl (`id`,`u_id`,`j_id`,`c_id`) values(NULL,'$numbers[1]','$numbers[0]','$numbers[2]');
        delete from ongoing_tbl where id='$numbers[3]';
        delete from bid_tbl where j_id='$numbers[0]'";
        if(mysqli_multi_query(sets(),$que)){
            echo "run";
           header("Location:dashboard-canceljobs.php");
        }
    }

    if(isset($_GET["repost"]))
    {
        $id= $_GET["repost"];
        $que="update job_tbl set status = '0' where jid='$id';
        delete from bid_tbl where j_id ='$id';
        delete from cancel_tbl where j_id='$id'";
        if(mysqli_multi_query(sets(),$que))
        {
            header("Location:dashboard-managejobs.php");
        }
    }
    if(isset($_GET["delete"]))
    {
        $id = $_GET["delete"];
        $que="delete from job_tbl where jid = '$numbers[0]'";
        if(mysqli_query(sets(),$que))
        {
            header("Location:dashboard-canceljobs.php");
        }
    }
    if(isset($_POST["payment"]))
    {
        $name=$_POST["iname"];
        $oname=$_POST["oname"];
        $userid=$_POST["userid"];
        $amount=$_POST["amount"];
        $cnumber=$_POST["cnumber"];
        $month=$_POST["month"];
        $year=$_POST["year"];
        $cvv=$_POST["cvv"];
        $iid=$_POST["itemid"];
        $que="insert into orders(name,card_num,card_cvc,item_name,item_number,item_price,paid_amount,u_id) 
        values('$oname','$cnumber','$cvv','$name','$iid','$amount','$amount','$userid')";
        if(mysqli_query(sets(),$que))
        {
            echo "done";
        }
        else
        {
            echo mysqli_error(sets());
        }
    }

    function usersidejobs($n,$id)
    {
        if($n==1)
        {
            $que ="select * from ongoing_tbl as ot, job_tbl as jt where jt.jid=ot.j_id and ot.u_id='$id'";
        }elseif($n==2){
          $que="select * from complete_tbl as ot, job_tbl as jt where jt.jid=ot.j_id and ot.u_id='$id'";
        }elseif($n==3){
            $que="select * from cancel_tbl as ot, job_tbl as jt where jt.jid=ot.j_id and ot.u_id='$id'";
        }
       $result=mysqli_query(sets(),$que);
       return $result; 
    }
    function usersidejobsingle($id)
    {
        $que ="select *,ct.name as cname,jt.description as jdes from job_tbl as jt, company_tbl as ct where jt.c_id=ct.id and jt.jid='$id'";
        $result=mysqli_query(sets(),$que);
        return $result;
    }
    function getpaymentditels($id)
    {
        $que="select ot.*,ct.name as cname,ct.location,ct.phno from orders as ot, user_tbl as ut, company_tbl as ct,job_tbl as jt where ot.u_id=ut.uid and jt.c_id = ct.id and jt.jid=ot.item_number and ot.oid=$id";
        $result=mysqli_query(sets(),$que);
        return $result;
    }
    function paymentstatus($id)
    {
        $que="select * from orders where item_number='$id'";
        $result= mysqli_query(sets(),$que);
        return $result;
    }
?>