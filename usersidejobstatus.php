<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->


<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Complete Job</title>
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
	<?php require_once('header.php');
        include('bidacction.php');
        $n=$_GET["no"];
        $id=$_COOKIE["uid"];
       if($n==1){
       $row=usersidejobs($n,$id);
       }
        elseif($n==2){
            $row=usersidejobs($n,$id);
        }
        elseif($n==3){
            $row=usersidejobs($n,$id);
        }
$counts=mysqli_num_rows($row);
		?>

</head>
<body class="wt-login">
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<!-- Wrapper Start -->
	<div id="wt-wrapper" class="wt-wrapper wt-haslayout">
		<!-- Content Wrapper Start -->
		<div class="wt-contentwrapper">
			
			<!--Main Start-->
			<main id="wt-main" class="wt-main wt-haslayout">
				
				<!--Register Form Start-->
				<section class="wt-haslayout wt-dbsectionspace">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-9">
							<div class="wt-dashboardbox">
								<div class="wt-dashboardboxtitle">
									<h2>All Jobs</h2>
								</div>
								<div class="wt-dashboardboxcontent wt-jobdetailsholder">
									<div class="wt-completejobholder">
										<div class="wt-tabscontenttitle">
                                            <?php if($n==1):?>
                                                <h2>Ongoing Jobs</h2>
                                            <?elseif($n==2):?>
                                                <h2>Completed Jobs</h2>
                                            <?elseif($n==3):?>
                                                <h2>Cancelled Jobs</h2>
                                            <?endif;?>
										</div>
                                        <?php while($result=$row->fetch_assoc()):?>
                                            <?php if($n==1):?>
                                                <div class="wt-managejobcontent">
											<div class="wt-userlistinghold wt-featured wt-userlistingvtwo">
												<span class="wt-featuredtag"><img src="images/featured.png" alt="img description" data-tipso="Plus Member" class="template-content tipso_style"></span>
												<div class="wt-userlistingcontent wt-userlistingcontentvtwo">
													<div class="wt-contenthead">
														<div class="wt-title">
															<h2><?php echo $result["name"];?></h2>
														</div>
														<ul class="wt-saveitem-breadcrumb wt-userlisting-breadcrumb">
															<li><a href="javascript:void(0);" class="wt-clicksavefolder"><i class="far fa-folder"></i> Type: <?php echo $result["type"];?></a></li>
															<li><span class="wt-dashboradclock"><i class="far fa-clock"></i> Duration: <?php echo $result["duration"];?></span></li>	
															<li><span class="wt-dashboradclock"><i class="fa fa-dollar-sign"></i> Budget: <?php echo $result["price"]."$";?></span></li>	
															<li><span class="wt-dashboradclock">Status:Ongoing</span></li>	
														</ul>
													</div>
													<div class="wt-rightarea">
														<div class="wt-btnarea">
															<a href="us_jobsingle.php?jid=<?php echo $result["jid"];?>&st=2" class="wt-btn">VIEW DETAILS</a>
														</div>
													</div>
												</div>	
											</div>									
										</div>
                                            <?php elseif($n==2):?>
                                                <div class="wt-managejobcontent">
											<div class="wt-userlistinghold wt-featured wt-userlistingvtwo">
												<span class="wt-featuredtag"><img src="images/featured.png" alt="img description" data-tipso="Plus Member" class="template-content tipso_style"></span>
												<div class="wt-userlistingcontent wt-userlistingcontentvtwo">
													<div class="wt-contenthead">
														<div class="wt-title">
															<h2><?php echo $result["name"];?></h2>
														</div>
														<ul class="wt-saveitem-breadcrumb wt-userlisting-breadcrumb">
															<li><a href="javascript:void(0);" class="wt-clicksavefolder"><i class="far fa-folder"></i> Type: <?php echo $result["type"];?></a></li>
															<li><span class="wt-dashboradclock"><i class="far fa-clock"></i> Duration: <?php echo $result["duration"];?></span></li>	
															<li><span class="wt-dashboradclock"><i class="fa fa-dollar-sign"></i> Budget: <?php echo $result["price"]."$";?></span></li>	
															<li><span class="wt-dashboradclock">Status:Complete</span></li>	
														</ul>
													</div>
													<div class="wt-rightarea">
														<div class="wt-btnarea">
															<span> Project Complete</span>
															<a href="us_jobsingle.php?jid=<?php echo $result["jid"];?>&st=2" class="wt-btn">VIEW DETAILS</a>
														</div>
													</div>
												</div>	
											</div>									
										</div>
                                            <?php elseif($n==3):?>
                                                <div class="wt-managejobcontent">
											<div class="wt-userlistinghold wt-featured wt-userlistingvtwo">
												<span class="wt-featuredtag"><img src="images/featured.png" alt="img description" data-tipso="Plus Member" class="template-content tipso_style"></span>
												<div class="wt-userlistingcontent wt-userlistingcontentvtwo">
													<div class="wt-contenthead">
														<div class="wt-title">
															<h2><?php echo $result["name"];?></h2>
														</div>
														<ul class="wt-saveitem-breadcrumb wt-userlisting-breadcrumb">
															<li><a href="javascript:void(0);" class="wt-clicksavefolder"><i class="far fa-folder"></i> Type: <?php echo $result["type"];?></a></li>
															<li><span class="wt-dashboradclock"><i class="far fa-clock"></i> Duration: <?php echo $result["duration"];?></span></li>	
															<li><span class="wt-dashboradclock"><i class="fa fa-dollar-sign"></i> Budget: <?php echo $result["price"]."$";?></span></li>	
															<li><span class="wt-dashboradclock">Status:Cancelled</span></li>	
														</ul>
													</div>
													<div class="wt-rightarea">
														<div class="wt-btnarea">
															<a href="us_jobsingle.php?jid=<?php echo $result["jid"];?>&st=2" class="wt-btn">VIEW DETAILS</a>
														</div>
													</div>
												</div>	
											</div>									
										</div>
                                            <?php endif;?>
										<?php endwhile;?>	
									</div>
								</div>							
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-3">
								<div class="wt-proposalsr">
									<div class="wt-proposalsrcontent wt-componyfolow">
										<figure>
											<img src="images/thumbnail/img-16.png" alt="image">
										</figure>
										<div class="wt-title">
                                            <h3><?php echo $counts; ?></h3>
                                            <?php if($n==1):?>
                                                <span>Total Ongoing Jobs</span>
                                            <?elseif($n==2):?>
                                                <span>Total Completed Jobs</span>
                                            <?elseif($n==3):?>
                                                <span>Total Cancelled Jobs</span>
                                            <?endif;?>
										</div>
									</div> 
								</div>								
							</aside>
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
	<script>
		const menu_icon = document.querySelector('.menu-icon');
		function addClassFunThree() {
	        this.classList.toggle("click-menu-icon");
	    }
	    menu_icon.addEventListener('click', addClassFunThree);
	</script>
</body>


</html>