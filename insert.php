<?php 

 include('datacon.php');
 if (isset($_POST['registordone']))
 {
	 $uname=false;
	 $email=false;
	 $gender=false;
	 $phno=false;
	 $pass=false;
	 $price=false;
	 $description=false;
	 $company=false;
$imgfile=false;
$skills="";
		if(isset($_POST['username']))
		{
			$uname = $_POST['username'];
		}
		if(isset($_POST["email"]))
		{
			$email = $_POST["email"];
		} 
		if(isset($_POST["gender"]))
		{
			$gender = $_POST["gender"];
		} 
		if(isset($_POST["phno"]))
		{
			$phno = $_POST["phno"];
		}
		if(isset($_POST["pass"]))
		{
			$pass = $_POST["pass"];
		} 
		if(isset($_POST["price"]))
		{
			$price = $_POST["price"];
		}
		if(isset($_POST["skills"]))
		{
			$skills = $_POST["skills"];
		}
		if(isset($_POST["description"]))
		{
			$description=$_POST["description"];
		}
		if($_FILES)
		{
			$fileName = $_FILES['file']['name'];
			$ext = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
			echo $_FILES["file"]["name"];
			$newFileName = time().'.'.$ext;
			$fileDest = 'images/upload/'.$newFileName;
			if(move_uploaded_file($_FILES['file']['tmp_name'],$fileDest))
			{
				$imgfile=$newFileName;
			}
		}	
		else
		{
			$imgfile="default.jpg";
		}
		
		$que ="INSERT INTO `user_tbl`(`uid`, `name`, `email`, `password`, `phno`, `approve`, `skills`, `price`, `img`, `gender`, `description`) 
								VALUES (NULL,'$uname', '$email', '$pass', '$phno', '0', '$skills', '$price','$imgfile', '$gender','$description');";
		if( mysqli_query(sets(),$que))
		{
			echo "confirm";
			setcookie("email","$email");
			setcookie("password","$pass");
			setcookie("type","flancer");
			$lasid=mysqli_insert_id(sets());
			setcookie("uid","$lasid");
		}else{
			echo mysqli_error(sets());
		}

		echo mysqli_error(sets());

}	
else if (isset($_POST['logincheck']))
{
	$email = false;
	$pass= false;

	if(isset($_POST["email"]))
	{
		$email = $_POST["email"];
	} 
	if(isset($_POST["pass"]))
	{
		$pass = $_POST["pass"];
	} 
	if(isset($_POST["type"])){
		echo $_POST["type"];
		if($_POST["type"]=="flancer")
		{
			$que ="SELECT * FROM `user_tbl` WHERE `email`='$email' and `password`='$pass'";
			$row=mysqli_query(sets(),$que);
			if(mysqli_num_rows($row)>0)
			{
				$result=$row->fetch_assoc();
				setcookie("uid",$result["uid"]);
				setcookie("email","$email");
				setcookie("password","$pass");
				setcookie("type",$_POST["type"]);
				
			}else{
				echo mysqli_error(sets());
			}
			echo mysqli_error(sets());
		}
		if($_POST["type"]=="company")
		{
			$que ="SELECT * FROM `company_tbl` WHERE `email`='$email' and `password`='$pass'";
			$row=mysqli_query(sets(),$que);
			if(mysqli_num_rows($row)>0)
			{
				$result=$row->fetch_assoc();
				setcookie("uid",$result["id"]);
				setcookie("email","$email");
				setcookie("password","$pass");
				setcookie("type",$_POST["type"]);
			}else{
				echo mysqli_error(sets());

			}
			echo mysqli_error(sets());
		}

	}


}else if (isset($_POST['companyregister']))
{
	$uname=false;
	$email=false;
	$phno=false;
	$pass=false;
	$addres=false;
	$employe=false;
	$description=false;
	$imgfile=false;
	if(isset($_POST["cname"]))
	{
		$uname = $_POST["cname"];
	} 
	if(isset($_POST["email"]))
	{
		$email = $_POST["email"];
	} 
	if(isset($_POST["pass"]))
	{
		$pass = $_POST["pass"];
	} 
	if(isset($_POST["phno"]))
	{
		$phno = $_POST["phno"];
	} 
	if(isset($_POST["addres"]))
	{
		$addres = $_POST["addres"];
	} 
	if(isset($_POST["employe"]))
	{
		$employe = $_POST["employe"];
	} 
	if(isset($_POST["description"]))
	{
		$description = $_POST["description"];
	} 
		$fileName = $_FILES['file']['name'];

		$ext = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
		echo $_FILES["file"]["name"];
		$newFileName = time().'.'.$ext;
		$fileDest = 'images/upload/'.$newFileName;
		if(move_uploaded_file($_FILES['file']['tmp_name'],$fileDest))
		{
			$imgfile=$newFileName;
		}
		else
		{
			$imgfile="defaultc.jpg";
		}

	$que ="INSERT INTO `company_tbl` (`id`, `name`, `phno`, `email`, `location`, `employes`, `description`, `password`,`img`) 
	VALUES (NULL, '$uname', '$phno', '$email', '$addres','$employe','$description','$pass','$imgfile');";
	if( mysqli_query(sets(),$que))
	{
		echo "confirm";
		setcookie("email","$email");
		setcookie("password","$pass");
		$lasid=mysqli_insert_id(sets());
		setcookie("uid","$lasid");
		setcookie("type","company");
	}else{
		echo mysqli_error(sets());
	}

	echo mysqli_error(sets());

}else if (isset($_POST['postjobs'])){
	if(isset($_COOKIE['uid']))
	{
		$uid = $_COOKIE['uid'];
	} 

		$date = date('Y-m-d');
	
	if(isset($_POST["price"]))
	{
		$price = $_POST["price"];
	} 
	if(isset($_POST["description"]))
	{
		$description = $_POST["description"];
	} 
	if(isset($_POST["duration"]))
	{
		$duration = $_POST["duration"];
	} 
	if(isset($_POST["skills"]))
	{
		$skills = $_POST["skills"];
	} 
	if(isset($_POST["catg"]))
	{
		$catg = $_POST["catg"];
	} 
	if(isset($_POST["jname"]))
	{
		$jname = $_POST["jname"];
	} 
	if(isset($_POST["type"]))
	{
		$type = $_POST["type"];
	} 

	$que="INSERT INTO `job_tbl` (`jid`, `date`, `name`, `status`, `description`, `skills`, `duration`, `price`, `categories`,`type`,`c_id`) 
		VALUES (NULL, '$date', '$jname', '0', '$description', '$skills', '$duration', '$price', '$catg','$type', '$uid');";
	if( mysqli_query(sets(),$que)){
		echo "Job Posted";
	}
	else{
		echo mysqli_error(sets());
	}
}else if(isset($_POST["addexprence"])){
	$cname=false;
	$sdate=false;
	$edate=false;
	$jobtitle=false;
	$description=false;
	if(isset($_POST["cname"])){
		$cname=$_POST["cname"];
	}
	if(isset($_POST["sdate"])){
		$sdate=date("y-m-d",strtotime($_POST["sdate"]));
	}
	if(isset($_POST["edate"])){
		$edate=$_POST["edate"];
	}
	if(isset($_POST["jobtitle"])){
		$jobtitle=$_POST["jobtitle"];
	}
	if(isset($_POST["description"])){
		$description=$_POST["description"];
	}

	$uid=$_COOKIE["uid"];
	$que="INSERT INTO `experience_tbl` (`id`, `uid`, `c_name`, `s_date`, `l_date`, `post`,`description`) 
	VALUES (NULL, '$uid', '$cname', '$sdate', '$edate', '$jobtitle','$description')";
	if(mysqli_query(sets(),$que))
	{
		echo "Experience Add";
		header("Location:dashboard-profile.php");       
	}
	else{
		echo mysqli_error(sets());
	}
}else if(isset($_POST["addeducation"])){
	$uname=false;
	$pdate=false;
	$course=false;
	$description=false;
	if(isset($_POST["uname"])){
		$uname=$_POST["uname"];
	}
	if(isset($_POST["passing"])){
		$pdate=date("y-m-d",strtotime($_POST["passing"]));
	}
	if(isset($_POST["course"])){
		$course=$_POST["course"];
	}
	if(isset($_POST["description"])){
		$description=$_POST["description"];
	}
	$uid=$_COOKIE["uid"];
	$que="INSERT INTO `education_tbl` (`id`, `uid`, `course`, `p_year`, `university`,`description`) 
	VALUES (NULL, '$uid', '$course', '$pdate', '$uname','$description')";
	if(mysqli_query(sets(),$que))
	{
		echo "Experience Add";
	}
	else{
		echo mysqli_error(sets());
	}
}
 ?>	