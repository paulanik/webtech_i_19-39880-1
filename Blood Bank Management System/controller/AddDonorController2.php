<?php 
require_once ('../Model/model2.php');

$tableName = 'donor';

if(isset($_POST['submit'])) {
	$data['name'] = $_POST['name'];
	$data['email'] = $_POST['email'];
	$data['username'] = $_POST['username'];
	$data['address'] = $_POST['address'];
	$data['blood'] = $_POST['blood'];
	if(empty($_POST['display'])){
		$data['display'] = "No";
	}
	else{
		$data['display'] = $_POST['display'];
	}

  if (addpatient($tableName, $data)) {
  	echo '<p>Donor Successfully added!!</p><br>';
  	echo "<a href='../display2.php'>Display Donor</a>";
  }
} 
else {
	echo '<p>You are not allowed to access this page</p>';
}

?>