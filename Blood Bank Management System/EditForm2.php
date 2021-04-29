<?php if(!empty($_GET['id'])){ ?>
<?php 

require_once 'controller/displayController2.php';
$tableName = 'donor';
$donor = fetchProduct($tableName, $_GET['id']);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Donor</title>
  <style>
    body{
    background-image: url('Images/image-asset.gif');
    background-repeat: no-repeat;
    background-size: 1600px 900px;
    
      }
  </style>
</head>
<body>

<form action="controller/editFormController2.php?id=<?php echo $_GET['id'] ?>" method="post" enctype="multipart/form-data">
  <fieldset>
<legend><B>Edit Donor</B></legend> <br>
  <div style="float: left; text-align: right;">  
  Name: <input type="text" name="name" value="<?php echo $donor['name']; ?>">
  <br><hr>
  Email: <input type="text" name="email" value="<?php echo $donor['email']; ?>">
  <br><hr>
  Username: <input type="text" name="username" value="<?php echo $donor['username']; ?>">
  <br><hr>
  Address: <input type="text" name="address" value="<?php echo $donor['address']; ?>">
  <br><hr>
  Blood Group: <input type="text" name="blood" value="<?php echo $donor['blood']; ?>">
  <br><hr>
  <input type="checkbox" name="display" value="Yes" <?php if($donor['display']=='Yes'){echo 'checked';} ?>>
  <label for="display">Display</label>
  <br><hr>
  <input type="submit" name="submit" value="Save"></div>
</form>
</fieldset>
</body>
</html>
<?php }
else{
  echo "Only Authorized person will visit this page";
} ?>