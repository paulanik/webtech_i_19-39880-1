<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php 
require_once ("controller/edit profile.php");
require_once 'model/model.php';
include 'header.php';


if (isset($_SESSION['uname'])) {
	  echo '<div class="body" >';
	  echo '<form method= "post"';
	   echo '<b>EDIT PROFILE </b><br><br>';

	echo '<label class = "formLabel" >Hospital Name : </label>'; 
       echo ' <input type="text" name="hname" class="form-control" value= "';
       echo getHname($_SESSION['uname']);	  
       echo  '">';
       if (isset($hnameErr)) {
               echo $hnameErr;
       }
       echo '<br><br>';

       echo '<label class = "formLabel" >Phone : </label> '; 
       echo ' <input type="text" name="phone" class="form-control" value= "';
       echo getHphone($_SESSION['uname']);	  
       echo  '">';
       if (isset($phoneErr)) {
               echo $phoneErr;
       }
       echo '<br><br>';

       echo '<label class = "formLabel">Email : </label> '; 
       echo ' <input type="text" name="email" class="form-control" value= "';
       echo getHemail($_SESSION['uname']);	  
       echo  '">';
       if (isset($emailErr)) {
               echo $emailErr;
       }
       echo '<br><br>';

       echo '<label class = "formLabel">Address : </label> '; 
       echo ' <input type="text" name="address" class="form-control" value= "';
       echo getHaddress($_SESSION['uname']);	  
       echo  '"><br><br>';

	     
	     echo '<span class = formSubmit> <input type="submit" name="submit" value="Submit"></span>';
	     echo '</form>';
            if (isset($msg)) {
               echo $msg;
            }
       
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

