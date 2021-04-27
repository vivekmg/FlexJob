<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->


<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Invoice</title>
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
	<link rel="stylesheet" href="css/basictable.css">
	<link rel="stylesheet" href="css/dashboard.css">
	<link rel="stylesheet" href="css/color.css">
	<link rel="stylesheet" href="css/transitions.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/dbresponsive.css">
	<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	<?php require_once('header.php');
	include('selectdata.php');
	if($_COOKIE["type"]=="company")
	{
		$row=selectinvoice($_COOKIE["uid"],1);
	}
	else
	{
		$row=selectinvoice($_COOKIE["uid"],2);
	}
	
	?>

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
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-9 float-right">
							<div class="wt-dashboardbox wt-dashboardinvocies">
								<div class="wt-dashboardboxtitle wt-titlewithsearch">
									<h2>Invocies</h2>
								</div>
								<div class="wt-dashboardboxcontent wt-categoriescontentholder wt-categoriesholder">
									<table class="wt-tablecategories">
										<thead>
											<tr> 	
												<th>Item name</th>
												<th>Date</th>
												<th>Amount</th>
												<th>Paid</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<?while($result=$row->fetch_assoc()):?>
											<tr>	
												<td><?echo $result["item_name"];?></td>
												<td><?echo $result["date"];?></td>
												<td><?echo $result["item_price"];?></td>
												<td><?echo $result["item_price"];?></td>
												<td>
													<div class="wt-actionbtn">
														<a href="invoicepreview.php?id=<?php echo $result["oid"];?>" class="wt-addinfo wt-skillsaddinfo">Priview</a>
													</div>
												</td>
											</tr>
											<? endwhile;?>	
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-3 float-left">
							<div class="wt-dashboardboxcontent wt-offersidebar wt-dashboardbox-margin">
								<figure><img src="images/save-img-01.jpg" alt="img description"></figure>
								<div class="wt-offercontent">
									<h2>Save Big, Do Big</h2>
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
	<script src="js/jquery.basictable.min.js"></script>
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
	     $('.wt-tablecategories').basictable({
		    breakpoint: 767,
		});
	</script>
</body>


</html>