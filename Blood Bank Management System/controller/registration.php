<?php  

session_start();
require_once 'model/model.php';

 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["hname"]))  
      {  
           $error = "<label class='text-danger'>Enter Hospital Name</label>";  
      } 

      else if(empty($_POST["phone"]))  
      {  
           $error = "<label class='text-danger'>Enter Phone no</label>";  
      } 

      else if(!preg_match("/^[0-9]*$/",$_POST["phone"]))  
      {  
           $error = "<label class='text-danger'>Enter valid Phone no</label>";  
      } 

      else if (strlen($_POST["phone"]) < 8  || strlen($_POST["phone"]) > 11){
           $error = "<label class='text-danger'>Phone number can not be less than eight (8) digits and more than 11 digits </label>";           
      }

      else if(empty($_POST["email"]))  
      {  
           $error = "<label class='text-danger'>Enter Email</label>";  
      } 
      else if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
           $error = "<label class='text-danger'>Enter valid email </label>"; 
      }


      else if(empty($_POST["uname"]))  
      {  
           $error = "<label class='text-danger'>Enter User name</label>";  
      } 
      else if (!preg_match("/^[a-zA-Z0-9-._]*$/",$_POST["uname"])) {
           $error = "<label class='text-danger'>For user name only letters, numbers,  period and dash  allowed</label>";  
      }
      else if (strlen($_POST["uname"]) < 2){
        $error = "<label class='text-danger'>For user name at least 2 characters needed</label>";  
      }


      else if(empty($_POST["password"]))  
      {  
           $error = "<label class='text-danger'>Enter Password</label>";  
      }
      else if (strlen($_POST["password"]) < 8 ){
           $error = "<label class='text-danger'>Password must not be less than eight (8) characters</label>";           
      }
      else if (!preg_match('#[@$%]{1}#', $_POST["password"])) {
           $error = "<label class='text-danger'>For password use one of the special characters (@, $, %)</label>"; 
      }


      else if(empty($_POST["confirmPassword"]))  
      {  
           $error = "<label class='text-danger'>Enter Confirm password</label>";  
      } 
      else if($_POST["password"] != $_POST["confirmPassword"])  
      {  
           $error = "<label class='text-danger'>Password and confirm password didn't match</label>";  
      } 
      
      else  
      {  
            if (isset($_POST["submit"])) {
            $data['hname'] = $_POST['hname'];
            $data['phone'] = $_POST['phone'];
            $data['email'] = $_POST['email'];
            $data['address'] = $_POST['address'];
            $data['uname'] = $_POST['uname'];
            $data['password'] = $_POST['password'];           

            if (insertData($data)) {
              echo 'Successfully added!!';
              $_SESSION['uname'] = $_POST['uname'];
              header("location:LOGGED IN DASHBOARD.php");
            }
            } else {
              echo 'You are not allowed to access this page.';
            }
           
      }  
 }  

 ?>  