<?php
  include 'config.php';

  $uemail = $_POST['email'];
  $pwd = $_POST['pass'];

  $sql = "SELECT * FROM customers WHERE Email='$uemail' AND pass='$pwd'";
  $result = mysqli_query($conn, $sql);
  

  if (!$row = mysqli_fetch_assoc($result)){
    echo "<script>alert('Your username or password is incorrect!'); window.location='Login_customer.php';</script>";
	
} else {?>
<script>alert('You are logged in!')</script>


<!DOCTYPE HTML>
<html>

<head>


  <title>Car Rental System</title>
  <link rel="stylesheet" type="text/css" href="styles/Home_styles.css">
  <link rel="stylesheet" type="text/css" href="styles/view_customer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Actor&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="styles/footer.css">
  <script src="js/editpro.js"> </script>

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
  
</header>
</div>
</div>

<body style="background-color:rgb(255, 255, 255)">
  <style>
    .sidebar1 {
      margin: 276px 0px 0px 13px;
      padding: 0;
      width: 230px;
      background-color: #df7c60;
      position: absolute;
      border-radius: 25px;
      border-bottom: none;
      overflow: auto;
    }

    .sidebar1 a {
      display: block;
      color:White;
      font-family: 'Architects Daughter', cursive;
      padding: 16px;
      text-align: center;
      font-size: 16px;
      text-decoration: none;
      border-bottom: 1px solid rgb(255, 255, 255);
    }

    .sidebar1 a.active {
      background-color: #2196f3;
      color: white;
    }

    .sidebar1 a:hover:not(.active) {
      background-color: #555;
      color: white;
    }

    div.content {
      margin-left: 200px;
      padding: 1px 16px;
      height: 1000px;
    }

    @media screen and (max-width: 700px) {
      .sidebar1 {
        width: 100%;
        height: auto;
        position: relative;
      }

      .sidebar1 a {
        float: left;
      }

      div.content {
        margin-left: 0;
      }
    }

    @media screen and (max-width: 400px) {
      .sidebar1 a {
        text-align: center;
        float: none;
      }
    }
  </style>


  <div class="contact" style="font-family: 'Architects Daughter', cursive;" >
    <center>
      <font color="e27d60">Welcome
        <?php echo $row['fName'] ?>
      </font>
    </center>
  </div>

  <div class="sidebar1">
    
    <a href="AddFeedback.html">GIVE FEEDBACK</a>
    <a href="withDriver.html">RENT A CAR</a>
  </div>


  <div class="wrapper">
    <img src="images/avatar.png" width="150" height="150" style="border-radius:100px; margin: 0px 0px 0px 366px;"><br><br>
    Customer ID :
    <?php echo $row['customerID'] ?><br><br>
    First Name :
    <?php echo $row['fName'] ?><br><br>
    Last Name :
    <?php echo $row['lName'] ?><br><br>
    Gender :
    <?php echo $row['gender'] ?><br><br>
    Mobile Number :
    <?php echo $row['mobileNumber'] ?><br><br>
    E-mail :
    <?php echo $row['Email'] ?><br><br>
    Date of Birth :
    <?php echo $row['DOB'] ?><br><br>
    Address :
    <?php echo $row['Address'] ?><br><br>

    <center>
      <a href="customer update.html"><input type="submit" id="btn1" value="Update Your Profile"></a>
      <!-- <a href="delete customer.html"><input type="submit" id="btn2" value="Delete Your Profile"></a> -->
      <center>
  </div>
  <?php
}
?>
</body>
<br>
<br>
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
