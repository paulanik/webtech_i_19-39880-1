<!DOCTYPE html>
<html lang="en">

<head>
	<title>Project Webpage</title>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style_2.css">
  <style>
     h2,p{
  padding: 7px;
    }
  </style> 
</head>
<body>
  <div class="topnav">
  <a style="float: left;font-style: italic;font-size: 20px;color: white;">Blood Donation</a>
  <div style="float: right;">
  <a class="active" href="WebHome2.php">Home</a>
  <a href="Login2.php">Login</a>
  <a href="RegistrationForm2.php">Registration</a>
  <a href="admin_login.php">Admin Login</a>
  <a href="LOGIN.php">Hospital Login</a>
</div><br>
</div>
 <div><?php include 'Images/AccountDesign2.php';?></div>
<?php
$page = "";
?>
<div>
  <h2>Blood Donation Webpage</h2>
  <hr>
<?php 
  echo "<div>";include 'Images/homedesign2.php';echo "</div>";
 ?>
</div>
<div><?php include 'Images/footer2.php';?></div><hr>
</body>
</html>