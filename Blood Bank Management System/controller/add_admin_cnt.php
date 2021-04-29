<?php
require_once '../model/connection.php';

	$username = $_POST['uname'];
	$password = $_POST['psw'];
	$gender = $_POST['gender'];
	$blood_group = $_POST['blood_group'];
	$phone = $_POST['phone'];

	$sql = "INSERT INTO `admin_table`(`user`, `pass`, `gender`, `blood_group`, `phone`) VALUES ('$username','$password', '$gender','$blood_group','$phone')";

	$query = mysqli_query($con, $sql);

	header('location:../add_admin.php');
?>