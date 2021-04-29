
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="row">
  <div class="column" >
    <img src="uploads/logo.PNG" alt="LOGO" height="90%">
    <b>Bangladesh Blood Bank</b>
  </div>
  <div class="column alignRight" >
    <?php

    if (isset($_SESSION['uname'])) {
      echo " Logged in as ";
      echo '<a href="VIEW PROFILE.php">';
      echo $_SESSION["uname"];
      echo '</a> |';
      echo "<a href='logout.php'>Logout</a>";

    }
    else{
      echo '<a href="LOGIN.php">Login . | .</a>
      <a href="REGISTRATION.php">Registration . | .</a> 
      <a href="PUBLIC HOME.php">Home . | .</a>      
      <a href="admin_login.php">Admin Login . | .</a> 
      <a href="WebHome2.php">Patient Login . | .</a> ';     
      }
    ?>
  </div>
  
</div>
<div class="menu">
  <?php
  if (isset($_SESSION['uname'])) {
     include 'hospital menu bar.php';
   } 
  ?>
</div>

</body>
</html>
