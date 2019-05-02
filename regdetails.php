<?php	
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
									
								   <h2>Registration Details</h2>
									<div class="posts">
										<article>
									<div class="features">
									<!-- Table -->
									<?php 
                                   //connect to db.
                                  include('dbcon.php');
								 //How many records per page
								 $rpp=10;
                                //check for set page
                               isset($_POST['page']) ? $page=$_POST['page'] : $page=0;
							  //check for page 1
						      if($page>1)
                               {
	                           $start=($page * $rpp)-$rpp;
                               }
 
                               else
                              {
                        	  $start=0;
                              }

                           //Querry db for Total records
                           $resultSet = mysqli_query($con,"SELECT ID FROM user");

                           //Get total records
                          $numRows=$resultSet->num_rows;

                         //Get total number of pages
                         $totalPages=$numRows/$rpp;

                         //Query result
						$resultSet=mysqli_query($con,"SELECT * FROM user LIMIT $start,$rpp");
                        ?>					
													
													<div class="table-wrapper">
														<table>
															<thead>
																<tr>
																	<th>ID</th>
																	<th>Name</th>
																	<th>Email</th>
																	<th>Phone no</th>
																	<th>Batch</th>
																	<th>Action1</th>
																	<th>Action2</th>
																</tr>
															</thead>
															<tbody>
															<?php
															while($row=mysqli_fetch_assoc($resultSet))
															{
															?>
																<tr>
																	<td><?php echo $row['ID'];?></td>
																	<td><?php echo $row['name'];?></td>
																	<td><?php echo $row['email'];?></td>
																	<td><?php echo $row['phone'];?></td>
																	<td><?php echo $row['class'];?></td>
																	<td><ul class="actions">
														            <li><a href="updetails.php?ID=<?php echo $row['ID'];?>" class="button primary">Edit</a></li>
													                </ul></td>
																	<td><ul class="actions">
														            <li><a href="delete.php?ID=<?php echo $row['ID'];?>" class="button primary">Delete</a></li>
													                </ul></td>
																</tr>
															 <?php 
															 }
															 ?> 	
															</tbody>
														</table>
														<?php
															for($x=1; $x<=$totalPages + 1; $x++)
														      {
															?>
															  	
															<?php	
															    echo "<a href='?page=$x'> $x </a>";
                                                              }
                                                            ?>   
													</div>
									     </div>
									</article>
								</div> 
						</section>

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