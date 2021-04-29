<?php  
session_start();
if(!isset($_SESSION['user'])){
  header('location:admin_login.php');
}

$message = '';  
$error = '';  
if(isset($_POST["submit"]))  
{  
  if(empty($_POST["hospital_name"]))  
  {  
       $error = "<label class='text-danger'>Enter Hospital Name</label>";  
  }  
  else if(empty($_POST["address"]))  
  {  
       $error = "<label class='text-danger'>Enter Address</label>";  
  }  
  else if(empty($_POST["hphone_no"]))  
  {  
       $error = "<label class='text-danger'>Enter Phone No</label>";  
  }  
  else  
  {  
   if(file_exists('data1.json'))  
   {  
      $current_data = file_get_contents('data1.json');  
      $array_data = json_decode($current_data, true);  
      $extra = array(  
           'hospital_name'               =>     $_POST['hospital_name'],  
           'address'          =>     $_POST["address"], 
           'hphone_no'     =>     $_POST["hphone_no"],  
      );  
      $array_data[] = $extra;  
      $final_data = json_encode($array_data);  
      if(file_put_contents('data1.json', $final_data))  
      {  
           $message = "<label class='text-success'>Hospital added Success fully</p>";  
      }  
     }  
     else  
     {  
          $error = 'JSON File not exits';  
     }  
  }  
}  
?>  
 
<?php include 'header1.php';
require_once 'navbar.php';
?>

<!DOCTYPE html>  
<html>  

<head>  
  <link rel="stylesheet" href="style1.css">        
</head>        
<body>   
  <div class="logincss">  
  <br>
  <h3 align="center">Add New Hospital</h3><br />                 
  <form method="post">  
    <?php   
    if(isset($error))  
    {  
        echo $error;  
    }  
    ?>  
    <br />  
    <label>Hospital Name</label>  
    <input type="text" name="hospital_name"/><br />  
    <label>Address</label>  
    <input type="text" name="address"/><br /> 
    <label>Phone No</label>  
    <input type="text" name="hphone_no"/><br />  
    <input type="submit" name="submit" value="Submit"/><br />  
                        
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