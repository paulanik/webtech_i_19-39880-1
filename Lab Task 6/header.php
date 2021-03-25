
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

.column {
  flex: 50%;
  padding: 15px;
}
</style>
</head>
<body>

<div class="row">
  <div class="column" >
     <!-- <img src="logo.PNG" alt="LOGO" height="90%"> -->
      <h2>Blood Bank Management System</h2></p>

  </div>
<span style = "display:inline-block; width:30%; height:10%; text-align:right">
  <div class="column" >
    <button class="profilee"><a href="profile.php">Profile</a></button>
    <button class="logoutt"><a href="logout.php">Logout</a></button>

<?php

// if (isset($_SESSION['uname'])) {
//   echo " Logged in as ";
//   echo '<a href="VIEW PROFILE.php">';
//   echo $_SESSION["uname"];
//   echo '</a> |';
//   echo "<a href='logout.php'>Logout</a>";


// }
// else{
//   echo '<a href="publichome.php">Home</a> |
//   <a href="login.php">Login</a> |
//   <a href="registration.php">Registration</a> ';   
//   }
?>
  </div>
</span>
</div>
<hr>
</body>
</html>
