<?php
require_once '../model/connection.php';

// sql to delete a record
// $username = $_POST['uname'];
// $password = $_POST['psw'];
// $gender = $_POST['gender'];
// $blood_group = $_POST['blood_group'];
// $phone = $_POST['phone'];
$username = $_GET['user'];
$sql = "DELETE FROM `admin_table` WHERE user = '$username'";

if ($con->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $con->error;
}

$con->close();
header('location:../admin_list.php');
?>