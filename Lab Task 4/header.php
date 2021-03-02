
<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

.row {
  display: flex;
}

/* Create two equal columns that sits next to each other */
.column {
  flex: 50%;
  padding: 10px;
  height: 10%; /* Should be removed. Only for demonstration */
}
</style>
</head>
<body>

<div class="row">
  <div class="column" >
     <img src="logo.PNG" alt="LOGO" height="90%">
  </div>
<span style = "display:inline-block; width:100%; height:10%; text-align:right">
  <div class="column" >

<?php

if (isset($_SESSION['uname'])) {
  echo " Logged in as ";
  echo '<a href="VIEW PROFILE.php">';
  echo $_SESSION["uname"];
  echo '</a> |';
  echo "<a href='logout.php'>Logout</a>";

}
else{
  echo '<a href="publichome.php">Home</a> |
  <a href="login.php">Login</a> |
  <a href="registration.php">Registration</a> ';   
  }
?>
  </div>
</span>
</div>
<hr>
</body>
</html>
