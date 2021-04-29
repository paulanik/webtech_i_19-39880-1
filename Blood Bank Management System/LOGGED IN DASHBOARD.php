<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php 
session_start();
include 'header.php';?>
<?php 

if (isset($_SESSION['uname'])) {
	  echo '<div class="body" >';
	  echo "<h2> Welcome ".$_SESSION['uname']."</h2>";
	  echo '</div>';
}else{
		$msg="error";
		header("location:LOGIN.php");
	}

 ?>
</span>
<?php include 'footer.php';?>

</body>
</html>

