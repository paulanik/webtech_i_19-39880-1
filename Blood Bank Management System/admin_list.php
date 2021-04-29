<?php  
session_start();
if(!isset($_SESSION['user'])){
	header('location:admin_login.php');
}
require_once 'model/connection.php';
?>

<!DOCTYPE html>
<html>

<head>
	<?php include 'header1.php';
	require_once 'navbar.php';
	?>
	<link rel="stylesheet" href="style1.css">
</head>

<body>
<div class="logincss">
<br>
<div class="container">
<center><h2>Admin List</h2></center>
<table id="admin_list">
	<tr>
		<th>User</th>
		<th>Password</th>
		<th>Gender</th>
		<th>Blood Group</th>
		<th>Phone</th>
		<!-- <th>Edit</th> -->
		<th>Delete</th>
	</tr>
</div>
</div>

<?php 	
$sql = "select * from `admin_table`;";
	$query = mysqli_query($con, $sql);
	$querycheck = mysqli_num_rows($query);
		if ($querycheck > 0){
			while ($row=mysqli_fetch_assoc($query)) {?>

	<tr>
	<td><?php echo $row["user"]; ?></td>
	<td><?php echo $row["pass"]; ?></td>
	<td><?php echo $row["gender"]; ?></td>
	<td><?php echo $row["blood_group"]; ?></td>
	<td><?php echo $row["phone"]; ?></td>
	<!-- <td><a href="controller/Edit_admin_cnt.php?id=<?php echo $row["id"]; ?>">Edit</a></td> -->
	<td><a href="controller/delete_admin_cnt.php?user=<?php echo $row["user"]; ?>">Delete</a></td>
	</tr>

	<?php  	}
		echo "</table>";
	}
?>

</body>
<?php include 'footer1.php';?>
</html>