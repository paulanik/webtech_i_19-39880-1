<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
	<div>
		<form method="POST" action="add.php">
			<label>Firstname:</label><input type="text" name="firstname">
			<label>Lastname:</label><input type="text" name="lastname">
			<input type="submit" name="add">
		</form>
	</div>
	<br>
	<div>
		<table border="1">
			<thead>
				<th>Firstname</th>
				<th>Lastname</th>
				<th></th>
			</thead>
			<tbody>
				<?php
					include('conn.php');
					$query=mysqli_query($conn,"select * from `user`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['firstname']; ?></td>
							<td><?php echo $row['lastname']; ?></td>
							<td>
								<a href="edit_form.php?id=<?php echo $row['userid']; ?>">Edit</a>
								<a href="delete.php?id=<?php echo $row['userid']; ?>">Delete</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>

		      <body>
<br>
      <form action="add_form.php" method="post">
        Search: <input type="text" name="firstname" />
      <input type="submit" name="submit" value="Submit" />
      </form>

      <?php

$sql = "SELECT * FROM user";
if( isset($_GET['submit']) ){
    $name = mysqli_real_escape_string($conn, htmlspecialchars($_GET['submit']));
    $sql = "SELECT * FROM users WHERE firstname ='$firstname'";
}
$result = $conn->query($sql);

while($row = $result->fetch_assoc()){
    ?>
    <tr>
    <td><?php echo $row['firstname']; ?></td>
    <td><?php echo $row['lastname']; ?></td><br>
    </tr>
    <?php
}
?>

</body>
	</div>
</body>
</html>