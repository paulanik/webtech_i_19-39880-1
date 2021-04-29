
<?php 
session_start();
include 'header.php';

if (isset($_SESSION['uname'])) {
       include 'blood page.php';  
}
else{
    $msg="error";
    header("location:login.php");
  }

?>


