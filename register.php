	
<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Profile</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="icon" href="images/fox.png" type="image/x-icon">
	<link rel="stylesheet" href="dist/assets/bootstrap.min.css">
	<link rel="stylesheet" href="dist/assets/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/scrollbar.css">
	<link rel="stylesheet" href="css/fontawesome/fontawesome-all.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/tipso.css">
	<link rel="stylesheet" href="css/chosen.css">
	<link rel="stylesheet" href="css/prettyPhoto.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/dashboard.css">
	<link rel="stylesheet" href="css/color.css">
	<link rel="stylesheet" href="css/transitions.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/dbresponsive.css">
	<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	<link rel="stylesheet" href="dist/bootstrap-tagsinput.css">
    <link rel="stylesheet" href="dist/assets/app.css">
	<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

	<link rel="stylesheet" href="dist/bootstrap-tagsinput.css">
        <link rel="stylesheet" href="dist/assets/app.css">
	<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	<?php include('header.php');?>
    <script type="text/javascript" language="javascript">
		
		function validation(){
			var flag=2;
			if(document.forms["register"]["username"].value=="")
			{
				flag=1;
				document.getElementById('username').style.borderColor="red";
			}
			if(document.forms["register"]["email"].value=="")
			{
				flag=1;
				document.getElementById('email').style.borderColor="red";
			}
			var password=document.forms["register"]["pass"].value;
			var cpassword=document.forms["register"]["cpass"].value;


			if(password==""||cpassword==""||cpassword.length<8||cpassword!=password)
			{
		
					flag=1;
					document.getElementById('pass').style.borderColor="red";
					document.getElementById('cpass').style.borderColor="red";
	
			}
			var phno=document.forms["register"]["phno"].value;
			if(phno==""||phno.length!=10)	
			{
				flag=1;
				document.getElementById('phno').style.borderColor="red";

			}	
			if(document.forms["register"]["gender"].value=="")
			{
				flag=1;
				document.getElementById('gend').style.borderColor="red";
			}
			if(document.forms["register"]["skills"].value=="")
			{
				flag=1;
				document.getElementById('skills').style.borderColor="red";
			}

			if(flag==1)
			{		
				alert("somthing wrong"+ flag);		
				return false;
			}
			else{
				registerting();
				function registerting(){
					$(document).ready(function(){
						var file_data = $('#imgfile').prop('files')[0];   
      					var form_data = new FormData();   
      					form_data.append('registordone', document.forms["register"]["username"].value);
      					form_data.append('file', file_data);
      					form_data.append('username', document.forms["register"]["username"].value);
      					form_data.append('email', document.forms["register"]["email"].value);
      					form_data.append('gender', document.forms["register"]["gender"].value);
      					form_data.append('phno', document.forms["register"]["phno"].value);
      					form_data.append('pass', document.forms["register"]["pass"].value);
      					form_data.append('price', document.forms["register"]["price"].value);
      					form_data.append('skills', document.forms["register"]["skills"].value);
						  alert("run");
      					form_data.append('description', document.forms["register"]["message"].value);	
						$.ajax({
							cache: false,
							contentType: false,
							processData: false,
							type: "POST",
							url:"insert.php",
							data:form_data, 
							success:function(data) {
							alert(data);
							}
						});
					});
				}
				alert("register");
			}
				
		}
	</script>

</head>

<body>
<div id="wt-wrapper" class="wt-wrapper wt-haslayout">
		<!-- Content Wrapper Start -->
		<div class="wt-contentwrapper">
			
			<!--Main Start-->
			<main id="wt-main" class="wt-main wt-haslayout">
				
				<!--Register Form Start-->
				<section class="wt-haslayout">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-9">
							<div class="wt-haslayout wt-dbsectionspace">
								<div class="wt-dashboardbox wt-dashboardtabsholder">
									<div class="wt-dashboardboxtitle">
										<h2>User Register</h2>
									</div>
									<div class="wt-tabscontent tab-content">
										<div class="wt-personalskillshold tab-pane active fade show" id="wt-skills">
												<div class="wt-tabscontenttitle">
													<h2>Details</h2>
												</div>
												<form name="register" id="register" action="index.php" onsubmit="return validation()" method="post">
													
														<div class="form-group">
															<input type="text" name="username" id="username" class="form-control" placeholder="Username" require>
														</div>
														<div class="form-group">
															<input type="password" name="pass" id="pass" class="form-control" placeholder="Password">
														</div>
														<div class="form-group">
															<input type="password" name="cpass" id="cpass" class="form-control" placeholder="Confirm-Password">
														</div>
														<div class="form-group">
															<input type="email" name="email" id="email" class="form-control" placeholder="E-mail" require>
														</div>
														<div class="form-group">
															<input type="number" name="phno" id="phno" class="form-control" placeholder="phonenumber" require>
														</div>
														<div class="form-group">
															<input type="text" name="price" id="price" class="form-control" placeholder="Price" require>
														</div>
														<div id="gend"class="form-group form-control">
															<input type="radio" name="gender" id="male" value="male" require> <lable for="male" > Male</label> 
															<input type="radio" name="gender" id="female" value="female" require> <lable for="female"> Female</label>	
														</div>
														<div class="form-group">
															<input type="text" class="form-control" name="skills" id="skills" data-role="tagsinput" value="Skills"/>
														</div>
														<div class="form-group">
															<textarea name="message" class="form-control" placeholder="Your Description"></textarea>
														</div>
														<div class="form-group">
															Profile Photo
															<input class="wt-btn" type="file" name="imgfile" id="imgfile">
														</div>
														<div class="wt-logininfo">
															<input type="submit" class="wt-btn do-login-button" value="register">
														</div>
													
												</form>
										</div>			
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!--Register Form End-->
			</main>
			<!--Main End-->	
		</div>
		<!--Content Wrapper End-->
	</div>               
		
    <script src="js/vendor/jquery-3.3.1.js"></script>
	<script src="js/vendor/jquery-library.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/chosen.jquery.js"></script>
	<script src="js/tilt.jquery.js"></script>
	<script src="js/scrollbar.min.js"></script>
	<script src="js/prettyPhoto.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/readmore.js"></script>
	<script src="js/countTo.js"></script>
	<script src="js/appear.js"></script>
	<script src="js/tipso.js"></script>
	<script src="js/jRate.js"></script>
	<script src="js/main.js"></script>
	<script src="dist/jquery.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="dist/typeahead.bundle.min.js"></script>
    <script src="dist/angular.min.js"></script>
    <script src="dist/bootstrap-tagsinput.min.js"></script>
    <script src="dist/bootstrap-tagsinput-angular.min.js"></script>
    <script src="dist/app.js"></script>
    <script src="dist/assets/app_bs3.js"></script>

</body>

</html>



