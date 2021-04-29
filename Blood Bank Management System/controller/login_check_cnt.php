<?php 
session_start();

require_once 'model/connection.php';

if(isset($_POST['submit'])){

	$username = $_POST['uname'];
	$password = $_POST['psw'];

// 	if (isset($_POST['submit'])) {
//   if (empty($_POST["uname"])) {
//     $unameErr = "Valid User is required!<br>";
//   } 
//   else {
//     echo htmlspecialchars($_POST['uname']);}

//       if (empty($_POST["psw"])) {
//     echo "Valid Password is required!";
//   } else {
//     echo htmlspecialchars($_POST['psw']);}
// }

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   if (empty($_POST["name"])) {
//     $nameErr = "Name is required";
//   }

  	$sql = "select * from admin_table where user = '$username' && pass = '$password'";
	$query = mysqli_query($con, $sql);

	$row = mysqli_num_rows($query);
		if ($row == 1){
			echo "login successful";
			$_SESSION['user'] = $username;
			header('location:admin_dashboard.php');
		}

		else{
			echo "Input valid user & password!";
			// header('location:admin_login.php?Input=valid.username.&.password!');
		}
}

 ?>