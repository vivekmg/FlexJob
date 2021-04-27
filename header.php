
<script src="js/vendor/jquery-3.3.1.js"></script>

	<!-- login checking -->
	<?php 
	$img=false;
		if(!isset($_COOKIE["email"]))
		{
		echo	'<script>
			$(document).ready(function(){
				$("body").removeClass("wt-login");
			});
			</script>';
		}else
		{
			$servername = "localhost";
			$pass = "";
			$userame="root";
			static $conn;
			$locations="";
			if($conn===null)
			{
				$conn = new mysqli("localhost","root","","flexjob");
			}
			
				if($_COOKIE["type"]=="company")
				{
					$id=$_COOKIE["uid"];
					$que="select * from company_tbl where id='$id'";
					$result=mysqli_query($conn,$que);
				}
				else
				{
					$id=$_COOKIE["uid"];
					$que="select * from user_tbl where uid='$id'";
					$result=mysqli_query($conn,$que);	
				}
				$img=$result->fetch_assoc();
				if($img["img"]=="")
				{
					$location ="images/upload/default.jpg";
				}
				else
				{
					$location="images/upload/".$img["img"];
				}
				$conn->close();
		}
	?>
	<!-- login checking -->

	
<header id="wt-header" class="wt-header wt-haslayout">
<script type="text/javascript" language="javascript">
		
		function userlog(){
			var flag=2;
			
			if(document.forms["loign"]["email"].value=="")
			{
				flag=1;	
				document.getElementById('email').style.borderColor="red";
			}

			if(document.forms["loign"]["pass"].value=="")
			{
				flag=1;
				alert(flag);
				document.getElementById('pass').style.borderColor="red";
			}
			if(flag==1)
			{		
				alert("somthing wrong"+ flag);		
				return false;
			}
			else{
				registerting();
				function registerting()
				{
					jQuery.ajax({
						type: "POST",
						url:"insert.php",
						data: {logincheck:"login", email:document.forms["loign"]["email"].value,									
													pass:document.forms["loign"]["pass"].value,
													type:document.forms["loign"]["type"].value},

						success:function(data) {
						location.reload(true);
						}
					});
				}
			}
				
		}
	</script>
				<div class="wt-navigationarea">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<strong class="wt-logo"><a href="index.php"><img src="images/flexjoblogo.png" alt="company logo here"style></a></strong>
								<div class="wt-rightarea">
									<nav id="wt-nav" class="wt-nav navbar-expand-lg">
										<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
											<i class="lnr lnr-menu"></i>
										</button>
										<div class="collapse navbar-collapse wt-navigation" id="navbarNav">
											<ul class="navbar-nav">
												<li class="menu-item-has-children page_item_has_children">
													<a href="javascript:void(0);">Main</a>
													<ul class="sub-menu">
														<li>
															<a href="about.php">About</a>
														</li>																							
													</ul>
												</li>
												<li class="nav-item">
													<a href="howitworks.php">How It Works</a>
												</li>
												<li class="nav-item">
													<a href="joblisting.php">Browse Jobs</a>
												</li>
												<li class="nav-item">
													<a href="userlisting.php">View Freelancers</a>
												</li>
												<li class="nav-item">
													<a href="companygrid.php">View Companys</a>
												</li>
											</ul>
										</div>
									</nav>
									<div class="wt-loginarea">
										<figure class="wt-userimg">
											<img src="images/user-login.png" alt="img description">
										</figure>
									
										<div class="wt-loginoption">
											<a href="javascript:void(0);" id="wt-loginbtn" class="wt-loginbtn">Login</a>
											<div class="wt-loginformhold">
												<div class="wt-loginheader">
													<span>Login</span>
													<a href="javascript:;"><i class="fa fa-times"></i></a>
												</div>
												<form class="wt-formtheme wt-loginform do-login-form" name="loign" action="index.php" onsubmit="return userlog()" method="post">
													<fieldset>
														<div class="form-group">
															<input type="text" name="email" id="email" class="form-control" placeholder="Email">
														</div>
														<div class="form-group">
															<input type="password" name="pass" id="pass" class="form-control" placeholder="Password">
														</div>
														<div class="wt-logininfo">
														
															<span class="wt-radio">
																<input id="F-login" class="form-control" type="radio" value="flancer" name="type">
																<label for="F-login">Freelance</label><br>
																<input  id="C-login" type="radio" value="company" name="type" >
																<label for="C-login">Company</label><br>
																<!-- <a href="forgotpassword.php">Forgot Password?</a> -->
															</span>
															<input type="submit" name="loignbtn" value="Loign" class="wt-btn do-login-button">
														</div>
													</fieldset>
													<h5 styele="margin-right:100px;">Register As A</h5>
													<div class="wt-loginfooterinfo">
														
											            <a href="register.php">Freelancer</a>
											            <a href="companyregister.php">Company</a>
													</div>
												</form>
											</div>
										</div>
										<a href="register.php" class="wt-btn">Join Now</a>
									</div>
									<div class="wt-userlogedin">
										<figure class="wt-userimg">
											<img src="<?php echo $location;?>" alt="image description">	
										</figure>

										<nav class="wt-usernav">
											<ul>
											<?php if($_COOKIE["type"]=="company"):?>
												<li>
													<a href="company-profile.php">
														<span>My Profile</span>
													</a>
												</li>
												<!-- <li class="menu-item-has-children">
													<a href="javascript:void(0);">
														<span>All Jobs</span>
													</a>
													<ul class="sub-menu">
														<li><a href="dashboard-completejobs.php">Completed Jobs</a></li>
														<li><a href="dashboard-canceljobs.php">Cancelled Jobs</a></li>
														<li><a href="dashboard-ongoingjob.php">Ongoing Jobs</a></li>
													</ul>
												</li> -->
											<?php else:?>
												<li>
													<a href="dashboard-profile.php">
														<span>My Profile</span>
													</a>
												</li>
												<!-- <li class="menu-item-has-children">
													<a href="javascript:void(0);">
														<span>All Jobs</span>
													</a>
													<ul class="sub-menu">
														<li><a href="usersidejobstatus.php?no=2">Completed Jobs</a></li>
														<li><a href="usersidejobstatus.php?no=3">Cancelled Jobs</a></li>
														<li><a href="usersidejobstatus.php?no=1">Ongoing Jobs</a></li>
													</ul>
												</li> -->
											<?php endif;?>
									
												<?php if($_COOKIE["type"]=="company"):?>
												<li>
													<a href="dashboard-managejobs.php">
														<span>Manage Jobs</span>
													</a>
												</li>
												<?php endif;?>
												<?php if($_COOKIE["type"]=="company"):?>
												<li>
													<a href="dashboard-postjob.php">
														<span>Post Jobs</span>
													</a>
												</li>
												<?php endif;?>
												<!-- <li>
													<a href="dashboard-messages.php">
														<span>Messages</span>
													</a>
								
												</li>
												<li>
													<a href="dashboard-saveitems.php">
														<span>My Saved Items</span>
													</a>
												</li> -->
												<!-- <li>
													<a href="dashboard-invocies.php">
														<span>Invoices</span>
													</a>
												</li> -->
												<!-- <li>
													<a href="dashboard-category.php">
														<span>Category</span>
													</a>
												</li> -->
												<!-- <li>
													<a href="dashboard-packages.php">
														<span>Packages</span>
													</a>
												</li> -->
					
												<li>
													<a href="logout.php">
														<span>Logout</span>
													</a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
	</header>	
	
	