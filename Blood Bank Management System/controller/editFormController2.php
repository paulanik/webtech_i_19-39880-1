<?php 

require_once '../Model/model2.php';
$tableName = 'donor';
if(isset($_POST['submit'])) {
	$data['Name'] = $_POST['name'];
	$data['Email'] = $_POST['email'];
	$data['Username'] = $_POST['username'];
	$data['Address'] = $_POST['address'];
	$data['Blood Group'] = $_POST['blood'];
	if(empty($_POST['display'])){
		$data['display'] = "No";
	}
	else{
		$data['display'] = $_POST['display'];
	}

  if (updateDonor($tableName, $_GET['id'], $data)) {
  	header('Location: ../display2.php');
  }
} 
else {
	echo '<p>You are not allowed to access this page</p>';
}

 ?>