<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->


<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Post Jobs</title>
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
	
        <link rel="stylesheet" href="dist/bootstrap-tagsinput.css">
        <link rel="stylesheet" href="dist/assets/app.css">
	<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	<?php require_once('header.php');
	include('selectdata.php');
	$row =selectctegories();?>
	<script type="text/javascript" language="javascript">
		
		function validation(){
			var flag=2;
			if(document.forms["postjob"]["title"].value=="")
			{
				flag=1;
				document.getElementById('title').style.borderColor="red";
			}
			if(document.forms["postjob"]["type"].value=="")
			{
				flag=1;
				document.getElementById('type').style.borderColor="red";
			}
			if(document.forms["postjob"]["price"].value=="")
			{
				flag=1;
				document.getElementById('price').style.borderColor="red";
			}
			if(document.forms["postjob"]["duration"].value=="")
			{
				flag=1;
				document.getElementById('duration').style.borderColor="red";
			}
			if(document.forms["postjob"]["description"].value=="")
			{
				flag=1;
				document.getElementById('description').style.borderColor="red";
			}
			if(document.forms["postjob"]["description"].value=="")
			{
				flag=1;
				document.getElementById('description').style.borderColor="red";
			}
			if(document.forms["postjob"]["skills"].value=="")
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
				function registerting()
				{
					jQuery.ajax({
						type: "POST",
						url:"insert.php",
						data:{postjobs:"jobs", jname:document.forms["postjob"]["title"].value,
													type:document.forms["postjob"]["type"].value,
													price:document.forms["postjob"]["price"].value,
													duration:document.forms["postjob"]["duration"].value,
													description:document.forms["postjob"]["description"].value,
													skills:document.forms["postjob"]["skills"].value,
													catg:document.forms["postjob"]["catg"].value}, 
						success:function(data) {
						alert(data);
						}
					});
				}
				alert("jobpost");
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
				<section class="wt-haslayout wt-dbsectionspace">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-6 float-left">
							<div class="wt-dashboardbox">
								<div class="wt-dashboardboxtitle">
									<h2>Post a Job</h2>
								</div>
								<div class="wt-dashboardboxcontent">
									<div class="wt-jobdescription wt-tabsinfo">
										<div class="wt-tabscontenttitle">
											<h2>Job Description</h2>
										</div>
										<form name="postjob" onsubmit="return validation()" id="postjob" method="post" class="wt-formtheme wt-userform wt-userformvtwo">
											<fieldset>
												<div class="form-group">
													<input type="text" name="title" id="title" class="form-control" placeholder="Job Title">
												</div>
												<div class="form-group form-group-half wt-formwithlabel">
													<span class="wt-select">
														<label for="selectoption">Job Type:</label>
														<select id="type" name="type">
															<option value="fixed">Fixed</option>
															<option value="hourly">Hourly</option>
														</select>
													</span>
												</div>
												<div class="form-group form-group-half wt-formwithlabel">
													<input type="number" name="price" id="price" class="form-control" placeholder="Budget">
												</div>
												<div class="form-group form-group-half wt-formwithlabel">
													<input type="text" id="duration" class="form-control" name="duration" placeholder="Duration">
												</div>
												<div class="form-group form-group-half wt-formwithlabel">
													<span class="wt-select">
														<label for="selectoption">Project Type:</label>
														<select id="catg" name="catg">
															<?php while($result=$row->fetch_assoc()):?>
															<option value="IT"><?php echo $result["name"];?></option>
															<?php endwhile;?>
														</select>
													</span>
												</div>
											</fieldset>
									</div>
									<div class="wt-jobdetails wt-tabsinfo">
										<div class="wt-tabscontenttitle">
											<h2>Job Details</h2>
										</div>
										<div class="form-group">
												<textarea name="description" id="description" class="form-control" placeholder="Description"></textarea>
										</div>	
									</div>
									<div class="wt-jobskills wt-tabsinfo">
										<div class="wt-tabscontenttitle">
											<h2>Skills Required</h2>
										</div>
										<div class="form-group">
												<input type="text" class="form-control" name="skills" id="skills" value="php" data-role="tagsinput" />
										</div>
												<div class="form-group wt-btnarea">
													<a href="javascript:void(0);" class="wt-btn">Add Skills</a>
												</div>
												<div class="form-group wt-myskills">
												</div>
												<div class="wt-updatall">
													<i class="ti-announcement"></i>
													<span>Post job by just clicking on “Post Job Now” button.</span>
													<input type="submit" class="wt-btn" value="Post Job">
												</div>
										</form>
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
	<script src="js/tinymce/tinymce.min4bb5.js?apiKey=4cuu2crphif3fuls3yb1pe4qrun9pkq99vltezv2lv6sogci"></script>
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
	   // menu_icon.addEventListener('click', addClassFunThree);
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