<?php  
session_start();
if(!isset($_SESSION['user'])){
  header('location:admin_login.php');
}
?>

<!DOCTYPE html>
<html>

<head>
  <?php include 'header.php';?>
  <link rel="stylesheet" href="style.css">
</head>

<body>

<span style = "display:inline-block; width:100%;text-align:left; height: 30%; padding:10px">
<?php
// echo "<h3><Center>Welcome to Blood Bank Management System</Center></h3></p>";

?>

<div class="dash">
<div style="text-transform: uppercase;">
  <!-- welcome back, <?php echo $_SESSION['user'] ?>! -->
</div>

<ul>
<li>
  <li><a href="admin_dashboard.php">Home</a></li>
  <li><a href="user_list.php">User List</a></li>

<li><a href="hospital_list.php">Hospital List</a></li>
  
</ul>
</div>

<div class="card">
  <h3><Center>Admin Profile</Center></h3></p>
  <!-- <img src="/w3images/team2.jpg" alt="John" style="width:100%"> -->
  <h1>Admin</h1>
  <p class="titlee">CEO & Founder</p>
  <p>AIUB</p>

  <p><button>Contact</button></p>
</div>

</body>

<?php include 'footer.php';?>
</html>