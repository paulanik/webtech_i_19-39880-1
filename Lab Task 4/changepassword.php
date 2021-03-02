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
$error='';
$message ='';
if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["currentPassword"]))  
      {  
           $error = "<label class='text-danger'>Enter Current password</label>";  
      } 
      else if ($_POST["currentPassword"] != $_SESSION["pass"] ){
           $error = "Incorrect password...";
      }
      else if(empty($_POST["newPassword"]))  
      {  
           $error = "<label class='text-danger'>Enter New password</label>";  
      } 
      else if (!preg_match('#[@$%]{1}#', $_POST["newPassword"])) {
          $error = "Use one of the special characters (@, $, %)";
      }
      else if (empty($_POST["reNewPassword"])) {
          $error = "Retype new password is required";
      }
      else if ($_POST["newPassword"] != $_POST["reNewPassword"] ){
          $error = "New password and retype new password must be same...";
      }
      else {
        $message ="Password successfully changed";
        $_SESSION['pass'] = $_POST['newPassword'];
      }
  }
include 'header.php';?>

<span style = "display:inline-block; width:100%;text-align:left; height: 40%;">


<?php 

if (isset($_SESSION['uname'])) {
	
	echo '<div class="row">';
	  echo '<span style = "display:inline-block; width:36%; height:100%; text-align:left">';
	  echo '<div class="column" >';
	     include 'account.php';
	  echo '</div>';
	  echo '</span>';
	  echo '<div class="column" >';
	  echo '<form method= "post"';
	  echo '<b>CHANGE PASSWORD </b><br><br>';
    echo '<span style ="color:red"';
     if(isset($error))  
        {      
          echo '<span style ="color:red">';
          echo $error; 
          echo '</span>';
 
        }  
    echo '</span>';
    echo '<br><br><form method="post" >';
      echo '<label style = "display:inline-block; width:160px;text-align:right;">Current Password : </label>';
      echo '<input type="Password" name="currentPassword" class="form-control" /><br /><br>';
      echo '<label style = "display:inline-block; width:160px;text-align:right;">New Password : </label>';
      echo '<input type="Password" name="newPassword" class="form-control" /><br /><br>';
      echo '<label style = "display:inline-block; width:160px;text-align:right;">Retype New Password : </label>';
      echo '<input type="Password" name="reNewPassword" class="form-control" /><br /><br>';
      echo '<br>';
      echo '<span style = "display:inline-block; width:335px;text-align:right;"><input type="submit" value="Submit" name="submit"> </span><br>';
      if(isset($message))  
                     {  
                          echo $message;  
                     }  
    echo '</form>';
	  echo '</div>';
	echo '</div>';
	

}
else{
		$msg="error";
		header("location:login.php");
		// echo "<script>location.href='login.php'</script>";
	}

 ?>
</span>
<?php include 'footer.php';?>

</body>
</html>

