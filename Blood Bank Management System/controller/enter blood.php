<?php  

session_start();
require_once 'model/model.php';

 $message = '';  
 $error = '';  
 $insert = 1;
 if(isset($_POST["submit"]))  
 {  
      
      if(empty($_POST["dname"]))  
      {  
           $error = "<label class='text-danger'>Enter a name</label>";  
      }

      else if(empty($_POST["bloodGroup"]))  
      {  
           $error = "<label class='text-danger'>Select a Blood Group</label>";  
      }  

      else if(empty($_POST["price"]))  
      {  
           $error = "<label class='text-danger'>Enter price</label>";  
      }  

      else if(empty($_POST["addedDate"]))  
      {  
           $error = "<label class='text-danger'>Enter added date</label>";  
      } 

      else if ($_POST["addedDate"] > date("Y-m-d")) {
          $error = "<label class='text-danger'>Enter valid Added date</label>"; 
      }

      else if(empty($_POST["expireDate"]))  
      {  
           $error = "<label class='text-danger'>Enter Expire date</label>";  
      } 

      else if(empty($_POST["gender"]))  
      {  
           $error = "<label class='text-danger'>Select a Gender</label>";  
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

      else if(empty($_POST["address"]))  
      {  
           $error = "<label class='text-danger'>Enter a Address</label>";  
      }  

      else if(empty($_POST["dUname"]))  
      {  
           $error = "<label class='text-danger'>Enter User name</label>";  
      } 
      else if (!preg_match("/^[a-zA-Z0-9-._]*$/",$_POST["dUname"])) {
           $error = "<label class='text-danger'>For user name only letters, numbers,  period and dash  allowed</label>";  
      }
      else if (strlen($_POST["dUname"]) < 2){
        $error = "<label class='text-danger'>For user name at least 2 characters needed</label>";  
      }

      else if (getDonorUname($_POST["dUname"]) == 1){
        $error = "<label class='text-danger'>Username already exists, select another Username</label>";  
      }
      
      else  
      {  
          if ($insert == 1) {
            $data['dname'] = $_POST['dname'];
            $data['bloodGroup'] = $_POST['bloodGroup'];
            $data['price'] = $_POST['price'];
            $data['addedDate'] = $_POST['addedDate'];
            $data['expireDate'] = $_POST['expireDate'];
            $data['gender'] = $_POST['gender'];
            $data['phone'] = $_POST['phone'];
            $data['email'] = $_POST['email']; 
            $data['address'] = $_POST['address'];
            $data['dUname'] = $_POST['dUname']; 
            $data['hUname'] = $_SESSION['uname']; 

            if (getDonorUname($data['dUname']) != 1){
              if (insertDonor($data)) {
                if (insertBlood($data)) {
                   $message = 'Successfully added!!';
                   $insert = 0;
                }     
              }

            }
          } 
      }  
 }  

 function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 ?>  