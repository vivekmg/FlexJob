<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->



<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Profile</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="icon" href="images/fox.png" type="image/x-icon">
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
	<?php require_once('header.php');
	include('profiledata.php');
	$row = profiledata();
	?>
<script type="text/javascript" language="javascript">
		
		function updation(){
			var flag=2;
			if(document.forms["profiledata"]["fname"].value=="")
			{
				flag=1;
				document.getElementById('fname').style.borderColor="red";
			}
			var phno=document.forms["profiledata"]["phno"].value
			if(phno==""||phno.length!=10)
			{
				flag=1;
				document.getElementById('phno').style.borderColor="red";
			}
			if(document.forms["profiledata"]["email"].value=="")
			{
				flag=1;
				document.getElementById('email').style.borderColor="red";
			}
			if(document.forms["profiledata"]["employ"].value=="")
			{
				flag=1;
				document.getElementById('employ').style.borderColor="red";
			}
			if(document.forms["profiledata"]["message"].value=="")
			{
				flag=1;
				document.getElementById('message').style.borderColor="red";
			}
			var passwordc=document.forms["profiledata"]["password"].value;
			var password=document.forms["profiledata"]["cpassword"].value;

			if(passwordc==""||passwordc.length<8||passwordc!=password)
			{
				flag=1;
				document.getElementById('password').style.borderColor="red";
				document.getElementById('cpassword').style.borderColor="red";

			}
			if(flag==1)
			{		
				alert("somthing wrong"+ flag);		
				return false;
			}
			else{
				registerting();
			
				function registerting()
				{
					$(document).ready(function(){
					
					var file_data = $('#imgfile').prop('files')[0];  
					  var form_data = new FormData();   
					  form_data.append('companyprofile', document.forms["profiledata"]["fname"].value);
					  form_data.append('file', file_data);
					form_data.append('username', document.forms["profiledata"]["fname"].value);
					  form_data.append('phno', document.forms["profiledata"]["phno"].value);
					  form_data.append('employes', document.forms["profiledata"]["employ"].value);
					  form_data.append('description', document.forms["profiledata"]["message"].value);
					  form_data.append('password', document.forms["profiledata"]["password"].value);


					$.ajax({
						cache: false,
						contentType: false,
						processData: false,
						type: "POST",
						url:"updatedata.php",
						data:form_data, 
						success:function(data) {
						alert(data);
						}
					});
				});
				}
				alert("update");
			}
				
		}
	</script>

</head>
<body class="wt-login">

	<!-- Wrapper Start -->
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
										<h2>Company Profile</h2>
									</div>
									<div class="wt-tabscontent tab-content">
										<div class="wt-personalskillshold tab-pane active fade show" id="wt-skills">
												<div class="wt-tabscontenttitle">
													<h2>Company Details</h2>
												</div>
											<form name="profiledata" id="profiledata" class="wt-formtheme wt-userform" method="post" onsubmit="return updation()">
												<div class="wt-yourdetails wt-tabsinfo">	
													<fieldset>
														<div class="form-group form-group-half">
                                                            Name
															<input type="text" name="fname" id="fname" class="form-control" value="<?php echo $row["name"];?>" placeholder="First Name">
														</div>
														<div class="form-group form-group-half">
                                                            Phono Number
															<input type="number" name="phno" id="phno" class="form-control" placeholder="Phone Number"value="<?php echo $row["phno"];?>" pattern="[0-9]{10}" required>
														</div>
														<div class="form-group form-group-half">
                                                            E-mail
															<input type="email" name="email"  id="email" class="form-control" placeholder="Email" value="<?php echo $row["email"];?>"readonly>
                                                        </div>
                                                        <div class="form-group form-group-half">
                                                            Employe number
                                                            <input type="number" name="employ"  id="employ" class="form-control" placeholder="Employ No" value="<?php echo $row["employes"];?>">
														</div>
														<div class="form-group">
                                                            Description
															<textarea name="message" id="message" class="form-control" placeholder="Description"><?php echo $row["description"];?></textarea>
														</div>
														<div class="form-group form-group-half">
                                                            Password
                                                            <input type="password" name="password"  id="password" class="form-control" placeholder="Password" value="<?php echo $row["password"];?>">
														</div>
														<div class="form-group form-group-half">
                                                            Confirm-Password
                                                            <input type="password" name="cpassword"  id="cpassword" class="form-control" placeholder="Password" value="<?php echo $row["password"];?>">
														</div>
													</fieldset>
												</div>
													<div class="wt-profilephoto wt-tabsinfo">
														<div class="wt-tabscontenttitle">
															<h2>Profile Photo</h2>
														</div>
														<div class="wt-profilephotocontent">
															<div class="form-group form-group-label">
																<div class="wt-labelgroup">
																	<input class="wt-btn" type="file" name="imgfile" id="imgfile">
																</div>
															</div>
														</div>
													</div>
													<div class="wt-updatall">
													<input type="submit" id="upadte" name="update" class="wt-btn" value="Save&Upadte">
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
	<!--Wrapper End-->
	<script src="js/vendor/jquery-3.3.1.js"></script>
	<script src="js/vendor/jquery-library.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<!-- <script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en"></script> -->
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.sortable.js"></script>
	<script src="js/chosen.jquery.js"></script>
	<script src="js/tilt.jquery.js"></script>
	<script src="js/scrollbar.min.js"></script>
	<script src="js/prettyPhoto.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/readmore.js"></script>
	<script src="js/countTo.js"></script>
	<script src="js/appear.js"></script>
	<script src="js/tipso.js"></script>
	<script src="js/gmap3.js"></script>
	<script src="js/jRate.js"></script>
	<script src="js/main.js"></script>
	<script>
		const menu_icon = document.querySelector('.menu-icon');
		function addClassFunThree() {
	        this.classList.toggle("click-menu-icon");
	    }
	    menu_icon.addEventListener('click', addClassFunThree);
	</script>
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