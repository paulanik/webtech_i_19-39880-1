<?php  
session_start();
if(!isset($_SESSION['user'])){
  header('location:admin_login.php');
}
?>

<!DOCTYPE html>
<html>

<head>
  <?php include 'header1.php';
  require_once 'navbar.php';
  ?>
  <link rel="stylesheet" href="style1.css">
</head>

<div class="card">
  <h3><Center>Admin Profile</Center></h3></p>
  <!-- <img src="/w3images/team2.jpg" alt="John" style="width:100%"> -->
  <h1>Admin</h1>
  <p class="titlee">CEO & Founder</p>
  <p>AIUB</p>
  <p><button><h1 onclick="this.innerHTML='Ooops! Offline'">Contact</button></p></h1>
</div>

</body>
<?php include 'footer1.php';?>
</html>