<?php 
require_once 'model/model.php';
$msg = '';
if(isset($_POST["submit"]))  
{  
  setBloodAvailable($_POST["bloodId"]);
  $msg = 'success';
}
?>
