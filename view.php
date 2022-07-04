<?php
session_start();
?>
<?php
if($_SESSION["name"]) {
?>

<!DOCTYPE HTML>
<html>

<head>
	<title>Car Rental System</title>
	<link rel="stylesheet" type="text/css" href="styles/Home_styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="styles/footer.css">
	<link rel="stylesheet" type="text/css" href="styles/stylesss.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&display=swap">
	<link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Open+Sans:wght@300&display=swap" rel="stylesheet">


	<meta charset="utf-8">
	<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
	<script src="js/JavaScript.js"></script>

</head>

<header>
	<center>
		<h1 class="monospace"><b>Carooz Rental</b></h1>
	</center>
	<ul class="menu">
		<li class="menu"><a href="index.html"><i class="fa fa-home" id="nav-image"></i>Home</a></li>
		<li class="menu"><a href="about us.html"><i class="fa fa-user" id="nav-image"></i>About Us</a></li>

		<li class="menu"><a href="contactUs.html"><i class="fa fa-phone" id="nav-image"></i>Contact Us</a>
		</li>
		<li class="menu"><a href="logout.php"><i id="nav-image"></i>LOGOUT</a></li>
	</ul>
	<!-- <p style="position: relative; text-align:right; width:111%; font-size:18px"><a href="loginAs.html" style="text-decoration:none">LOG IN </a> | <a href="register.html" style="text-decoration:none">REGISTER</a></p> -->
</header>
</div>
</div>

<body style="background-color:white">
	<center>
		<h1 style="color: #e27d60;font-family: 'Architects Daughter', cursive;">Welcome
			<?php echo $_SESSION["name"]; ?> 
		</h1>
	</center>
	<div class="BoxesRate">
		<div class="columnRate" style="margin:22px 80px 80px; background-color:white;" >
			<div class="cardRate">
				<!-- <img src="images/img10.jpg" width="100%" height="160"> -->
				<h2 style="text-align: center; padding:9px;color: #e27d60;font-family: 'Architects Daughter', cursive">Customer</h2>

				<div style=" padding-left:5px" align="center">
					<a href="admin_customer.php"><button class="button"  type="button">VIEW CUSTOMERS</button></a>
				</div>
				<div style="padding-top:20px; padding-left:5px" align="center">
					<a href="aDelete_customer.html"><button class="button" type="button">DELETE CUSTOMERS</button></a>
				</div>
			</div>
		</div>

		<div class="columnRate"  style="margin:22px 80px 80px; background-color:white;">
			<div class="cardRate">
				<!-- <img src="images/img11.jpg" width="100%" height="160"> -->
				<h2 style="text-align: center;padding:9px;color: #e27d60;font-family: 'Architects Daughter', cursive">Driver</h2>

				<div style=" padding-left:5px" align="center">
					<a href="admin_drivers.php"><button class="button" type="button">VIEW DRIVERS</button></a>
				</div>
				<div style="padding-top:20px; padding-left:5px" align="center">
					<a href="aDelete_driver.html"><button class="button" type="button">DELETE DRIVERS</button></a>
				</div>
			</div>
		</div>

	</div>


	<center>
		<h2 style="color: #e27d60;font-family: 'Architects Daughter', cursive;">VEHICLES</h2>
	</center>
	<div>
		<div style=" padding-left:5px" align="center">
			<a href="addVehicles.html"><button class="button" type="button">ADD VEHICLE</button></a>
		</div><br>
		<!-- <div style=" padding-left:5px" align="center">
			<a href="updateVehicle.html"><button class="button" type="button">UPDATE VEHICLE</button></a> -->
		</div><br>
		<div style=" padding-left:5px" align="center">
			<a href="deleteVehicle.html"><button class="button" type="button">DELETE VEHICLE</button></a>
		</div><br>


	</div>
	<br><br>
	<center>
		<!-- <div class="BoxesRate">
			<div class="columnRate"  style="margin:22px 80px 80px; background-color:white;">
				<div class="cardRate">

					<h2 style="text-align: center;color: #e27d60;font-family: 'Architects Daughter', cursive;">CONTACT US</h2>

					<div style=" padding-left:5px" align="center">
						<a href="displaycontactus.php"><button class="button" type="button">VIEW CONTACT US</button></a>
					</div>
					<br>
					<div style=" padding-left:5px" align="center">
						<a href="deletecontactus.html"><button class="button" type="button">DELETE CONTACT
								US</button></a>
					</div>
				</div>
			</div> -->

			<div class="columnRate" style="margin:22px 80px 80px; background-color:white;">
				<div class="cardRate">

					<h2 style="text-align: center;color: #e27d60;font-family: 'Architects Daughter', cursive">FEEDBACKS</h2>

					<div style=" padding-left:5px" align="center">
						<a href="displayfeedback.php"><button class="button" type="button">VIEW FEEDBACKS</button></a>
					</div>

				</div>
			</div>

		</div>
	</center>
	<center>
		<!-- <h2 style="color: white">------BOOKING DETAILS------</h2>
	</center>
	<div>
		<div style=" padding-left:5px" align="center">
			<a href="displayBooking2.php"><button class="button" type="button">VIEW WITH DRIVER</button></a>
			<a href="deletewithDriver.html"><button class="button" type="button">DELETE WITH DRIVER</button></a>
		</div><br>

		<div style=" padding-left:5px" align="center">
			<a href="displayBooking.php"><button class="button" type="button">VIEW SELF DRIVE</button></a>
			<a href="deleteselfDrive.html"><button class="button" type="button">DELETE SELF DRIVE</button></a>
		</div><br>


	</div> -->


	<br>
</body>

<!-- Footer -->
<footer style="background-color:#e27d60; width:100%; height:200px; padding-top:2px">
	<div class="main-content">
		<div class="left box1">
			<P>Carooz Rental</P>

		</div>

		<div class="left box2">
			<h5 class="foot"><a href="about us.html">ABOUT US</a></h5>
			<h5 class="foot"><a href="contactUs.html">CONTACT US</a></h5>
			<h5 class="foot"><a href="privacy.html">PRIVACY POLICY</a></h5>
			<h5 class="foot"><a href="terms.html">TERMS & CONDITIONS</a></h5>

		</div>



		<div class="right box3">

			<div class="social">
				<a href="#"><span class="fa fa-facebook"></span></a>
				<a href="#"><span class="fa fa-twitter"></span></a>
				<a href="#"><span class="fa fa-instagram"></span></a>
				<a href="#"><span class="fa fa-youtube"></span></a>
			</div>
		</div>
	</div>
</footer>



</html>

<?php } else echo "<script>alert('Please Login First'); window.location='Login_admin.php';</script>"; 

?>