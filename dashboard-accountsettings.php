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
	<?php require_once('header.php');?>

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
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
							<div class="wt-dashboardbox wt-dashboardtabsholder wt-accountsettingholder">
								<div class="wt-dashboardtabs">
									<ul class="wt-tabstitle nav navbar-nav">
										<li class="nav-item">
											<a class="active" data-toggle="tab" href="#wt-security">Security &amp; Settings</a>
										</li>
										<li class="nav-item"><a data-toggle="tab" href="#wt-password">Password</a></li>
										<li class="nav-item"><a data-toggle="tab" href="#wt-emailnoti">Email Notifications</a></li>
										<li class="nav-item"><a data-toggle="tab" href="#wt-detailpagedesign">Detail Page Design</a></li>
										<li class="nav-item"><a data-toggle="tab" href="#wt-deleteaccount">Delete Account</a></li>
									</ul>
								</div>
								<div class="wt-tabscontent tab-content">
									<div class="wt-securityhold tab-pane active fade show" id="wt-security">
										<div class="wt-securitysettings wt-tabsinfo">
											<div class="wt-tabscontenttitle">
												<h2>Account Security &amp; Settings</h2>
											</div>
											<div class="wt-settingscontent">
												<div class="wt-description">
													<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua aut enim ad minim veniamac quis nostrud exercitation ullamco laboris.</p>
												</div>
												<ul class="wt-accountinfo">
													<li>
														<div class="wt-on-off">
															<input type="checkbox" id="hide-on" name="contact_form">
															<label for="hide-on"><i></i></label>
														</div>
														<span>Make my profile public</span>
													</li>
													<li>
														<div class="wt-on-off pull-right">
															<input type="checkbox" id="hide-onone" name="contact_form">
															<label for="hide-onone"><i></i></label>
														</div>
														<span>Make my profile searchable</span>
													</li>
													<li>
														<div class="wt-on-off pull-right">
															<input type="checkbox" id="hide-onthree" name="contact_form" checked="">
															<label for="hide-onthree"><i></i></label>
														</div>
														<span>Share my profile photo</span>
													</li>
													<li>
														<div class="wt-on-off pull-right">
															<input type="checkbox" id="hide-onfour" name="contact_form" checked="">
															<label for="hide-onfour"><i></i></label>
														</div>
														<span>Disable my account temporarily</span>
													</li>
													<li>
														<div class="wt-on-off pull-right">
															<input type="checkbox" id="hide-onfive" name="contact_form">
															<label for="hide-onfive"><i></i></label>
														</div>
														<span>Show my client feedback</span>
													</li>
													<li>
														<div class="wt-on-off pull-right">
															<input type="checkbox" id="hide-onsix" name="contact_form">
															<label for="hide-onsix"><i></i></label>
														</div>
														<span>Enable/ Disable</span>
													</li>
												</ul>
											</div>
										</div>
										<div class="wt-location wt-tabsinfo">
											<div class="wt-tabscontenttitle">
												<h2>Language &amp; Currency</h2>
											</div>
											<form class="wt-formtheme wt-userform">
												<fieldset>
													<div class="form-group form-group-half">
														<span class="wt-select">
															<select>
																<option value="">Select System Language</option>
																<option value="">English</option>
																<option value="">French</option>
																<option value="">Spanish</option>
																<option value="">Japanese</option>
																<option value="">Arabic </option>
															</select>
														</span>
													</div>
													<div class="form-group form-group-half">
														<span class="wt-select">
															<select>
																<option value="">Select Currency</option>
																<option value="">Brazilian Real</option>
																<option value="">US Dollar</option>
																<option value="">Yuan Renminbi</option>
																<option value="">Colombian Peso</option>
																<option value="">Euro</option>
																<option value="">Hong Kong Dollar</option>
															</select>
														</span>
													</div>
												</fieldset>
											</form>
										</div>
										<div class="wt-tabcompanyinfo">
											<div class="wt-tabscontenttitle">
												<h2>Dashboard Color Settings</h2>
											</div>
											<div class="wt-settingscontent">
												<div class="wt-description">
													<p>Incididunt ut labore et dolore magna aliqua aut enim ad exercitation ullamco laboris.</p>
												</div>
												<ul class="wt-accountinfo">
													<li>
														<div class="wt-on-off">
															<input type="checkbox" id="hide-on1" name="contact_form">
															<label for="hide-on1"><i></i></label>
														</div>
														<span>Use dark version for my dashboard</span>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="wt-passwordholder tab-pane fade" id="wt-password">
										<div class="wt-changepassword">
											<div class="wt-tabscontenttitle">
												<h2>Change Your Password</h2>
											</div>
											<form class="wt-formtheme wt-userform">
												<fieldset>
													<div class="form-group form-group-half">
														<input type="password" name="password" class="form-control" placeholder="Last Remember Password">
													</div>
													<div class="form-group form-group-half">
														<input type="password" name="password" class="form-control" placeholder="New Password">
													</div>
													<div class="form-group">
														<span class="wt-checkbox">
															<input id="termsconditions" type="checkbox" name="termsconditions" value="termsconditions" checked="">
															<label for="termsconditions"><span>Logout from all other web/mobile session now.</span></label>
														</span>
													</div>
												</fieldset>
											</form>
										</div>
									</div>
									<div class="wt-emailnotiholder tab-pane fade" id="wt-emailnoti">
										<div class="wt-emailnoti">
											<div class="wt-tabscontenttitle">
												<h2>Manage Email Notifications</h2>
											</div>
											<div class="wt-settingscontent">
												<div class="wt-description">
													<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua aut enim ad minim veniamac quis nostrud exercitation ullamco laboris.</p>
												</div>
												<form class="wt-formtheme wt-userform">
													<fieldset>
														<div class="form-group form-disabeld">
															<input type="password" name="password" class="form-control" placeholder="youremail@domainurl.com" disabled="">
														</div>
													</fieldset>
												</form>
												<ul class="wt-accountinfo">
													<li>
														<div class="wt-on-off">
															<input type="checkbox" id="hide-onemail" name="contact_form">
															<label for="hide-onemail"><i></i></label>
														</div>
														<span>Send me Weekly newsletter alerts</span>
													</li>
													<li>
														<div class="wt-on-off pull-right">
															<input type="checkbox" id="hide-onemail1" name="contact_form">
															<label for="hide-onemail1"><i></i></label>
														</div>
														<span>Forward messages on this ID</span>
													</li>
													<li>
														<div class="wt-on-off pull-right">
															<input type="checkbox" id="hide-onemail2" name="contact_form" checked="">
															<label for="hide-onemail2"><i></i></label>
														</div>
														<span>Send me bonus &amp; promo alerts</span>
													</li>
													<li>
														<div class="wt-on-off pull-right">
															<input type="checkbox" id="hide-onemail3" name="contact_form" checked="">
															<label for="hide-onemail3"><i></i></label>
														</div>
														<span>Share latest security alerts</span>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="wt-pagedesignholder tab-pane fade" id="wt-detailpagedesign">
										<div class="wt-selectdesignholder wt-tabsinfo">
											<div class="wt-tabscontenttitle">
												<h2>Choose Your Detail Page Design</h2>
											</div>
											<div class="wt-selectdesign">
												<ul>
													<li>
														<div class="wt-templateoption">
															<div class="wt-designtitle">
																<span>Template 01</span>
																<a href="javascript:void(0);" class="wt-btn float-right">Preview</a>
															</div>
															<div class="wt-designimg">
																<input id="demo1" type="radio" name="employees" value="company" checked="">
																<label for="demo1"><img src="images/template/img-01.jpg" alt="img description"><i class="fa fa-check"></i></label>
															</div>
														</div>
													</li>
													<li>
														<div class="wt-templateoption">
															<div class="wt-designtitle">
																<span>Template 02</span>
																<a href="javascript:void(0);" class="wt-btn float-right">Preview</a>
															</div>
															<div class="wt-designimg">
																<input id="demo2" type="radio" name="employees" value="company">
																<label for="demo2"><img src="images/template/img-02.jpg" alt="img description"><i class="fa fa-check"></i></label>
															</div>
														</div>
													</li>
													<li>
														<div class="wt-templateoption">
															<div class="wt-designtitle">
																<span>Template 03</span>
																<a href="javascript:void(0);" class="wt-btn float-right">Preview</a>
															</div>
															<div class="wt-designimg">
																<input id="demo3" type="radio" name="employees" value="company">
																<label for="demo3"><img src="images/template/img-03.jpg" alt="img description"><i class="fa fa-check"></i></label>
															</div>
														</div>
													</li>
													<li>
														<div class="wt-templateoption">
															<div class="wt-designtitle">
																<span>Template 04</span>
																<a href="javascript:void(0);" class="wt-btn float-right">Preview</a>
															</div>
															<div class="wt-designimg">
																<input id="demo4" type="radio" name="employees" value="company">
																<label for="demo4"><img src="images/template/img-04.jpg" alt="img description"><i class="fa fa-check"></i></label>
															</div>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="wt-accountholder tab-pane fade" id="wt-deleteaccount">
										<div class="wt-accountdel">
											<div class="wt-tabscontenttitle">
												<h2>Delete Account</h2>
											</div>
											<form class="wt-formtheme wt-userform">
												<fieldset>
													<div class="form-group form-group-half">
														<input type="password" name="password" class="form-control" placeholder="Enter Password">
													</div>
													<div class="form-group form-group-half">
														<input type="password" name="password" class="form-control" placeholder="Enter Password">
													</div>
													<div class="form-group">
														<span class="wt-select">
															<select>
																<option value="" disabled="">Select Reason to Leave</option>
																<option value="">Reason</option>
																<option value="">Reason</option>
															</select>
														</span>
													</div>
													<div class="form-group">
														<textarea name="message" class="form-control" placeholder="Description (Optional)"></textarea>
													</div>
													<div class="form-group form-group-half float-right">
														<span class="wt-checkbox">
															<input id="termsconditions1" type="checkbox" name="termsconditions" value="termsconditions">
															<label for="termsconditions1"><span>Unsubscribe me from all newsletter list</span></label>
														</span>
													</div>
													<div class="form-group form-group-half wt-btnarea">
														<a href="javascript:void(0);" class="wt-btn">Delete Account</a>
													</div>
												</fieldset>
											</form>
										</div>
									</div>
								</div>
							</div>
							<div class="wt-updatall">
								<i class="ti-announcement"></i>
								<span>Update all the latest changes made by you, by just clicking on “Save &amp; Continue” button.</span>
								<a class="wt-btn" href="javascript:void(0);">Save &amp; Continue</a>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3"></div>
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
</body>

</html>