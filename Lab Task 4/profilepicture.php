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
  padding: 10px;
  height: 50%; 
}
</style>
</head>
<body>
<?php 
session_start();

include 'header.php';?>
<?php 


if (isset($_SESSION['uname'])) {
	
	echo '<div class="row">';
	  echo '<span style = "display:inline-block; width:36%; height:100%; text-align:left">';
	  echo '<div class="column" >';
	     include 'account.php';
	  echo '</div>';
	  echo '</span>';
	  echo '<div class="column" >';
	  echo '<span style = "display:inline-block; width:100%;text-align:left; height: 40%;">';
			echo '<h3 align="" style = "display:inline-block; width:200px;text-align:right;">PROFILE PICTURE</h3><br />';
			echo '<form action="upload.php" method="post" enctype="multipart/form-data">';
			  echo '<img src="upload/profile.png" alt="Profile pic">';
			  echo '<br><br>';
			  echo '<input type="file" name="fileToUpload" id="fileToUpload">';
			  echo '<br><br>';
			  echo '<input type="submit" value="Submit" name="submit">';
	  echo '</div>';
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