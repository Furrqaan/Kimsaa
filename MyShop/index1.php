<?php
include ("includes/db.php");

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-Type" content="text/html;" charset="utf-8">
	<title>MyShop</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>
	<div class="main_wrapper">
		<div class="header_wrapper">
			<img src="images/logo1.jpg" class="logo" style="float: left;">
			<img src="images/banner1.jpg" class="banner" style="float: right;">
		</div>
		<div id="navbar">
			<ul id="menu">
				<li><a href="#">Home</a></li>
				<li><a href="#">Products</a></li>
				<li><a href="#">My Account</a></li>
				<li><a href="#">Sign Up</a></li>
				<li><a href="#">Shopping Cart</a></li>
				<li><a href="#">Contact us</a></li>
			</ul>
			<div id="form">
			<form method="get" action="results.php" enctype="multipafrt/form-data">
				<input type="text" name="user_query" placeholder="Search">
				<input type="submit" name="search" value="Search">
			</form>
			</div>
		</div>
		<div class="content_wrapper">
			<div id="left_sidebar">
				<div id="sidebar_title">Categories</div>
				<ul id="cats">
					<?php
					$get_cats = "select * from categories";

					$run_cats = mysqli_query($con, $get_cats);

					while ($row_cats=mysqli_fetch_array($run_cats)) {
						$cat_id= $row_cats['cat_id'];
						$cat_title= $row_cats['cat_title'];
				
					
					echo "<li><a href='index1.php?cat=$cat_id'>$cat_title</a></li>";
						}
					?>
				</ul>
				<div id="sidebar_title">Brands</div>
				<ul id="cats">

					<?php
					$get_brands= "select * from brands";

					$run_brands = mysqli_query($con, $get_brands);

					while ($row_brands=mysqli_fetch_array($run_brands)) {
						$brand_id= $row_brands['brand_id'];
						$brand_title= $row_brands['brand_title'];
				
					
					echo "<li><a href='index1.php?brand=$brand_id'>$brand_title</a></li>";
						}
					?>


				</ul>
			</div>
			<div id="right_content"></div>
		</div>
		<div class="footer">
			<h3 style="color: #000; padding-top: 30px; text-align: center;">Copyrights 2018- by </h3>
		</div>

		




	</div>
</body>
</html>