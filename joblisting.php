<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->


<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>JobListing</title>
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
	<?php require_once('header.php');
	include('selectdata.php');
	$row=jobdatalist();	
	$categories=selectctegories();
	$cate=false;
	$type=false;
	$duration=false;
	if(isset($_GET["categorioes"]))
	{	
		$cate = implode(",",$_GET["categorioes"]);
	}
	if(isset($_GET["type"])){
		$type= $_GET["type"];
	}
	if(isset($_GET["month"])){
		$duration =implode(",",$_GET["month"]);
	}
	?>

</head>
<body class="wt-login">
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
							<div class="wt-title"><h2>Search Result</h2></div>
							<ol class="wt-breadcrumb">
								<li><a href="index.php">Home</a></li>
								<li class="wt-active">Job</li>
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
									<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 float-left">
										<aside id="wt-sidebar" class="wt-sidebar">
											<div class="wt-widget wt-effectiveholder">
												<div class="wt-widgettitle">
													<h2>Categories</h2>
												</div>
												<div class="wt-widgetcontent">
													<form action="joblisting.php"class="wt-formtheme wt-formsearch">
														<fieldset>
															<div class="wt-checkboxholder wt-verticalscrollbar">
															<?php while($cresult=$categories->fetch_assoc()):?>
																<span class="wt-checkbox">
																	<input id="<?php echo $cresult["name"];?>" type="checkbox" name="categorioes[]" value="<?php echo $cresult["name"];?>" >
																	<label for="<?php echo $cresult["name"];?>"> <?php echo $cresult["name"];?></label>
																</span>															
															<?php endwhile;?>
															</div>
														</fieldset>
												</div>
											</div>
											<div class="wt-widget wt-effectiveholder">
												<div class="wt-widgettitle">
													<h2>Project Type</h2>
												</div>
												<div class="wt-widgetcontent">
														<div class="wt-checkboxholder">
															<span class="wt-radio">
																<input id="hourly" type="radio" name="type" value="hourly">
																<label for="hourly"> Hourly Based Project</label>
															</span>
															<span class="wt-radio">
																<input id="fixed" type="radio" name="type" value="fixed">
																<label for="fixed"> Fixed Price Project</label>
															</span>
														</div>
												</div>
											</div>
										
											<div class="wt-widget wt-effectiveholder">
												<div class="wt-widgettitle">
													<h2>Project Length</h2>
												</div>
												<div class="wt-widgetcontent">
															<div class="wt-checkboxholder">
																<span class="wt-checkbox">
																	<input id="01month" type="checkbox" name="month[]" value="1 month">
																	<label for="01month"> Less Than 01 Month</label>
																</span>
																<span class="wt-checkbox">
																	<input id="3months" type="checkbox" name="month[]" value="2 months">
																	<label for="3months"> 01 to 03 Months</label>
																</span>
																<span class="wt-checkbox">
																	<input id="6months" type="checkbox" name="month[]" value="3 months">
																	<label for="6months"> 03 to 06 Months</label>
																</span>
																<span class="wt-checkbox">
																	<input id="moremonths" type="checkbox" name="month[]" value="6 months">
																	<label for="moremonths"> More Than 06 Months</label>
																</span>
															</div>
												</div>
											</div>
											
											<div class="wt-widget wt-effectiveholder">
												<div class="wt-widgetcontent">
													<div class="wt-applyfilters">
														<span>Click “Apply Filter” to apply latest<br> changes made by you.</span>
														<input type="submit" name="submit" value="applyfilter" class="wt-btn">
													</div>
															</form>
												</div>
											</div>
										</aside>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 float-left">
										<div class="wt-userlistingholder wt-haslayout">
											<?if(isset($_GET["categorioes"])||isset($_GET["type"])||isset($_GET["month"])):?>
												<?php while($result=$row->fetch_assoc()): ?>
												<?if((stristr($result["type"],$type)||(stristr($result["duration"],$duration))||(stristr($result["categories"],$cate)))):?>
													<div class="wt-userlistinghold wt-featured wt-userlistingholdvtwo">
												<div class="wt-userlistingcontent">
													<div class="wt-contenthead">
														<div class="wt-title">
															<a href="companysigle.php?coid=<?php echo $result["id"];?>"></i><?php echo $result["cname"];?></a>
															<h2><?php echo $result["name"];?></h2>
														</div>
														<div class="wt-description">
															<p><?php echo $result["description"];?></p>
														</div>
														<div class="wt-tag wt-widgettag">
														<?php  $skills = explode(',',$result["skills"]);
															while(list($s,$val)=each($skills)):?>
																<a><?php echo $val?></a>
															<?php endwhile;?>													
														</div>
													</div>
													<div class="wt-viewjobholder">
														<ul>
															<li><span><i class="far fa-folder wt-viewjobfolder"></i>Type: <?php echo $result["type"];?></span></li>
															<li><span><i class="far fa-clock wt-viewjobclock"></i>Duration:<?php echo $result["duration"];?></span></li>
															<li><span><i class="far  fa-money-bill-alt"></i>Budget:$<?php echo $result["price"];?></span></li>
															<li><span><i class="far fa-folder"></i>Categories:<?php echo $result["categories"];?></span></li>
															<li class="wt-btnarea"><a href="jobsingle.php?jid=<?php echo $result["jid"]?>" class="wt-btn">View Job</a></li>
														</ul>
													</div>
												</div>
											</div>
												<?endif;?>
												<?php endwhile; ?>	
											<?else:?>
											<?php while($result=$row->fetch_assoc()): ?>
											<div class="wt-userlistinghold wt-featured wt-userlistingholdvtwo">
												<div class="wt-userlistingcontent">
													<div class="wt-contenthead">
														<div class="wt-title">
															<a href="companysigle.php?coid=<?php echo $result["id"];?>"></i><?php echo $result["cname"];?></a>
															<h2><?php echo $result["name"];?></h2>
														</div>
														<div class="wt-description">
															<p><?php echo $result["description"];?></p>
														</div>
														<div class="wt-tag wt-widgettag">
														<?php  $skills = explode(',',$result["skills"]);
																while(list($s,$val)=each($skills)):?>
																	<a><?php echo $val?></a>
																<?php endwhile;?>													
														</div>
													</div>
													<div class="wt-viewjobholder">
														<ul>
															<li><span><i class="far fa-folder wt-viewjobfolder"></i>Type: <?php echo $result["type"];?></span></li>
															<li><span><i class="far fa-clock wt-viewjobclock"></i>Duration:<?php echo $result["duration"];?></span></li>
															<li><span><i class="far  fa-money-bill-alt"></i>Budget:$<?php echo $result["price"];?></span></li>
															<li><span><i class="far fa-folder"></i>Categories:<?php echo $result["categories"];?></span></li>
															<li class="wt-btnarea"><a href="jobsingle.php?jid=<?php echo $result["jid"]?>" class="wt-btn">View Job</a></li>
														</ul>
													</div>
												</div>
											</div>
											<?php endwhile; ?>
											<?endif;?>
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
			<?php require_once('footer.php');?>

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