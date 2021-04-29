<?php 


require_once 'db2.php';

function validateUser($uname, $pass){
	$conn = getConnection();
	$sql = "select * from patient_db where username='{$username}' and password='{$password}'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	if(count($row) > 0){
		return true;
	}else{

		return false;
	}
	
}
?>