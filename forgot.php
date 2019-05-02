<?php
include('dbcon.php');
error_reporting(0);
?>

 <!DOCTYPE HTML>

<html>
	<head>
		<title>yoga with mahi</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="index.php" class="logo"><strong>Yoga With Mahi</strong></a>
									<ul class="icons">
										<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="https://instagram.com/yogawithmaahi?utm_source=ig_profile_share&amp;igshid=194k33gs95bvw" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon fa-medium"><span class="label">Medium</span></a></li>
									</ul>
								</header>
							

							<!-- Section -->
								<section>
									
										
									
									<div class="features">
										
													<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
														<div class="row gtr-uniform">
										                 <h2>Forgot Password-:</h2>
									                    </div>
														<div class="row gtr-uniform">
															<div class="col-6 col-12-xlarge">
																<input type="password" name="secure" id="demo-name" value="" placeholder="secure-code" required="required" />
																<br></br>
																<div class="col-6 col-12-xlarge">
																<input type="password" name="password" id="demo-name" value="" placeholder="New Password" required="required" />
															</div>
															</div>
															<div class="col-12">
																<ul class="actions">
																	<li><input type="submit" name="submit" value="Change Password" class="primary" /></li>
																	<li><a href="login.php" class="button">back to login ?</a></li>
																</ul>
															</div>
														</div>
													</form>

									</div>
								</section>

						</div>
					</div>
					
<?php
	if (isset($_POST['submit']))
	  {						
	    $secure = $_POST['secure'];	
	    $newpass = $_POST['password'];

        $qry="UPDATE admin SET password='$newpass' WHERE secure='$secure'";
		$result=mysqli_query($con,$qry);
		$row=mysqli_affected_rows($con);
		/*printf("Result set has %d row.\n", $row);*/
			
   if($row==1)
	{
  
	echo '<script type="text/javascript">alert("password changed successfuly...!!");</script>';

	}

    else
    {

	echo '<script type="text/javascript">alert("password not changed...!!");</script>';

    }
		
			
	}
		
?>



				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section>

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="index.php">Homepage</a></li>
										<li><a href="classes.php">Classes</a></li>
										<li><a href="gallery.php">Gallery</a></li>
										<li><a href="Blog.php">Blog</a></li>
										<li>
											<span class="opener">Admin</span>
											<ul>
												<li><a href="login.php">Login</a></li>
												<li><a href="signup.php">Signup</a></li>
												<li><a href="forgot.php">Forgot Password</a></li>
											</ul>
									  <li><a href="contact.php">Contact Us</a></li>
									</ul>
								</nav>

							
							<!-- Section -->
								<section>
									<header class="major">
										<h2>Get in touch</h2>
									</header>
									<p>We’re a friendly bunch and we love to meet new people, so Email us to discuss any ideas. Alternatively you can contact either of us directly from our Contact Us page.We provide free initial consultations, so you can see if we would be a good fit for your needs.</p>
									<ul class="contact">
										<li class="fa-envelope-o"><a href="#">yogawithmahi@gmail.com</a></li>
										<li class="fa-phone">(000) 000-0000</li>
										<li class="fa-home">1234 Somewhere Road #8254<br />
										Nashville, TN 00000-0000</li>
									</ul>
								</section>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Yoga With Mahi. All rights reserved.</p>
								</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>