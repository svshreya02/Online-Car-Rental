<?php
	include_once 'config.php';
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
	<link rel="stylesheet" type="text/css" href="styles/tablestyles.css">


	<meta charset="utf-8">
	<meta name="viewpoint" content="width=device-width, initial-scale=1.0">

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
<br>

<body style="background-color:black">
	<center style="padding-left:20px; padding-right:20px">
		<div class="table-responsive1">
			<table>
				<tr class="table-header">
					<th class="darkgrayB">Customer ID</th>
					<th class="darkgrayB">First Name</th>
					<th class="darkgrayB">Last Name</th>
					<th class="darkgrayB">Gender</th>
					<th class="darkgrayB">Mobile Number</th>
					<th class="darkgrayA">Email</th>
					<th class="darkgrayA">Address</th>
					<th class="darkgrayB">Date of Birth</th>
				</tr>



				<?php
			
			
			$sql = "select * from customers";
			$result = $conn->query($sql);
			
			if($result->num_rows>0){
				while($row=$result->fetch_assoc()){
					echo"<tr><td class='text-leftB'>".$row["customerID"]."</td><td class='text-leftB'>".$row["fName"]."</td><td class='text-leftB'>".$row["lName"]."</td><td class='text-leftB'>".$row["gender"]."</td><td class='text-leftB'>".$row["mobileNumber"]."</td><td class='text-leftA'>".$row["Email"]."</td><td class='text-leftA'>".$row["Address"]."</td><td class='text-leftB'>".$row["DOB"]."</td></tr>";
				}
			}
			else{
				echo"Empty Table";
			}
			
			echo"</table></div><br>";
			$conn->close();
			?>


















	</center>
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