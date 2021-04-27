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
			}
			var phno=document.forms["profiledata"]["phno"].value;
			if(phno==""||phno.length!=10)
			{
				flag=3;
			}
			if(document.forms["profiledata"]["email"].value=="")
			{
				flag=4;
			}
			var pass=document.forms["profiledata"]["pass"].value;
			var cpass=document.forms["profiledata"]["cpass"].value;

			if(cpass!=pass||pass.length<8)
			{
				flag=1;
			}
			if(document.forms["profiledata"]["rate"].value=="")
			{
				flag=1;
			}
			if(document.forms["profiledata"]["message"].value=="")
			{
				flag=1;
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
      					form_data.append('profileupdate', document.forms["profiledata"]["fname"].value);
      					form_data.append('file', file_data);
						form_data.append('username', document.forms["profiledata"]["fname"].value);
      					form_data.append('phno', document.forms["profiledata"]["phno"].value);
      					form_data.append('price', document.forms["profiledata"]["rate"].value);
      					form_data.append('description', document.forms["profiledata"]["message"].value);
						form_data.append('skills', document.forms["profiledata"]["skills"].value);
						form_data.append('password', document.forms["profiledata"]["pass"].value);

	
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

		function addexpreence()
		{
			var flag=2;
			if(document.forms["exinfo"]["companyname"].value=="")
			{
				flag=1;
			}
			if(document.forms["exinfo"]["sdate"].value=="")
			{
				flag=1;
			}
			if(document.forms["exinfo"]["edate"].value=="")
			{
				flag=1;
			}
			if(document.forms["exinfo"]["jobtitle"].value=="")
			{
				flag=1;
			}
			if(document.forms["exinfo"]["message"].value=="")
			{
				flag=1;
			}
			if(flag==1)
			{
				return false;
			}else{
				addexpre();
				function addexpre()
				{
					jQuery.ajax({
						type: "POST",
						url:"insert.php",
						data: {addexprence:"update", cname:document.forms["exinfo"]["companyname"].value,
													sdate:document.forms["exinfo"]["sdate"].value,
													edate:document.forms["exinfo"]["edate"].value,
													jobtitle:document.forms["exinfo"]["jobtitle"].value,
													description:document.forms["exinfo"]["message"].value}, 
						success:function(data) {
						alert(data);
						}
					});
				}
			}
		}
		function addeduca()
		{
			var flag=2;
			
			if(document.forms["eduinfo"]["university"].value=="")
			{
				flag=1;
			}
			if(document.forms["eduinfo"]["passing"].value=="")
			{
				flag=1;
			}
			if(document.forms["eduinfo"]["course"].value=="")
			{
				flag=1;
			}

			if(document.forms["eduinfo"]["message"].value=="")
			{
				flag=1;
			}
			if(flag==1)
			{
				return false;
			}else{
				addedu();
				function addedu()
				{
					
					alert("heloo");
					jQuery.ajax({
						type: "POST",
						url:"insert.php",
						data: {addeducation:"education", uname:document.forms["eduinfo"]["university"].value,
													passing:document.forms["eduinfo"]["passing"].value,
													course:document.forms["eduinfo"]["course"].value,
													description:document.forms["eduinfo"]["message"].value}, 
						success:function(data) {
						alert(data);
						}
					});
				}
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
										<h2>My Profile</h2>
									</div>
							
									<div class="wt-dashboardtabs">
										<ul class="wt-tabstitle nav navbar-nav">
											<li class="nav-item">
												<a class="active" data-toggle="tab" href="#wt-skills">Personal Details &amp; Skills</a>
											</li>
											<li class="nav-item"><a data-toggle="tab" href="#wt-education">Experience &amp; Education</a></li>
										</ul>
									</div>
									
									<div class="wt-tabscontent tab-content">
										<div class="wt-personalskillshold tab-pane active fade show" id="wt-skills">
												<div class="wt-tabscontenttitle">
													<h2>Your Details</h2>
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
															<input type="number" name="phno" id="phno" class="form-control" placeholder="Phone Number"value="<?php echo $row["phno"];?>"required>
														</div>
														<div class="form-group form-group-half">
															E-mail
															<input type="email" name="email"  id="email" class="form-control" placeholder="Email" value="<?php echo $row["email"];?>"readonly>
														</div>
															<div class="form-group form-group-half">
																Rate
																<input type="number" name="rate" id="rate" class="form-control"value="<?php echo $row["price"];?>" placeholder="Your Service Hourly Rate ($)">
															</div>
														<div class="form-group form-group-half">
															Password
															<input type="password" name="pass" id="pass" class="form-control" placeholder="Password"value="<?php echo $row["password"];?>"required>
														</div>
														<div class="form-group form-group-half">
															Confirm-Password
															<input type="password" name="cpass" id="cpass" class="form-control" placeholder="Password"value="<?php echo $row["password"];?>"required>
														</div>
														<div class="form-group">
															Description
															<textarea name="message" id="message" class="form-control" placeholder="Description"><?php echo $row["description"];?></textarea>
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
														<?php if($_COOKIE["type"]!="company"):?>
														<div class="wt-tabscontenttitle">
															<h2>My Skills</h2>
														</div>
														<div class="wt-skillscontent-holder">
															<div class="wt-myskills">
																<ul class="sortable list">
																<?php  $skills = explode(',',$row["skills"]);
																	while(list($s,$val)=each($skills)):?>
													
																	<li>
																		<span class="skill-dynamic-html"><?php echo $val?></span>
																	</li>
																	<?php endwhile;?>
																</ul>
															</div>
															<fieldset>
															<div class="form-group wt-btnarea">
																<a class="wt-btn" id="skillarea" data-toggle="collapse" data-target="#addskills" aria-expanded="true">Add Skills</a>
															</div>
															<div class="wt-collapseexp collapse" id="addskills" aria-labelledby="skillarea" data-parent="#wt-btnarea">
																<input type="text" name="skills" id="skills" class="form-control" value="<?php echo $row["skills"];?> " data-role="tagsinput">
															</div>
														</fieldset>
														</div>
														<?php endif;?>
													</div>
													<div class="wt-updatall">
														<i class="ti-announcement"></i>
														<span>Update all the latest changes made by you, by just clicking on “Save &amp; Continue” button.</span>
														<input type="submit" id="upadte" name="update" class="wt-btn" value="Save&Upadte">
													</div>
											</form>
										</div>
										<div class="wt-educationholder tab-pane fade" id="wt-education">
											<div class="wt-userexperience wt-tabsinfo">
												<div class="wt-tabscontenttitle wt-addnew">
													<h2>Add Your Experience</h2>
												</div>
												<ul class="wt-experienceaccordion accordion">
													<?php $exrow=exdata($_COOKIE["uid"]);?>
													<?php while($exresult=$exrow->fetch_assoc()):?>
													<li>
														<div class="wt-accordioninnertitle">
															<span id="accordioninnertitle" data-toggle="collapse" data-target="#innertitle"><?php echo $exresult["post"];?> (<?php echo date("F Y",strtotime($exresult["s_date"]))." -- ".date("F Y",strtotime($exresult["l_date"]));?>)</em></span>
															<!-- <div class="wt-rightarea">
																<a href="profiledata.php?delete=ex&id=<?php //echo $exresult["id"];?>" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
															</div> -->
														</div>
													</li>
													<?php endwhile;?>
												</ul>
												<div class="wt-addnew form-group">
													<br><a class="wt-btn"  id="accordioninnertitle" data-toggle="collapse" data-target="#addexprience" aria-expanded="true">Add New</a>
												</div>
												<div class="wt-collapseexp collapse" id="addexprience" aria-labelledby="accordioninnertitle" data-parent="#accordion">
													<form class="wt-formtheme wt-userform" name="exinfo" id="exinfo" onsubmit="return addexpreence()" method="post">
														<fieldset>
															<div class="form-group form-group-half">
																<input type="text" name="companyname" class="form-control" placeholder="Company Title">
															</div>
															<div class="form-group form-group-half">
																<input type="date" name="sdate" class="form-control" placeholder="Starting Date">
															</div>
															<div class="form-group form-group-half">
																<input type="date" name="edate" class="form-control" placeholder="Ending Date *">
															</div>
															<div class="form-group form-group-half">
																<input type="text" name="jobtitle" class="form-control" placeholder="Your Job Title">
															</div>
															<div class="form-group">
																<textarea name="message" class="form-control" placeholder="Your Job Description"></textarea>
															</div>
															<div class="form-group">
																<span>* Leave ending date empty if its your current job</span>
															</div>
																<input type="submit" id="addex" name="addex" class="wt-btn" value="Add">
															</fieldset>
														</form>
													</div>
											</div>
											<div class="wt-userexperience">
												<div class="wt-tabscontenttitle wt-addnew">
													<h2>Add Your Education</h2>
												</div>
												<ul class="wt-experienceaccordion accordion">
												<?php $edurow=edudata($_COOKIE["uid"]);?>
													<?php while($eduresult=$edurow->fetch_assoc()):?>
													<li>
														<div class="wt-accordioninnertitle">
															<span id="accordioninnertitle1" data-toggle="collapse" data-target="#innertitle1"><?php echo $eduresult["course"];?><em>(<?php echo date("F Y",strtotime($eduresult["p_year"]));?>)</em></span>
															<!-- <div class="wt-rightarea">
																<a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
															</div> -->
														</div>
													</li>
													<?php endwhile;?>
												</ul>
												<div class="wt-addnew form-group">
													<br><a class="wt-btn"  id="accordioninnertitlea" data-toggle="collapse" data-target="#addeducation" aria-expanded="true">Add New</a>
												</div>
												<div class="wt-collapseexp collapse" id="addeducation" aria-labelledby="accordioninnertitlea" data-parent="#accordion">
													<form class="wt-formtheme wt-userform" name="eduinfo" id="eduinfo" onsubmit="return addeduca()" method="post">
														<fieldset>
															<div class="form-group form-group-half">
																<input type="text" name="university" class="form-control" placeholder="University Name">
															</div>
															<div class="form-group form-group-half">
																<input type="date" name="passing" class="form-control" placeholder="Passing Date">
															</div>
															<div class="form-group form-group-half">
																<input type="text" name="course" class="form-control" placeholder="Your course title">
															</div>
															<div class="form-group">
																<textarea name="message" class="form-control" placeholder="Your Course Description"></textarea>
															</div>
															<div class="form-group">
																<span>* Leave ending date empty if its your current education</span>
															</div>
															<div class="form-group form-group-half">
																<input type="submit" id="addedu" name="addedu" class="wt-btn" value="Add">
															</div>
														</fieldset>
													</form>
												</div>
											</div>
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
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en"></script>
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