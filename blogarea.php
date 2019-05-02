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
										

													<form method="post" action="<?php $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
														<div class="row gtr-uniform">
									                    	<h2>Bloging Area-:</h2>
									                    </div>	
														<div class="row gtr-uniform">
															<div class="col-6 col-12-xsmall">
																<input type="file" name="blog" id="demo-name"  />
															</div>
															<div class="col-6 col-12-xsmall">
																<input type="text" name="title" id="demo-email" value="" placeholder="Blog Title" />
															</div>
															<div class="col-6 col-12-xsmall">
																<input type="date" name="publish" id="demo-email" value="" placeholder="Publishing Date" />
															</div>
															<!-- Break -->
															<div class="col-12">
																<textarea name="article" id="demo-message" placeholder="Your Article...!!!" rows="15"></textarea>
															</div>
															<!-- Break -->
															<div class="col-12">
																<ul class="actions">
																	<li><input type="submit" name="submit" value="Publish" class="primary" /></li>
																</ul>
															</div>
														</div>
													</form>

									</div>
								</section>
                         <!-- Box -->
								<h3>* Note-:</h3>
								<div class="box">
								<p>The image to be uploaded should be named as blog.</p>
							 </div>
						</div>
					</div>

<?php
if(isset($_POST['submit']))
{
  if (file_exists("blog.jpg"||"blog.png"))
     {
	     unlink("blog.jpg"||"blog.png");
	 }
  else
     {
		$file=$_FILES['blog']['name'];
		$temp=$_FILES['blog']['tmp_name'];
		move_uploaded_file($temp,"images/$file");
	 }
}

?>

<?php 
if(isset($_POST['submit']))
{
    $title=$_POST['title'];
	$publish=$_POST['publish'];
	$article=$_POST['article'];
	
    $qry="truncate table blog";
    $run=mysqli_query($con,$qry);
if($run==true)
{
 	$qry="INSERT INTO blog(title,publish,article) VALUES ('$title','$publish','$article')";
    $result=mysqli_query($con,$qry);
	$row=mysqli_affected_rows($con); 
	
    if ($row==1)
	{
		echo '<script type="text/javascript">alert("Your blog has been successfuly published...!!!");</script>';
	}
	
	else
	{
	 	echo '<script type="text/javascript">alert("Oops something went wrong...!!");</script>';    
	}

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