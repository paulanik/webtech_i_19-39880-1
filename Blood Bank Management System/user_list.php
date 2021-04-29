<?php  
session_start();
if(!isset($_SESSION['user'])){
	header('location:admin_login.php');
}
?>
 <script type="text/javascript" src="js/library.js"></script>
 
<!DOCTYPE html>
<html>

<head>
  <?php include 'header1.php';
  require_once 'navbar.php';
  ?>
	<link rel="stylesheet" href="style1.css">

</head>
     
<body>  
  <div class="content">
  <br>
  <center><h2>User List</h2></center>

    <table id="admin_list">  
      <tr>  
      <th>Name</th> 
      <th>Gender</th>  
      <th>Designation</th>   
      <th>Blood Group</th>   
      <th>Phone No</th>   
      </tr> 
       
      <?php   
      $data = file_get_contents("user.json");  
      $data = json_decode($data, true);  
      foreach($data as $row)  
      {  
      echo '<tr>
      <td>'.$row["name"].'</td>
      <td>'.$row["gender"].'</td>
      <td>'.$row["designation"].'</td>
      <td>'.$row["blood_group"].'</td>         
      <td>'.$row["phone_no"].'</td>
      </tr>';  
      }  
      ?>  
    </table>  
  </div>
</body>
<?php include 'footer1.php';?>
</html>