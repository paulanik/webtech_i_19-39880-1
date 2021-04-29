
<?php 
require_once ("controller/enter blood.php");
include 'header.php';

if (isset($_SESSION['uname'])) {
       include 'info.php';  
}
else{
    $msg="error";
    header("location:login.php");
  }

?>


