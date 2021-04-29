<?php 

session_start();
require_once 'model/model.php';

$uname="";
$password="";
$msg = '';
if (isset($_POST['login'])){
	$uname = $_POST['uname'];
	$password = $_POST['password'];
	$rowCount = userLogin($uname, $password);
	if ($rowCount == 1) {
		$_SESSION['uname'] = $uname;  
		header("location:LOGGED IN DASHBOARD.php");
	}
	else{
		$msg="username or password invalid";
	}

}
// if (isset($_POST['uname'])) {
// 	if ($_POST['uname']==$uname && $_POST['password']==$password) {
// 		$_SESSION['uname'] = $uname;  
// 		$_SESSION['password'] = $password;
		
// 		if (!isset($_SESSION['email'])){
// 	     	$_SESSION['email'] = $email;
// 	     }
// 	     if (!isset($_SESSION['phone'])){
// 	     	$_SESSION['phone'] = $phone;
// 	     }
// 	     if (!isset($_SESSION['hname'])){
// 	     	$_SESSION['hname'] = $hname;
// 	     }
// 	     if (!isset($_SESSION['address'])){
// 	     	$_SESSION['address'] = $address;
// 	     }
// 	     header("location:LOGGED IN DASHBOARD.php");
// 	}
// 	else{
// 		$msg="username or password invalid";
// 	}

// }

?>