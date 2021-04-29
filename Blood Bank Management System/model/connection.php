<?php 

$con = mysqli_connect('localhost','root');
if($con){ 
	// echo "connection successful";
}else{
	echo "no connection";
}

$db = mysqli_select_db($con, 'blood_bank');

?>