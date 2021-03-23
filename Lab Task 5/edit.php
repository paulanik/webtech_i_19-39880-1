<?php
	include('conn.php');
	$id=$_GET['id'];
 
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
 
	mysqli_query($conn,"update `user` set firstname='$firstname', lastname='$lastname' where userid='$id'");
	header('location:add_form.php');
?>