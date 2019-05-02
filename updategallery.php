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
		<link rel="stylesheet" href="assets/css/main.css"/>
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

							<!-- Banner -->
								<section id="banner">
									<div class="content">			
										<header>
	                                         &nbsp;
											 &nbsp;									
											<p><h1>Update Gallery<br />
											</h1></p>
										</header>
										<p>*Note-: The changes made here will be directly applied on to your gallery page so choose wisely.And follow the instruction below every image,the image file to be uploaded should be named the same as given in the red tab below every image.</p>
										
									</div>
									<span class="image object">
										<img src="images/IMG1.jpg" alt="images/IMG1.png" />
										     &nbsp;
											 &nbsp;
								   <form method="post" action="<?php $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
									    <div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall">
											<input type="file" name="IMG1" id="demo-name" value="" placeholder="secure-code" />
												&nbsp;
												<ul class="actions">
										    	<li><input type="button" name="submit" value="Img1" class="primary" /></li>
												<li><input type="submit" name="submit1" value="Update" /></li>
												</ul>
									  </div>
									</form>
									&nbsp;
								  </span>
								</section>
							<!-- Section -->
								<section>
									<header class="major">
										<h2>Images</h2>
									</header>
									<div class="posts">
										<article>
											<a href="#" class="image"><img src="images/IMG2.jpg" alt="images/IMG2.png"/></a>
											 
								      <form method="post" action="<?php $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
									    <div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall">
											<input type="file" name="IMG2" id="demo-name" value="" placeholder="secure-code" />
												&nbsp;
											<div class="col-12">
												<ul class="actions">
										    	<li><input type="button" name="submit" value="Img2" class="primary" /></li>
												<li><input type="submit" name="submit2" value="Update" /></li>
												</ul>
										   </div>
									  </div>
									</form>
										</article>
										<article>
											<a href="#" class="image"><img src="images/IMG3.jpg" alt="images/IMG3.png"/></a>
											
								     <form method="post" action="<?php $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
									    <div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall">
											<input type="file" name="IMG3" id="demo-name" value="" placeholder="secure-code" />
												&nbsp;
											<div class="col-12">
												<ul class="actions">
										    	<li><input type="button" name="submit" value="Img3" class="primary" /></li>
												<li><input type="submit" name="submit3" value="Update" /></li>
												</ul>
										   </div>
									  </div>
									</form>
										</article>
										<article>
											<a href="#" class="image"><img src="images/IMG4.jpg" alt="images/IMG4.png"/></a>
											 
								       <form method="post" action="<?php $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
									    <div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall">
											<input type="file" name="IMG4" id="demo-name" value="" placeholder="secure-code" />
												&nbsp;
											<div class="col-12">
												<ul class="actions">
										    	<li><input type="button" name="submit" value="Img4" class="primary" /></li>
												<li><input type="submit" name="submit4" value="Update" /></li>
												</ul>
										   </div>
									  </div>
									</form>
										</article>
										<article>
											<a href="#" class="image"><img src="images/IMG5.jpg" alt="images/IMG5.png"/></a>
											 
								       <form method="post" action="<?php $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
									    <div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall">
											<input type="file" name="IMG5" id="demo-name" value="" placeholder="secure-code" />
												&nbsp;
											<div class="col-12">
												<ul class="actions">
										    	<li><input type="button" name="submit" value="Img5" class="primary" /></li>
												<li><input type="submit" name="submit5" value="Update" /></li>
												</ul>
										   </div>
									  </div>
									</form>
										</article>
										<article>
											<a href="#" class="image"><img src="images/IMG6.jpg" alt="images/IMG6.png" /></a>
												 
								       <form method="post" action="<?php $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
									    <div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall">
											<input type="file" name="IMG6" id="demo-name" value="" placeholder="secure-code" />
												&nbsp;
											<div class="col-12">
												<ul class="actions">
										    	<li><input type="button" name="submit" value="Img6" class="primary" /></li>
												<li><input type="submit" name="submit6" value="Update" /></li>
												</ul>
										   </div>
									  </div>
									</form>
										</article>
										<article>
											<a href="#" class="image"><img src="images/IMG7.jpg" alt="images/IMG7.png" /></a>
												 
								       <form method="post" action="<?php $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
									    <div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall">
											<input type="file" name="IMG7" id="demo-name" value="" placeholder="secure-code" />
												&nbsp;
											<div class="col-12">
												<ul class="actions">
										    	<li><input type="button" name="submit" value="Img7" class="primary" /></li>
												<li><input type="submit" name="submit7" value="Update" /></li>
												</ul>
										   </div>
									  </div>
									</form>
										</article>
										<article>
											<a href="#   " class="image"><img src="images/IMG8.jpg" alt="images/IMG8.png" /></a>
											 
								       <form method="post" action="<?php $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
									    <div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall">
											<input type="file" name="IMG8" id="demo-name" value="" placeholder="secure-code" />
												&nbsp;
											<div class="col-12">
												<ul class="actions">
										    	<li><input type="button" name="submit" value="Img8" class="primary" /></li>
												<li><input type="submit" name="submit8" value="Update" /></li>
												</ul>
										   </div>
									  </div>
									</form>
										</article>
										<article>
											<a href="#" class="image"><img src="images/IMG9.jpg" alt="images/IMG9.png" /></a>
											
								      		 
								       <form method="post" action="<?php $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
									    <div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall">
											<input type="file" name="IMG9" id="demo-name" value="" placeholder="secure-code" />
												&nbsp;
											<div class="col-12">
												<ul class="actions">
										    	<li><input type="button" name="submit" value="Img9" class="primary" /></li>
												<li><input type="submit" name="submit9" value="Update" /></li>
												</ul>
										   </div>
									  </div>
									</form>
										</article>
									</div>
								</section>

						</div>
					</div>
					
<?php
if(isset($_POST['submit1']))
{
  if (file_exists("IMG1.jpg"||"IMG1.png"))
     {
	     unlink("IMG1.jpg"||"IMG1.png");
	 }
  else
     {
		$file=$_FILES['IMG1']['name'];
		$temp=$_FILES['IMG1']['tmp_name'];
		move_uploaded_file($temp,"images/$file");
	 }
}

if(isset($_POST['submit2']))
{
if (file_exists("IMG2.jpg"||"IMG2.png"))
     {
	     unlink("IMG2.jpg"||"IMG2.png");
	 }
  else
     {
		$file=$_FILES['IMG2']['name'];
		$temp=$_FILES['IMG2']['tmp_name'];
		move_uploaded_file($temp,"images/$file");
	 }
}

if(isset($_POST['submit3']))
{
if (file_exists("IMG3.jpg"||"IMG3.png"))
     {
	     unlink("IMG3.jpg"||"IMG3.png");
	 }
  else
     {
		$file=$_FILES['IMG3']['name'];
		$temp=$_FILES['IMG3']['tmp_name'];
		move_uploaded_file($temp,"images/$file");
	 }
}

if(isset($_POST['submit4']))
{
if (file_exists("IMG4.jpg"||"IMG4.png"))
     {
	     unlink("IMG4.jpg"||"IMG4.png");
	 }
  else
     {
		$file=$_FILES['IMG4']['name'];
		$temp=$_FILES['IMG4']['tmp_name'];
		move_uploaded_file($temp,"images/$file");
	 }
}

if(isset($_POST['submit5']))
{
if (file_exists("IMG5.jpg"||"IMG5.png"))
     {
	     unlink("IMG5.jpg"||"IMG5.png");
	 }
  else
     {
		$file=$_FILES['IMG5']['name'];
		$temp=$_FILES['IMG5']['tmp_name'];
		move_uploaded_file($temp,"images/$file");
	 }
}

if(isset($_POST['submit6']))
{
if (file_exists("IMG6.jpg"||"IMG6.png"))
     {
	     unlink("IMG6.jpg"||"IMG6.png");
	 }
  else
     {
		$file=$_FILES['IMG6']['name'];
		$temp=$_FILES['IMG6']['tmp_name'];
		move_uploaded_file($temp,"images/$file");
	 }
}

if(isset($_POST['submit7']))
{
if (file_exists("IMG7.jpg"||"IMG7.png"))
     {
	     unlink("IMG7.jpg"||"IMG7.png");
	 }
  else
     {
		$file=$_FILES['IMG7']['name'];
		$temp=$_FILES['IMG7']['tmp_name'];
		move_uploaded_file($temp,"images/$file");
	 }
}

if(isset($_POST['submit8']))
{
if (file_exists("IMG8.jpg"||"IMG8.png"))
     {
	     unlink("IMG8.jpg"||"IMG8.png");
	 }
  else
     {
		$file=$_FILES['IMG8']['name'];
		$temp=$_FILES['IMG8']['tmp_name'];
		move_uploaded_file($temp,"images/$file");
	 }
}

if(isset($_POST['submit9']))
{
if (file_exists("IMG9.jpg"||"IMG9.png"))
     {
	     unlink("IMG9.jpg"||"IMG9.png");
	 }
  else
     {
		$file=$_FILES['IMG9']['name'];
		$temp=$_FILES['IMG9']['tmp_name'];
		move_uploaded_file($temp,"images/$file");
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