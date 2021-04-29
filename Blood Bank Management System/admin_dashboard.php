<html>
<body>

<?php include 'header1.php';
require_once 'navbar.php';
?>

<?php
echo "<h3><Center>Welcome to Blood Bank Management System</Center></h3></p>";
echo "<h3><Center>WELCOME, ADMIN!</Center></h3></p>";
?>
<div class="dash">
  <br>
  <div onclick="location.href='admin_list.php';"><button type="submit" class="block">Admin List</button></div>
  <div onclick="location.href='user_list.php';"><button type="submit" class="block">User List</button></div>
  <div onclick="location.href='hospital_list.php';"><button type="submit" class="block">Hospital List</button></div>
  <div onclick="location.href='add_admin.php';"><button type="submit" class="block">Add New Admin</button></div>
  <div onclick="location.href='store_user.php';"><button type="submit" class="block">Add New Use</button></div>
  <div onclick="location.href='store_hospital.php';"><button type="submit" class="block">Add New Hospital</button></div>
</div>
</body>
</html>
</span> 

<?php  
session_start();
if(!isset($_SESSION['user'])){
	header('location:admin_login.php');
}
?>

<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="style1.css">
</head>

<body>

</html>

<?php include 'footer1.php';?>
