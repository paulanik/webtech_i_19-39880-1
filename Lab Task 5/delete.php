<?php
	$id=$_GET['id'];
	include('conn.php');
	mysqli_query($conn,"delete from `user` where userid='$id'");
	header('location:add_form.php');
?>