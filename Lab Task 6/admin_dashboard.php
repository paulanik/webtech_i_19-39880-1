<html>
<body>

<?php include 'header.php';?>

<span style = "display:inline-block; width:100%;text-align:left; height: 30%; padding:10px">
<?php
// echo "<h3><Center>Welcome to Blood Bank Management System</Center></h3></p>";
echo "<h3><Center>WELCOME, ADMIN!</Center></h3></p>";
?>
<div class="dash">
  
  <button type="button" class="block"><a href="hospital_list.php">Hospital List</a></button>
  <button type="button" class="block"><a href="user_list.php">User List</a></button>

  <!-- <button type="button" class="block"><a href="hospital_rqst.php">Add New User</a><br></button> -->
  <!-- <li><a href="editprofile.php">Donor List</a></li> -->
  <!-- <button class="logoutt"><a href="logout.php">Logout</a></button> -->
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
	<link rel="stylesheet" href="style.css">
</head>

<body>









</html>



<?php include 'footer.php';?>


