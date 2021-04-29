<?php  
session_start();
if(!isset($_SESSION['user'])){
	header('location:admin_login.php');
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
  <div class="content">
  <br>
  <center><h2>Hospital List</h2></center>

      <table id="admin_list">  
        <tr>  
        <th>Hospital Name</th> 
        <th>Address</th>  
        <th>Phone No</th>   
        </tr>  
        <?php   
        $data = file_get_contents("data1.json");  
        $data = json_decode($data, true);  
        foreach($data as $row)  
        {  
        echo '<tr>
        <td>'.$row["hospital_name"].'</td>
        <td>'.$row["address"].'</td>       
        <td>'.$row["hphone_no"].'</td>
        </tr>';  
        }  
        ?>  
      </table> <br><br>

  </div>
</body>   
<?php include 'footer1.php';?>
</html>