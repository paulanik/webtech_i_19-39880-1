<?php  

session_start();
require_once 'model/model.php';

 $message = '';  
 $error = '';  
 $insert = '';
 if(isset($_POST["submit"]))  
 {  
      
      if(empty($_POST["dUname"]))  
      {  
           $error = "<label class='text-danger'>Enter donor username name</label>";  
      }

      else if (!preg_match("/^[a-zA-Z0-9-._]*$/",$_POST["dUname"])) {
           $error = "<label class='text-danger'>For user name only letters, numbers,  period and dash  allowed</label>";  
      }
      else if (strlen($_POST["dUname"]) < 2){
        $error = "<label class='text-danger'>For user name at least 2 characters needed</label>";  
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
      
      else  
      {  
          if ($insert == '') {
            $data['dUname'] = $_POST['dUname']; 
            $data['bloodGroup'] = $_POST['bloodGroup'];
            $data['price'] = $_POST['price'];
            $data['addedDate'] = $_POST['addedDate'];
            $data['expireDate'] = $_POST['expireDate'];
            $data['hUname'] = $_SESSION['uname']; 

              if ($data['dUname'] !='') {
                if (insertBlood($data)) {
                   $message = 'Successfully added!!';
                   $data['dUname'] = '';
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