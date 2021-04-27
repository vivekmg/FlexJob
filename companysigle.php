<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Company Profile</title>
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
	<?php require_once('header.php');
	require_once('taghead.php');
	include('selectdata.php');
	$row =companydata($_GET['coid']);
	$result= $row->fetch_assoc();
	?>
<style>
	.backphoto{
		max-width:1200px;
		max-height:300px;
	}
</style>
<!-- <script type="text/javascript" language="javascript">
		
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
      					form_data.append('c_report',"report");
      					form_data.append('description', document.forms["report"]["r_desc"].value);
      					form_data.append('id',<?php //echo $result["id"];?>);
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
</script> -->
</head>
<body class="wt-login">

	<!-- Wrapper Start -->
	<div id="wt-wrapper" class="wt-wrapper wt-haslayout">
		<!-- Content Wrapper Start -->
		<div class="wt-contentwrapper">
			<!-- Header Start -->
			
			<!--Header End-->
			<!--Inner Home Banner Start-->
			<div class="wt-haslayout wt-innerbannerholder">
				<div class="container">
					<div class="row justify-content-md-center">
						<div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
							<div class="wt-innerbannercontent">
							<div class="wt-title"><h2>Company Detail</h2></div>
							<ol class="wt-breadcrumb">
								<li><a href="index.php">Home</a></li>
								<li class="wt-active">Company</li>
							</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--Inner Home End-->
			<!--Main Start-->
			<main id="wt-main" class="wt-main wt-haslayout wt-innerbgcolor">
				<div class="wt-haslayout wt-main-section">
					<!-- User Listing Start-->
					<div class="wt-haslayout">
						<div class="container">
							<div class="row">
								<div id="wt-twocolumns" class="wt-twocolumns wt-haslayout">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 float-left">
										<div class="wt-comsingleimg">
											<figure>
												<img src="images/upload/<?php echo $result["img"];?>" alt="img description" class="backphoto">
											</figure>
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 float-left">
										<aside id="wt-sidebar" class="wt-sidebar">
											<div class="wt-proposalsr wt-proposalsrvtwo">
												<div class="wt-widgetcontent wt-companysinfo">
													<div style="margin:80px;"></div>
													<div class="wt-title">
														<?//if($result["approve"]==1):?>
														<!-- <a href="javascript:void(0);"><i class="fa fa-check-circle"></i> Verified Company</a> -->
														<?//endif;?>
														<a><i class="fa fa-check-circle"></i> Verified Company</a>
														<h2><?php echo $result["name"];?></h2><br>
														<p>E-mail: <?php echo $result["email"] ?></p>
													</div>	
												</div>
											</div>
											<!-- <?php //if(isset($_COOKIE["uid"])):?>
											<div class="wt-widget wt-reportjob">
												<div class="wt-widgettitle">
													<h2>Report This Company</h2>
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
									<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 float-left">
										<div class="wt-userlistingholder wt-haslayout">
											<div class="wt-comcontent">
												<div class="wt-title">
													<h3>About “<?php echo $result["name"];?>”</h3>
												</div>
												<div class="wt-description">
													<p><?php echo $result["description"];?></p>
												</div>
											</div>
											<?php $jrow=jobdata($_GET['coid']);
												while($jresult = $jrow->fetch_assoc()):
											?>
											<div class="wt-userlistinghold wt-featured wt-userlistingholdvtwo">
												<div class="wt-userlistingcontent">
													<div class="wt-contenthead">
														<div class="wt-title">
															<h2><?php echo $jresult["name"];?></h2>
														</div>
														<div class="wt-description">
															<p><?php echo $jresult["description"];?><p>
														</div>
														<div class="wt-tag wt-widgettag">
															<?php  $skills = explode(',',$jresult["skills"]);
																	while(list($s,$val)=each($skills)):?>
															<a><?php echo $val?></a>
																	<?php endwhile;?>
														</div>
													</div>
													<div class="wt-viewjobholder">
														<ul>
															<li><span><i class="far fa-folder wt-viewjobfolder"></i>Type: <?php echo $jresult["type"];?></span></li>
															<li><span><i class="far fa-clock wt-viewjobclock"></i>Duration:<?php echo $jresult["duration"];?></span></li>
															<li><span><i class="far  fa fa-dollar wt-viewjobclock"></i>Budget:<?php echo $jresult["price"];?></span></li>

															<!-- <li><span><i class="far wt-viewjobclock"></i>Status:
															<?php //if($jresult["status"]==0)
																// {
																// 	echo "Ready to apply";
																// } else if($jresult["status"]==1)
																// {
																// 	echo "Ongoing";
																// }else  if($jresult["status"]==2)
																// {
																// 	echo "Compalited";
																// }
															?></span></li> -->

															<!-- <li><a href="javascript:void(0);" class="wt-clicklike wt-clicksave"><i class="fa fa-heart"></i> Save</a></li> -->
															<li class="wt-btnarea"><a href="jobsingle.php?jid=<?php echo $jresult["jid"];?>" class="wt-btn">View Job</a></li>
														</ul>
													</div>
												</div>
											</div>
											<?php endwhile;?>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- User Listing End-->
				</div>
			</main>
			<!--Main End-->
			<?php require('footer.php');?>
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
	<?php require_once('tagsfooter.php');?>
</body>

</html>