<?php  
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
  
  <li><a href="store_hospital.php">Add New Hospital</a></li>
  <!-- <li><a href="editprofile.php">Donor List</a></li> -->

</ul>
  <!-- <button class="logoutt"><a href="logout.php">Logout</a></button> -->
</div>



      <head>  
           <title>Add New User</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">Add New User</h3><br />                 
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br />  
                     <label>Name</label>  
                     <input type="text" name="name" class="form-control" /><br />  
                     <label>Gender</label>  
                     <input type="text" name="gender" class="form-control" /><br />  
                     <label>Designation</label>  
                     <input type="text" name="designation" class="form-control" /><br />
                     <label>Blood Group</label>    
                     <input type="text" name="blood_group" class="form-control" /><br />  
               <label>Phone</label>  
                     <input type="text" name="phone_no" class="form-control" /><br />  
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