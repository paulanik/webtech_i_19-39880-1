<?php  
require_once 'controller/displayController2.php';
$tableName = 'donor';
$donors = fetchAllProducts($tableName);

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/style_2.css">
  <link rel="stylesheet" href="css/style2_2.css">
	<style>
		body{
    background-image: url('Images/wp4323461.png');
    background-repeat: no-repeat;
    background-size: 1600px 900px;
      }
	table, th, td {
  	border: 1px solid black;
	}
	th, td {
  	padding: 15px;
	}
</style>
	<title></title>
</head>
<body>
	<div class="topnav">
		<a style="float: left;font-style: bold;font-size: 20px;">Blood Donation</a>
	<div style="float: right;"><a href="SearchDonor2.php">Find Donor</a>
	<a href="AddDonor2.php">AddDonor</a>
<a href="Display2.php">Dispaly</a></div>

</div>
<fieldset>
<legend><B>DISPLAY</B></legend> <br>
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
		<?php foreach ($donors as $i => $donor): ?>
			<?php if($donor['display']=='Yes'){ ?>
			<tr>
				<td><?php echo $donor['id'] ?></td>
				<td><?php echo $donor['name'] ?></td>
				<td><?php echo $donor['email']?></td>
				<td><?php echo $donor['username']?></td>
				<td><?php echo $donor['address']?></td>
				<td><?php echo $donor['blood']?></td>
				<td><a href="EditForm2.php?id=<?php echo $donor['id'] ?>">Edit</a>&nbsp&nbsp<a href="delete2.php?id=<?php echo $donor['id'] ?>">Delete</a></td>
			</tr>
		<?php } ?>
		<?php endforeach; ?>
		

	</tbody>
	

</table>
</fieldset>

</body>
</html>