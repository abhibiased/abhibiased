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
										                 <h2>Contact Us-:</h2>
									                    </div>
														<div class="row gtr-uniform">
															<div class="col-6 col-12-xsmall">
																<input type="text" name="name" id="demo-name" value="" placeholder="Name" required="required"/>
															</div>
															<div class="col-6 col-12-xsmall">
																<input type="email" name="email" id="demo-email" value="" placeholder="Email" required="required"/>
															</div>
															<!-- Break -->
															<div class="col-6 col-12-xsmall">
																<input type="text" name="phone" id="demo-name" value="" placeholder="Phone No" required="required"/>
															</div>
															<div class="col-12">
																<textarea name="message" id="demo-message" placeholder="Enter your message" rows="6" required="required"></textarea>
															</div>
															<!-- Break -->
															<div class="col-12">
																<ul class="actions">
																	<li><input type="submit" name="submit" value="Send" class="primary" /></li>
																</ul>
															</div>
														</div>
													</form>

									</div>
								</section>

						</div>
					</div>
					
<?php 

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$msg=$_POST['message'];
	$to='abhibiased@gmail.com';//reciver email id,replace with your email id.
	$message="Name :".$name."\n"."phone :".$phone."\n"."Message recieved :"."\n\n".$msg;
	$headers="From:".$email;

	
	if (mail($to,$message, $headers))
	{
		echo "<h1>Sent Succesfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
	
	} 
	
	else
	
	{
      echo "Something went wrong!";	
	
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

							  <section>
									<header class="major">
										<h2>Our Team</h2>
									</header>
									<div class="mini-posts">
										<article>
											<a href="#" class="image"><img src="images/imgl.jpg" alt="" /></a>
											<center><p><b>Mahi</b></p></center>
											<center><p><b>Yoga Instructor</b></p></center>
										</article>
										<article>
											<a href="#" class="image"><img src="images/IMG_20180923_100754_010.jpg" alt="" /></a>
											<center><p><b>Kumar Abhishek</b></p></center>
											<center><p><b>developer</b></p></center>
										</article>
								</section>
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
									<p class="copyright">&copy; Untitled. All rights reserved.</p>
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