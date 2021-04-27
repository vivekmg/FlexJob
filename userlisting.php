<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>User list</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="icon" href="images/fox.png" type="image/x-icon">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/scrollbar.css">
	<link rel="stylesheet" href="css/dashboard.css">
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
	if(isset($_GET["searchskills"]))
	{
		$sk=$_GET["searchskills"];
	}
		$row=userlist();
	?>
</head>
<body class="wt-login">
	<div id="wt-wrapper" class="wt-wrapper wt-haslayout">
		<!-- Content Wrapper Start -->
		<div class="wt-contentwrapper">
			
			<!--Inner Home Banner Start-->
			<div class="wt-haslayout wt-innerbannerholder">
				<div class="container">
					<div class="row justify-content-md-center">
						<div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
							<div class="wt-innerbannercontent">
							<div class="wt-title"><h2>Freelancers</h2></div>
							<ol class="wt-breadcrumb">
								<li><a href="index.php">Home</a></li>
								<li class="wt-active">Freelancer</li>
							</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--Inner Home End-->
			<!--Main Start-->
			<main id="wt-main" class="wt-main wt-haslayout wt-innerbgcolor">
				<div class="wt-main-section wt-haslayout">
					<!-- User Listing Start-->
					<div class="wt-haslayout">
						<div class="container">
							<div class="row">
								<div id="wt-twocolumns" class="wt-twocolumns wt-haslayout">
									<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 float-left">
										<div class="wt-usersidebaricon">
											<span class="fa fa-cog wt-usersidebardown">
												<i></i>
											</span>
										</div>
										<aside id="wt-sidebar" class="wt-sidebar wt-usersidebar">
											<div class="wt-widget wt-effectiveholder">
												<div class="wt-widgettitle">
													<h2>Skills</h2>
												</div>
												<div class="wt-widgetcontent">
													<form action="userlisting.php" class="wt-formtheme wt-formsearch" name="usearch" id="usearch">
														<fieldset>
															<div class="form-group">
																<input type="text" name="searchskills" id="searchskills" class="form-control" placeholder="Search Skills">
															</div>
														</fieldset>		
												</div>
											</div>
										
											<div class="wt-widget wt-applyfilters-holder">
												<div class="wt-widgetcontent">
													<div class="wt-applyfilters">
														<span>Click “Apply Filter” to apply latest<br> changes made by you.</span>
														<input type="submit" id="search" name="search"class="wt-btn" value="Apply Filters">
														<!-- <button type="submit" id="search" name="search"class="wt-btn">Apply Filters</button> -->
														</form>
													</div>
												</div>
											</div>
										</aside>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 float-left">
										<div class="wt-userlistingholder wt-userlisting wt-haslayout">	
										<?php if(isset($sk)):?>
											<?php while($result=$row->fetch_assoc()):
											if(strstr($result["skills"],$sk)):?>	
											<div class="wt-userlistinghold wt-featured">
											<figure class="wt-userlistingimg">
													<img src="<?php if($result["img"]==NULL){echo "images/upload/default.jpg";}else{echo "images/upload/".$result["img"];}?>" 
													alt="image description" style="width:155px; height: 100px; border-radius:25%;">
												</figure>
												<div class="wt-userlistingcontent">
													<div class="wt-contenthead">
														<div style="margin:25px;">
														</div>
														<div class="wt-title">
															<a href="usersingle.php?uid=<?php echo $result["uid"];?>">
															<!-- <?php //if($result["approve"]==1):?><i class="fa fa-check-circle"></i><?php //endif;?>  -->
															<?php echo $result["name"];?></a>
														</div>
														<ul class="wt-userlisting-breadcrumb">
															<li><span><i class="far fa-money-bill-alt"></i> <?php echo "$".$result["price"];?> / hr</span></li>
															<!-- <li><a href="javascript:void(0);" class="wt-clicksave"><i class="fa fa-heart"></i> Save</a></li> -->
														</ul>
													</div>
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
											<?php endif;?>
											<?php endwhile;?>
										<?php endif;?>
										<?php while($result=$row->fetch_assoc()):?>	
											<div class="wt-userlistinghold wt-featured">
											<figure class="wt-userlistingimg">
													<img src="<?php if($result["img"]==NULL){echo "images/upload/default.jpg";}else{echo "images/upload/".$result["img"];}?>" 
													alt="image description" style="width:155px; height: 100px; border-radius:25%;">
												</figure>
												<div class="wt-userlistingcontent">
													<div class="wt-contenthead">
														<div style="margin:25px;">
														</div>
														<div class="wt-title">
															<a href="usersingle.php?uid=<?php echo $result["uid"];?>">
															<!-- <?php //if($result["approve"]==1):?><i class="fa fa-check-circle"></i><?php //endif;?>  -->
															<?php echo $result["name"];?></a>
														</div>
														<ul class="wt-userlisting-breadcrumb">
															<li><span><i class="far fa-money-bill-alt"></i> <?php echo "$".$result["price"];?> / hr</span></li>
															<!-- <li><a href="javascript:void(0);" class="wt-clicksave"><i class="fa fa-heart"></i> Save</a></li> -->
														</ul>
													</div>
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