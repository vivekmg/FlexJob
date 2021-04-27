<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->


<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Users</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="icon" href="images/fox.png" type="image/x-icon">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/scrollbar.css">
	<link rel="stylesheet" href="css/fontawesome/fontawesome-all.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/tipso.css">
	<link rel="stylesheet" href="css/chosen.css">
	<link rel="stylesheet" href="css/prettyPhoto.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/color.css">
	<link rel="stylesheet" href="css/transitions.css">
	<link rel="stylesheet" href="css/responsive.css">
	<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>


	<?php require('header.php');
	include('selectdata.php');
	$row=userdata($_GET["uid"]);
	$exrow=exdata($_GET["uid"]);
	$edurow=edudata($_GET["uid"]);
	$result= $row->fetch_assoc();
	$projects = selectproejcts($_GET["uid"]);
	if($result["img"]=="")
	{
		$location="images/upload/default.jpg";
	}
	else
	{
		$location="images/upload/".$result["img"];
	}
	?>
<script type="text/javascript" language="javascript">
		
		function sendreport(){
			if(document.forms["report"]["r_desc"].value=="")
			{
				document.getElementById('r_desc').style.borderColor="red";
			}
			else
			{
				reporting();
				function reporting(){
					$(document).ready(function(){
      					var form_data = new FormData();   
      					form_data.append('u_report',"report");
      					form_data.append('description', document.forms["report"]["r_desc"].value);
      					form_data.append('id',<?php echo $result["uid"];?>);
						$.ajax({
							cache: false,
							contentType: false,
							processData: false,
							type: "POST",
							url:"reports.php",
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
<body class="wt-login">

	<!-- Preloader Start -->
	<div class="preloader-outer">
		<div class="loader"></div>
	</div>
	<!-- Preloader End -->
	<!-- Wrapper Start -->
	<div id="wt-wrapper" class="wt-wrapper wt-haslayout">
		<!-- Content Wrapper Start -->
		<div class="wt-contentwrapper">
			
			<!--Inner Home Banner Start-->
			<div class="wt-haslayout wt-innerbannerholder wt-innerbannerholdervtwo">
				<div class="container">
					<div class="row justify-content-md-center">
						<div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
						</div>
					</div>
				</div>
			</div>
			<!--Inner Home End-->
			<!--Main Start-->
			<main id="wt-main" class="wt-main wt-haslayout wt-innerbgcolor">
				<!-- User Profile Start-->
				<div class="wt-main-section wt-paddingtopnull wt-haslayout">
					<div class="container">
						<div class="row">	
							<div class="col-12 col-sm-12 col-md-12 col-lg-12 float-left">
								<div class="wt-userprofileholder">
									<div class="col-12 col-sm-12 col-md-12 col-lg-3 float-left">
										<div class="row">
											<div class="wt-userprofile">
							
												<figure>
												<img src="<?php echo $location;?>" alt="image description" style="margin-left:45px; vertical-align: middle; width:165px; height:165px; border-radius: 5%;">
												</figure>
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-12 col-md-12 col-lg-9 float-left">
										<div class="row">
											<div class="wt-proposalhead wt-userdetails">
											<h2><?php //if($result["approve"]==1):?>
												<!-- <i class="fa fa-check-circle"></i> --><?php //endif;?> 
												<?php echo $result["name"]; ?>
											</h2>
												<ul class="wt-userlisting-breadcrumb wt-userlisting-breadcrumbvtwo">
													<li><span><i class="far fa-money-bill-alt"></i> <?php echo "$".$result["price"]; ?>/ hr</span></li>
													<li>Email: <?php echo $result["email"]; ?></li>
													<!-- <li><a href="javascript:void(0);" class="wt-clicksave"><i class="fa fa-heart"></i> Save</a></li> -->
												</ul>
												<div class="wt-description">
													<p><?php echo $result["description"]; ?></p>
												</div>
											</div>
											<!-- <div id="wt-statistics" class="wt-statistics wt-profilecounter">
												<div class="wt-statisticcontent wt-countercolor1">
													<h3 data-from="0" data-to="<?php //echo $projects["0"];?>" data-speed="800" data-refresh-interval="03">03</h3>
													<h4>Ongoing <br>Projects</h4>
												</div>
												<div class="wt-statisticcontent wt-countercolor2">
													<h3 data-from="0" data-to="<?php //echo $projects["1"];?>" data-speed="800" data-refresh-interval="02">1503</h3>
													<h4>Completed <br>Projects</h4>
												</div>
												<div class="wt-statisticcontent wt-countercolor4">
													<h3 data-from="0" data-to="<?php //echo $projects["2"];?>" data-speed="800" data-refresh-interval="02">02</h3>
													<h4>Cancelled <br>Projects</h4>
												</div>
											
											</div> -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- User Profile End-->
					<!-- User Listing Start-->
					<div class="container">
						<div class="row">
							<div id="wt-twocolumns" class="wt-twocolumns wt-haslayout">
								<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 float-left">
									<div class="wt-usersingle">
										<!-- <div class="wt-clientfeedback">
											<div class="wt-usertitle wt-titlewithselect">
												<h2>Project List</h2>												
											</div>
											<div class="wt-userlistinghold wt-userlistingsingle wt-bgcolor">	
												<figure class="wt-userlistingimg">
													<img src="images/client/img-01.jpg" alt="image description">
												</figure>
												<div class="wt-userlistingcontent">
													<div class="wt-contenthead">
														<div class="wt-title">
															<a href="javascript:void(0);"><i class="fa fa-check-circle"></i> Themeforest Company</a>
															<h3>Translation and Proof Reading (Multi Language)</h3>
														</div>
														<ul class="wt-userlisting-breadcrumb">
															<li><span><i class="fas fa-spinner fa-spin"></i> In Progress</span></li>
														</ul>
													</div>
												</div>
											</div>
										</div> -->
										
										<div class="wt-experience">
											<div class="wt-usertitle">
												<h2>Experience</h2>
											</div>
											<div class="wt-experiencelisting-hold">
											<?php while($exresult=$exrow->fetch_assoc()):?>
												<div class="wt-experiencelisting wt-bgcolor">
													<div class="wt-title">
														<h3><?php echo $exresult["post"];?></h3>
													</div>
													<div class="wt-experiencecontent">
														<ul class="wt-userlisting-breadcrumb">
															<li><span><i class="far fa-building"></i><?php echo " ". $exresult["c_name"];?></span></li>
															<li><span><i class="far fa-calendar"></i> <?php echo $exresult["s_date"];?> - <?php echo $exresult["l_date"];?></span></li>
														</ul>
														<div class="wt-description">
															<p><?php echo $exresult["description"];?></p>
														</div>
													</div>
												</div>
											<?php endwhile;?>	
												<div class="divheight"></div>
											</div>
										</div>
										<div class="wt-experience wt-education">
											<div class="wt-usertitle">
												<h2>Education</h2>
											</div>
											<div class="wt-experiencelisting-hold">
											<?php while($edu=$edurow->fetch_assoc()):?>
												<div class="wt-experiencelisting wt-bgcolor">
													<div class="wt-title">
														<h3><?php echo $edu["course"];?></h3>
													</div>
													<div class="wt-experiencecontent">
														<ul class="wt-userlisting-breadcrumb">
															<li><span><i class="far fa-building"></i><?php echo $edu["university"];?></span></li>
															<li><span><i class="far fa-calendar"></i> <?php echo $edu["p_year"];?> </span></li>
														</ul>
														<div class="wt-description">
															<p>“ <?php echo $edu["description"];?>  ”</p>
														</div>
													</div>
												</div>
											<?php endwhile;?>
												<div class="divheight"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 float-left">
									<aside id="wt-sidebar" class="wt-sidebar">
										<div id="wt-ourskill" class="wt-widget">
											<div class="wt-widgettitle">
												<h2>My Skills</h2>
											</div>
											<div class="wt-widgetcontent wt-skillscontent">
												<div class="wt-skillholder" data-percent="50%">
													<span><?php echo $result["skills"];?></span>
												</div>
												
											</div>
										</div>
										<!-- <?php //if(isset($_COOKIE["uid"])):?>
											<div class="wt-widget wt-reportjob">
												<div class="wt-widgettitle">
													<h2>Report This User</h2>
												</div>
												<div class="wt-widgetcontent">
													<form class="wt-formtheme wt-formreport" name="report" id="report" onsubmit="return sendreport()" method="post">
														<fieldset>
															<div class="form-group">
																<textarea name="r_desc" id="r_desc" class="form-control" placeholder="Description"></textarea>
															</div>
															<div class="form-group wt-btnarea">
																<input type="submit" name="sreport" class="wt-btn" value="Submit">
															</div>
														</fieldset>
													</form>
												</div>
											</div>
										<?php //endif;?> -->
									</aside>
								</div>
							</div>
						</div>
					</div>
					<!-- User Listing End-->
				</div>
			</main>
			<!--Main End-->
			<?php include('footer.php');?>

		</div>
		<!--Content Wrapper End-->
	</div>
	<!--Wrapper End-->
	
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