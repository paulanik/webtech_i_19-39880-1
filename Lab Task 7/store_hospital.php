<?php  
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
           if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'hospital_name'               =>     $_POST['hospital_name'],  
                     'address'          =>     $_POST["address"], 
                     'hphone_no'     =>     $_POST["hphone_no"],  
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data.json', $final_data))  
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
 <?php include 'header.php';?>
 <head>
  <link rel="stylesheet" href="style.css">
</head>
 <!DOCTYPE html>  
 <html>  

<div class="dash">


<ul>


  

      <li><a href="admin_dashboard.php">Home</a></li>

  <li><a href="hospital_list.php">Hospital List</a></li>
  <!-- <li><a href="store_user.php">Add New User</a></li> -->
  <li><a href="user_list.php">User List</a></li>
  <li><a href="store_user.php">Add New User</a></li>
  <!-- <li><a href="editprofile.php">Donor List</a></li> -->

</ul>
  <!-- <button class="logoutt"><a href="logout.php">Logout</a></button> -->
</div>


 
      <head>  
           <title>Add New Hospital</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:500px;">  
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
                     <input type="text" name="hospital_name" class="form-control" /><br />  
                     <label>Address</label>  
                     <input type="text" name="address" class="form-control" /><br /> 
                     <label>Phone No</label>  
                     <input type="text" name="hphone_no" class="form-control" /><br />  
                     <input type="submit" name="submit" value="Append" class="btn btn-info" /><br />                      
                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
                </form>  
           </div>  
           <br />  
      </body>  
      <?php include 'footer.php';?>
 </html>  