<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
  <link rel="stylesheet" href="css/style_2.css">
  <link rel="stylesheet" href="css/style3_2.css">
</head>
<div class="topnav">
  <a style="float: left;font-style: italic;font-size: 20px;">Blood Donation</a>
  <div style="float: right;">
  <a class="active" href="Dashboard2.php">Dashboard</a>
  <a href="Profile2.php">Profile</a>
  <a href="ApplyForm2.php">Apply</a>
  <a href="Report2.php">Report</a></div>
</div><br>
<header>
<?php 
session_start();

if (empty($_SESSION['uname'])) {
    echo "<a href='Login2.php' style= 'float: right;' margin-right: '20px;'>Go to login!</a></div><br><br><br><hr>";
    
}

else{
    echo "<div style='float: right;font-size:20px;margin-right: 40px;';>"." Logged in as&nbsp; <a class='button1' href='Profile2.php'>".$_SESSION['uname']."</a> | ";
    echo "<a class='button1' href='Images/Logout2.php'>Logout</a>";
    echo "</div><br><hr>";
}
 ?>
 <div><?php include 'Images/AccountDesign2.php';?></div>
</header>

<table>
  <tr>
    <th>
    	<span>Account</span><hr>
      <div class="account">
    	<a href="Dashboard2.php"><img src="Images/logo1.jpg" width="60" height="60">Dashboard</a><br><br>
    	<a href="Profile2.php"><img src="Images/logo2.jpg" width="50" height="50">View Profile</a><br><br>
    	<a href="ApplyForm2.php"><img src="Images/logo3.jpg" width="50" height="50">Apply for Test</a><br><br>
    	<a href="Report2.php"><img src="Images/logo4.jpg" width="50" height="50">Report</a><br><br>
    	<a href="Images/Logout2.php" ><img src="Images/logo5.jpg" width="50" height="40">Logout</a><br><br>
    </th>
    <th style="border: 1px black;"><?php if (isset($_SESSION['uname'])) {
	echo "<div style= 'text-align: center;margin-right: 300px;margin-left: 200px;font-size: 35px;'> Thanks For Sign-In! <br>Welcome ".$_SESSION['uname']."</div>";

}
?>
</th>
  </tr> 
</table>

<div><?php include 'Images/footer2.php';?></div><hr>
</body>
</html>