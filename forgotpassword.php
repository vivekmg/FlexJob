	
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Profile</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="icon" href="images/fox.png" type="image/x-icon">
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
	<?php include('header.php');?>

    <script type="text/javascript" language="javascript">
		
		function validation(){
			var flag=2;
			if(document.forms["forgot"]["email"].value=="")
			{
				flag=1;
				document.getElementById('email').style.borderColor="red";
			}
			if(document.forms["forgot"]["type"].value=="")
			{
				flag=1;
				document.getElementById('type').style.borderColor="red";
			}
			if(flag==1)
			{		
				alert("somthing wrong");		
				return false;
			}
			else{
				registerting();
				function registerting()
				{
					$(document).ready(function(){
      					var form_data = new FormData();   
      					form_data.append('email', document.forms["forgot"]["email"].value); 
      					form_data.append('type', document.forms["forgot"]["type"].value); 

						$.ajax({
							cache: false,
        					contentType: false,
        					processData: false,
							type: "POST",
							url:"forgot.php",
							data:form_data,
							success:function(data) {
							alert(data);
							}
						});
					});
				}
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
										<h2>Forgot Password</h2>
									</div>
									<div class="wt-tabscontent tab-content">
										<div class="wt-personalskillshold tab-pane active fade show" id="wt-skills">
												<div class="wt-tabscontenttitle">
													<h2>Enter Details</h2>
												</div>
												<form class="wt-formtheme wt-userform" name="forgot" id="forgot" action="index.php" onsubmit="return validation()" method="post">           
														<div class="form-group">
															<input type="email" name="email" id="email" class="form-control" placeholder="E-mail" require>
														</div>
														<span class="wt-radio">
																<input id="F-forgot" class="form-control" type="radio" value="flancer" name="type">
																<label for="F-forgot">Freelance</label><br>
																<input  id="C-forgot" type="radio" value="company" name="type" >
																<label for="C-forgot">Company</label><br>
															</span>
														<div class="wt-logininfo">
															<input type="submit" name="submit" id="submit" class="wt-btn do-login-button" value="Send Email">
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


</body>

</html>



