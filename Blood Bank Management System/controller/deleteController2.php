<?php if(!empty($_GET['id'])){ ?>
<?php 

require_once '../Model/model2.php';
$tableName = 'donor';
//echo $_GET['id'];
if (deleteDonor($tableName, $_GET['id'])) {
    header('Location: ../display2.php');
}
else{
	echo '<p>Donors Not Deleted!!</p>';
}
 ?>
<?php }
else{
	echo "You are not allowed to visit this page";
} ?>