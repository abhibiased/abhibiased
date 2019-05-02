<?php
include('dbcon.php');
session_start();
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
									<a href="index.php" class="logo"><strong>Welcome <?php echo $_SESSION['username'];?></strong></a>
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
										                  <h2>Update Details-:</h2>
									                    </div>	
														<div class="row gtr-uniform">
															<div class="col-6 col-12-xsmall">
																<input type="text" name="name" id="demo-name" value="" placeholder="Name" required="required"/>
															</div>
															<div class="col-6 col-12-xsmall">
																<input type="email" name="email" id="demo-email" value="" placeholder="Email" required="required"/>
															</div>
															<div class="col-6 col-12-xsmall">
																<input type="text" name="phone" id="demo-name" value="" placeholder="Phone No" required="required"/>
															</div>
															<!-- Break -->
															<div class="col-12">
																<select name="class" id="demo-category" required="required">
																	<option value="">- Class Type -</option>
																	<option value="Morning">Morning</option>
																	<option value="Evening">Evening</option>
																	<option value="Weeked">Weekend</option>
																	<option value="Indivisual">Indivisual</option>
																</select>
															</div>
															<!-- Break -->
															<div class="col-12">
																<textarea name="address" id="demo-message" placeholder="Enter your address" rows="6" required="required"></textarea>
															</div>
															<!-- Break -->
															<div class="col-12">
																<ul class="actions">
																	<li><input type="submit" name="submit" value="Register" class="primary" /></li>
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
$name= $_POST['name'];
$email= $_POST['email'];
$class= $_POST['class']; 
$address= $_POST['address'];
$phone= $_POST['phone'];
$id= $_GET['ID'];
 
$query="UPDATE user SET name='$name' , email='$email' , class='$class' , address='$address' , phone='$phone' WHERE ID = '$id'";
$run=mysqli_query($con,$query);
$row=mysqli_affected_rows($con);
/*printf("Result set has %d row.\n", $row);*/
if($row==1)

{
echo '<script type="text/javascript">alert("Record Successfully Updated...!!");</script>';

header('location:regdetails.php');
   
}
   
else
{
 echo '<script type="text/javascript">alert("Record Not Updated...!!");</script>';
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
										<h2>Admin Panel</h2>
									</header>
									<ul>
										<li><a href="regdetails.php">Registration Details</a></li>
										<li><a href="blogarea.php">Bloging Area</a></li>
										<li><a href="updategallery.php">Update Gallery</a></li>
										<li><a href="changepass.php">Change Password</a></li>
										<li><a href="logout.php">Logout</a></li>
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
									<p class="copyright">&copy;Yoga With Mahi. All rights reserved.</p>
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