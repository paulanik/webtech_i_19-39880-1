<?php
session_start();
if (isset($_SESSION['username'])) {
$name = $_SESSION['name'];
	
	
}
else{
		$msg="error";
		header("location:Login2.php");
}
?>
<html>
	<body>
		<class style="float:right;color:blue;"><?php echo "Logged in as ".$name; ?>&nbsp;|&nbsp;&nbsp;<a href='Login2.php'>Logout</a></class>
		<h2>Blood Donation</h2>
		<br><br><hr><br><br>
		
		<class style="float:left;"><?php include 'Account2.php';?></class>
		<fieldset>
						<legend> PROFILE:</legend>
						<br><br><h2>Welcome <?php echo $name; ?></h2>
		</fieldset>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><hr>
		<div><?php include 'Images/footer2.php';?></div>
		
		
	</body>
</html>