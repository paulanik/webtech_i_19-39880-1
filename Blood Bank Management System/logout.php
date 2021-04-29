<?php 

session_start();

if (isset($_SESSION['uname'])) {
	session_destroy();
	header("location:admin_login.php");
	
}

else{
	header("location:LOGIN.php");
}

 ?>