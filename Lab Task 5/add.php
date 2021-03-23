<?php
	include('conn.php');
 
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
 
	mysqli_query($conn,"insert into `user` (firstname,lastname) values ('$firstname','$lastname')");
	header('location:add_form.php');
 
?>