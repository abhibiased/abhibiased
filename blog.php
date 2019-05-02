<?php
include('dbcon.php');
?>

<?php
$start=0;
$end=1;
$qry="SELECT * FROM blog LIMIT $start,$end";
$result=mysqli_query($con,$qry);
$row=mysqli_fetch_assoc($result);
?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Yoga With Mahi</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<style>
		.date
        {
         float:right;
         margin-right:50x;
         text-decoration:none;
        }
		</style>
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
										<strong>Publish Date-:<?php echo $row['publish'];?></strong>
									</ul>
								</header>

							<!-- Content -->
								<section>
									<header class="main">
										<h1>Mahi's Blog</h1>
									</header>

									<span class="image main"><img src="images/blog.jpg" alt="images/blog.png" /></span>

									<hr class="major" />

									<h2><?php echo $row['title'];?></h2>
									
									<p><?php echo $row['article'];?></p>
									

						</div>
					</div>

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