<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table,td,th{
			border:1px solid black;
		}
		th, td {
  	padding: 15px;
	}
	</style>
</head>
<body>

<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Username</th>
			<th>Address</th>
			<th>Blood Group</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($allSearchedProducts as $i => $donor): ?>
			<?php if($donor['display']=='Yes'){ ?>
			<tr>
				<td><?php echo $donor['id'] ?></td>
				<td><?php echo $donor['name'] ?></td>
				<td><?php echo $donor['email'] ?></td>
				<td><?php echo $donor['username'] ?></td>
				<td><?php echo $donor['address'] ?></td>
				<td><?php echo $donor['blood'] ?></td>
				<td><a href="EditForm2.php?id=<?php echo $donor['id'] ?>">Edit</a>&nbsp&nbsp<a href="Delete2.php?id=<?php echo $donor['id'] ?>">Delete</a></td>
			</tr>
		<?php } ?>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>
