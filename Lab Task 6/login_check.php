<?php 
session_start();

$con = mysqli_connect('localhost','root');
if($con){ 
	echo "connection successful";
}else{
	echo "no connection";
}

$db = mysqli_select_db($con, 'blood_bank');

if(isset($_POST['submit'])){
	$username = $_POST['uname'];
	$password = $_POST['psw'];

	$sql = "select * from admin_table where user = '$username' && pass = '$password'";
	$query = mysqli_query($con, $sql);

	$row = mysqli_num_rows($query);
		if ($row == 1){
			echo "login successful";
			$_SESSION['user'] = $username;
			header('location:admin_dashboard.php');
		}else{
			echo "login failed";
			header('location:admin_login.php');
		}
}

 ?>