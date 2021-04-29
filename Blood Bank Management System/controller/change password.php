<?php 
session_start();
require_once 'model/model.php';

$error='';
$message ='';
if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["currentPassword"]))  
      {  
           $error = "<span class='text-danger'>Enter Current password</span>";  
      } 
      else if ($_POST["currentPassword"] != getOldPass($_SESSION['uname']) ){
           $error = "Incorrect password...";
      }
      else if(empty($_POST["newPassword"]))  
      {  
           $error = "<span class='text-danger'>Enter New password</span>";  
      } 
      else if (!preg_match('#[@$%]{1}#', $_POST["newPassword"])) {
          $error = "<span class='text-danger'>Use one of the special characters (@, $, %)</span>";
      }
      else if (empty($_POST["reNewPassword"])) {
          $error = "<span class='text-danger'>Retype new password is required</span>";
      }
      else if ($_POST["newPassword"] != $_POST["reNewPassword"] ){
          $error = "<span class='text-danger'>New password and retype new password must be same...</span>";
      }
      else {
        if (updatePass($_SESSION['uname'], $_POST["newPassword"])) {
          $message ="Password successfully changed";
        }
        
      }
  }
include 'header.php';
?>