<!DOCTYPE html>
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
			echo '<h3 >PROFILE PICTURE</h3><br>';
			echo '<form action="controller/upload.php" method="post" enctype="multipart/form-data">';
			  echo '<img src="uploads/upload.PNG" alt="Profile pic">';
			  echo '<br><br>';
			  echo '<input type="file" name="fileToUpload" id="fileToUpload">';
			  echo '<br><br>';
			  echo '<input type="submit" value="Submit" name="submit">';
	  echo '</div>';	

}
else{
		$msg="error";
		header("location:login.php");
		// echo "<script>location.href='login.php'</script>";
	}

 ?>

<?php include 'footer.php';?>
</body>
</html>