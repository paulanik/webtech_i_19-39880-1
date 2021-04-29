<?php 
session_start();
require_once 'model/model.php';
$hnameErr = $phoneErr = $emailErr = $addressErr = '';
$msg = '';
$success = 1;
if(isset($_POST["submit"]))  
{  
  if(empty($_POST["hname"]))  
      {  
           $hnameErr = "<span class='text-danger'>Hospital Name can not be empty</span>";  
           $success = 0;
      }
  if(empty($_POST["phone"])) {  
           $phoneErr = "<span class='text-danger'>Phone no can not be empty</span>"; 
           $success = 0; 
      } else {
        if(!preg_match("/^[0-9]*$/",$_POST["phone"]) || strlen($_POST["phone"]) < 8 || strlen($_POST["phone"]) > 11) {  
           $phoneErr = "<span class='text-danger'>Enter valid Phone no</span>";  
           $success = 0;
        } 
      }

  if(empty($_POST["email"])) {  
           $emailErr = "<span class='text-danger'>Email can not be empty</span>";
           $success = 0;  
      } else {
        if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
           $emailErr = "<span class='text-danger'>Enter valid email </span>"; 
           $success = 0 ;
        }
      }

  if(empty($_POST["address"])) {  
           $addressErr = "<span class='text-danger'>Address can not be empty</span>";
           $success = 0;  
      }
  

      if ($success == 1) {
            $data['hname'] = $_POST['hname'];
            $data['phone'] = $_POST['phone'];
            $data['email'] = $_POST['email'];
            $data['address'] = $_POST['address'];           

            if (updateHinfo($_SESSION['uname'], $data)) {
              $msg = 'Successfully updated!!';
            }
      } 
}
?>
