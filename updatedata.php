<?php
include('datacon.php');
if(isset($_POST['profileupdate']))
{
    $id=$_COOKIE["uid"];
    $name="";
    $phno="";
    $price="";
    $imgfile="";
    $skills="";
    $description="";
    $password="";
    //select que
    $que="select * from user_tbl where uid='$id'";
    $result=mysqli_query(sets(),$que);
    $rows=$result->fetch_assoc();
    //set varible;
    $name=$rows["name"];
    $skills=$rows["skills"];
    $imgfile=$rows["img"];
    $price=$rows["price"];
    $phno=$rows["phno"];
    $description=$rows["description"];
    $password=$rows["password"];
    //updte que
    if(isset($_POST["username"]))
    {
        $name=$_POST["username"];
    }
    if(isset($_POST["phno"]))
    {
        $phno=$_POST["phno"];
    }
    if(isset($_POST["price"]))
    {
       $price= $_POST["price"];
    } 
    if(isset($_POST["description"]))
    {
        $description=$_POST["description"];
    }
    if(isset($_POST["skills"]))
    {
        $skills=$_POST["skills"];
    }
    if(isset($_POST["password"]))
    {
        $password=$_POST["password"];
    }
    if($_FILES)
    {
        $fileName = $_FILES['file']['name'];
        $ext = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
		$newFileName = time().'.'.$ext;
		$fileDest = 'images/upload/'.$newFileName;
		if(move_uploaded_file($_FILES['file']['tmp_name'],$fileDest))
		{
			$imgfile=$newFileName;
        }
    }
    $que="update user_tbl set name='$name',skills='$skills',phno='$phno',price='$price',img='$imgfile',description='$description',password='$password' where uid='$id';";
    if(mysqli_query(sets(),$que))
    {
        echo "data updated";
    }
    else
    {
        echo mysqli_error(sets());
    }
}
if(isset($_POST['companyprofile']))
{
    $id=$_COOKIE["uid"];
    $name="";
    $phno="";
    $employes="";
    $imgfile="";
    $description="";
    $password ="";
    //select que
    $que="select * from company_tbl where id='$id'";
    $result=mysqli_query(sets(),$que);
    $rows=$result->fetch_assoc();
    //set varible;
    $name=$rows["name"];
    $imgfile=$rows["img"];
    $employes=$rows["employes"];
    $phno=$rows["phno"];
    $description=$rows["description"];
    $password=$rows["password"];
    //updte que
    if(isset($_POST["username"]))
    {
        $name=$_POST["username"];
    }
    if(isset($_POST["phno"]))
    {
        $phno=$_POST["phno"];
    }
    if(isset($_POST["employes"]))
    {
       $employ= $_POST["employes"];
    } 
    if(isset($_POST["description"]))
    {
        $description=$_POST["description"];
    }
    if(isset($_POST["password"]))
    {
        $password=$_POST["password"];
    }
    if($_FILES)
    {
        $fileName = $_FILES['file']['name'];
        $ext = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
		$newFileName = time().'.'.$ext;
		$fileDest = 'images/upload/'.$newFileName;
		if(move_uploaded_file($_FILES['file']['tmp_name'],$fileDest))
		{
			$imgfile=$newFileName;
        }
    }
    $que="update company_tbl set name='$name',
    phno='$phno',
    employes='$employ',
    img='$imgfile',
    password='$password',
    description='$description'
    where id='$id';";
    if(mysqli_query(sets(),$que))
    {
        echo "data updated";
    }
    else
    {
        echo mysqli_error(sets());
    }
}
?>