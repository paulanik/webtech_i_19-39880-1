<?php if(!empty($_GET['id'])){ ?>
<?php 

require_once 'controller/displayController2.php';
$tableName = 'donor';
$donor = fetchProduct($tableName, $_GET['id']);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete Product</title>
</head>
<body>
	<fieldset>
<legend><B>Delete Product</B></legend> <br>
<form action="controller/deleteController2.php?id=<?php echo $_GET['id'] ?>" method="post" enctype="multipart/form-data">
<div>Donor ID: <?php echo $_GET['id']; ?> <hr>
	Name: <?php echo $donor['name']; ?> <hr>
	Email: <?php echo $donor['email']; ?> <hr>
	Username: <?php echo $donor['username']; ?> <hr>
	Address: <?php echo $donor['address']; ?> <hr>
	Blood Group: <?php echo $donor['blood']; ?> <hr>
	Displayable: <?php echo $donor['display']; ?>
</div>
<hr>
  <input type="submit" name="submit" value="delete">
</form>
</fieldset>
</body>
</html>
<?php }
else{
	echo "only Authorized person will visit this page";
} ?>