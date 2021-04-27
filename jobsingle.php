<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->


<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Job single</title>
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
	<link rel="stylesheet" href="css/dbresponsive.css">
	<link rel="stylesheet" href="css/dashboard.css">
	<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	<?php require('header.php');
	include('bidacction.php');
	$rows=jobdetails($_GET['jid']);
	$result=$rows->fetch_assoc();
	?>

<script type="text/javascript" language="javascript">
		var flag=2;		
		function sendproposal(){
			if(document.forms["sendpro"]["amount"].value=="")
			{
				flag=1;
			}
			if(document.forms["sendpro"]["duration"].value=="")
			{
				flag=1;
			}
			if(document.forms["sendpro"]["message"].value=="")
			{
				flag=1;
			}

			if(flag==1)
			{
				alert("smothing worng");
			}
			else{
				registerting();
					function registerting()
					{
						jQuery.ajax({
							type: "POST",
							url:"bidacction.php",
							data: {sendproposal:"proposal", amount:document.forms["sendpro"]["amount"].value,
														duration:document.forms["sendpro"]["duration"].value,
														message:document.forms["sendpro"]["message"].value,
														jid:<?php echo $_GET["jid"]?>
														}, 
							success:function(data) {
							alert(data);
							}
						});
					}
			}
		}
	</script>
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
      					form_data.append('j_report',"report");
      					form_data.append('description', document.forms["report"]["r_desc"].value);
      					form_data.append('id',<?php echo $result["jid"];?>);
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
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<!-- Wrapper Start -->
	<div id="wt-wrapper" class="wt-wrapper wt-haslayout">
		<!-- Content Wrapper Start -->
		<div class="wt-contentwrapper">

			<!--Inner Home Banner Start-->
			<div class="wt-haslayout wt-innerbannerholder">
				<div class="container">
					<div class="row justify-content-md-center">
						<div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
							<div class="wt-innerbannercontent">
							<div class="wt-title"><h2>Job Detail</h2></div>
							<ol class="wt-breadcrumb">
								<li><a href="index.php">Home</a></li>
								<li><a href="joblisting.php">Jobs</a></li>
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
					
					<div class="container">
						<div class="row">
							<div id="wt-twocolumns" class="wt-twocolumns wt-haslayout">
								<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 float-left">
									<div class="wt-proposalholder">
										<div class="wt-proposalhead">
											<h2><?php echo $result["name"];?></h2>
											<ul class="wt-userlisting-breadcrumb wt-userlisting-breadcrumbvtwo">
												<li><span><i class="far fa-folder"></i> Categories: <?php echo $result["categories"];?></span></li>
												<li><span><i class="far fa-clock"></i> Duration: <?php echo $result["duration"];?></span></li>
												<li><span><i class="far fa-money-bill-alt"></i> Budget: <?php echo $result["price"];?>$</span></li>
												<li><span><i class="far fa-folder"></i> Type: <?php echo $result["type"];?></span></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 float-left">
									<div class="wt-projectdetail-holder">
										<div class="wt-projectdetail">
											<div class="wt-title">
												<h3>Project Detail</h3>
											</div>
											<div class="wt-description">
												<p><?php echo $result["description"];?></p>
											</div>
										</div>
										<div class="wt-skillsrequired">
											<div class="wt-title">
												<h3>Skills Required</h3>
											</div>
											<div class="wt-tag wt-widgettag">
											<?php  $skills = explode(',',$result["skills"]);
											while(list($s,$val)=each($skills)):?>
												<a><?php echo $val?></a>
											<?php endwhile;?>	
											</div>
										</div>
										<!-- <?php //if(isset($_COOKIE["type"])&&$_COOKIE["type"]=="flancer"):
											//$r=checkapply($_GET["jid"],$_COOKIE["uid"]);?>
											<div class="wt-addnew form-group">
												<?php //if($result["status"]==2):?>
													<br><a class="wt-btn">Job completed</a>
												<?php //elseif($r=="true"):?>
														<br><a class="wt-btn">Applied</a>
												<?php //elseif(isset($_COOKIE["type"])=="flancer"):?>
														<br><a class="wt-btn"  id="accordioninnertitle" data-toggle="collapse" data-target="#addexprience" aria-expanded="true">Send Proposal</a>
												<?php //endif;?>
											</div>
										<?php //endif;?> -->

											<div class="wt-collapseexp collapse" id="addexprience" aria-labelledby="accordioninnertitle" data-parent="#accordion">
												<form class="wt-formtheme wt-userform" action="jobsingle.php?jid=<?php echo $_GET["jid"]?>" name="sendpro" id="sendpro" onsubmit="return sendproposal()" method="post">
													<fieldset>
														<div class="form-group form-group-half">
															<input type="number" name="amount" class="form-control" placeholder="Enter Your Proposal Amount">
														</div>				
														<div class="form-group form-group-half">
															<input type="text" name="duration" class="form-control" placeholder="Duration">
														</div>
														<div class="form-group">
															<textarea name="message" class="form-control" placeholder="Your Job Description"></textarea>
														</div>
														<div class="form-group">
														</div>
														<div class="form-group form-group-half">
															<input type="submit" id="addex" name="addex" class="wt-btn" value="Send">
														</div>
													</fieldset>
												</form>
											</div>				
									</div>
								</div>
							
								<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 float-left">
									<aside id="wt-sidebar" class="wt-sidebar">
										
										<div class="wt-widget wt-companysinfo-jobsingle">
											<div class="wt-companysdetails">
												<figure class="wt-companysimg">
													<img src="images/upload/<?php echo $result["img"];?>" alt="img description">
												</figure>
												<div class="wt-companysinfo">
													<div style="margin:75px;"></div>
													<div class="wt-title">
													<?php if($result["approve"]==1):?>
														<a href="javascript:void(0);"><i class="fa fa-check-circle"></i> Verified Company</a>
													<?php endif;?>
														<h2><?php echo $result["cname"];?></h2>
													</div>
													
												</div>
											</div>
										</div>
										<!-- <?php //if(isset($_COOKIE["uid"])):?>
											<div class="wt-widget wt-reportjob">
												<div class="wt-widgettitle">
													<h2>Report This Job</h2>
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
			<!--Footer Start-->
			<?php include('footer.php');?>

			<!--Footer End-->
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