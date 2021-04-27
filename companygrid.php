<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Company Grid</title>
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
	$row = companylist();
	?>
	<style>
		.profilephoto{
			/* width:400px;
			height:180px; */
			max-width:400px;
			max-height:180px:
		}
		.backphoto{
			height:98px;
			max-width:98px;
			max-height:98px;
		}
	</style>

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
							<div class="wt-title"><h2>Company Grid</h2></div>
							<ol class="wt-breadcrumb">
								<li><a href="index.php">Home</a></li>
								<li class="wt-active">Company Grid</li>
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
											<div class="wt-widget wt-startsearch">
												<div class="wt-widgettitle">
													<h2>Start Your Search</h2>
												</div>
												<div class="wt-widgetcontent">
													<form class="wt-formtheme wt-formsearch">
														<fieldset>
															<div class="form-group">
																<input type="text" name="Search" class="form-control" placeholder="Search Company">
																<button type="submit" class="wt-searchgbtn"><i class="lnr lnr-magnifier"></i></a>
															</div>
														</fieldset>
													</form>
												</div>
											</div>	
										</aside>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 float-left">
										<div class="wt-userlistingholder wt-haslayout">
											
											<div class="wt-companysinfoholder">
												<div class="row">
												<?php if(isset($_GET["Search"])!=""):?>
													<?php while($result=$row->fetch_assoc()):
														if(strstr($result["name"],$_GET["Search"])):?>
														<div class="col-12 col-sm-12 col-md-12 col-lg-6">
														<div class="wt-companysdetails">
															<figure class="wt-companysimg">
																<img src="images/upload/<?php echo $result["img"];?>" alt="img description" class="profilephoto">
															</figure>
															<div class="wt-companysinfo">
																<div class="backphoto"></div>
																<div class="wt-title">
																	<?php //if($result["approve"]==1):?>
																	<a><i class="fa fa-check-circle"></i> Verified Company</a>
																	<?php //endif;?>
																	<h2><?php echo $result["name"];?></h2>
																</div>
																<ul class="wt-postarticlemeta">
																	<li>
																		<a href="companysigle.php?coid=<?php echo $result["id"];?>">
																			<span>Full Profile</span>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
													<?php endif;?>
													<?php endwhile;?>
												<?php endif;?>
												<?php while($result=$row->fetch_assoc()):?>
													<div class="col-12 col-sm-12 col-md-12 col-lg-6">
														<div class="wt-companysdetails">
															<figure class="wt-companysimg">
																<img src="images/upload/<?php echo $result["img"];?>" alt="img description" class="profilephoto">
															</figure>
															<div class="wt-companysinfo">
																<div class="backphoto"></div>
																<div class="wt-title">
																	<?php //if($result["approve"]==1):?>
																	<a><i class="fa fa-check-circle"></i> Verified Company</a>
																	<?php //endif;?>
																	<h2><?php echo $result["name"];?></h2>
																</div>
																<ul class="wt-postarticlemeta">
																	<li>
																		<a href="companysigle.php?coid=<?php echo $result["id"];?>">
																			<span>Full Profile</span>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												<?php endwhile; ?>
												</div>
											</div>
										
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
			<!--Footer Start-->
			<?php require_once('footer.php');?>

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