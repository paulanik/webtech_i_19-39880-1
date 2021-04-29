<?php  
session_start();
if(!isset($_SESSION['user'])){
  header('location:admin_login.php');
}

$message = '';  
$error = '';  
if(isset($_POST["submit"]))  
{  
  if(empty($_POST["name"]))  
  {  
       $error = "<label class='text-danger'>Enter Name</label>";  
  }  
  else if(empty($_POST["gender"]))  
  {  
       $error = "<label class='text-danger'>Enter Gender</label>";  
  }  
  else if(empty($_POST["designation"]))  
  {  
       $error = "<label class='text-danger'>Enter Designation</label>";  
  }  
  else  
  {  
   if(file_exists('user.json'))  
   {  
      $current_data = file_get_contents('user.json');  
      $array_data = json_decode($current_data, true);  
      $extra = array(  
         'name'               =>     $_POST['name'],  
         'gender'          =>     $_POST["gender"],  
         'designation'     =>     $_POST["designation"],  
         'blood_group'     =>     $_POST["blood_group"],  
         'phone_no'     =>     $_POST["phone_no"],  
      );  
      $array_data[] = $extra;  
      $final_data = json_encode($array_data);  
      if(file_put_contents('user.json', $final_data))  
      {  
           $message = "<label class='text-success'>User added Success fully</p>";  
      }  
   }  
   else  
   {  
        $error = 'JSON File not exits';  
   }  
  }  
}  
?>  

<!DOCTYPE html>  
<html>  
<head> 
  <?php include 'header1.php';
  require_once 'navbar.php';
  ?>
  <link rel="stylesheet" href="style1.css">
</head>
<body>  
  <div class="logincss" >  
  <br/> 
  <h3 align="center">Add New User</h3><br />                 
    <form method="post">  
      <?php   
      if(isset($error))  
      {  
      echo $error;  
      }  
      ?>  
       
      <label>Name</label>  
      <input type="text" name="name"/><br />  
      <label>Gender</label>  
      <input type="text" name="gender"/><br />  
      <label>Designation</label>  
      <input type="text" name="designation"/><br />
      <label>Blood Group</label>    
      <input type="text" name="blood_group"/><br />  
      <label>Phone</label>  
      <input type="text" name="phone_no"/><br />  
      <input type="submit" name="submit" value="Submit"/>

      <?php  
      if(isset($message))  
      {  
      echo $message;  
      }  
      ?>
    </form>  
  </div>   
</body>  
<?php include 'footer1.php';?>
</html>