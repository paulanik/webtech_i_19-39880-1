
<?php 
require_once ("controller/enter old donor.php");
include 'header.php';

if (isset($_SESSION['uname'])) {
       include 'info old donor.php';  
}
else{
    $msg="error";
    header("location:login.php");
  }

?>


