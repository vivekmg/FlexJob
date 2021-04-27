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

        $row=usersidejobsingle($_GET["jid"]);
        $result=$row->fetch_assoc();    
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
							<div class="wt-title"><h2>Job Detail</h2></div>
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
												<li><span><i class="far fa-folder"></i> Type: <?php echo $result["categories"];?></span></li>
												<li><span><i class="far fa-clock"></i> Duration: <?php echo $result["duration"];?></span></li>
												<li><span><i class="fa fa-dollar-sign"></i> Budget: <?php echo $result["price"];?>$</span></li>
												<li><span><i></i>Status:<?php if($result["status"]==1):?>Ongoing<?php elseif($result["status"]==2):?> Completed<?php elseif($result["status"]==3):?>Cancel<?php endif;?></span></li>
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
												<p><?php echo $result["jdes"];?></p>
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
                                            <div class="wt-userlistinghold wt-featured wt-userlistingvtwo">
												<span class="wt-featuredtag wt-featuredtagcolor3"><img src="images/featured.png" alt="img description" data-tipso="Plus Member" class="template-content tipso_style"></span>
												<div class="wt-userlistingcontent">
													<div class="wt-contenthead">
														<div class="wt-title">
                                                            <h4>Hired By</h4>
															<h2>Company: <?php echo $result["cname"];?></h2>
														</div>
                                                        <a href="companysigle.php?coid=<?php echo $result["id"];?>"  class="wt-btn">VIEW Profile</a>
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
