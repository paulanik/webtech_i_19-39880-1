<?php  
session_start();
if(!isset($_SESSION['user'])){
	header('location:admin_login.php');
}
?>
<?php include 'header.php';?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="dash">
<div style="text-transform: uppercase;">
	<!-- welcome back, <?php echo $_SESSION['user'] ?>! -->
</div>

<ul>
<li>
  <li><a href="admin_dashboard.php">Home</a></li>
  <li><a href="user_list.php">User List</a></li>

<!-- <li><a href="hospital_list.php">Hospital List</a></li> -->
  
</ul>
</div>

<div >
  <a href="hospital_request.php"><button class="hsptl_opn">Hospital Opening Request</button></a> 
</div>

<div class="dashmain" style="table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}">
<div class="content">
  

  <br><center><h2>Hospital List</h2></center>

          
      <body>  
        <div class="container" style="width:500px;">              
                <div class="table-responsive"> 
                     <table class="table table-bordered">  
                          <tr>  
                               <th>Hospital Name</th> 
                               <th>Address</th>  
                               <th>Phone No</th>   
                          </tr>  
                          <?php   
                          $data = file_get_contents("data.json");  
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
                     </table>  
                   </div>
                 </div>
      </body>  
 </html>  

</div>
</div>

</body>
<?php include 'footer.php';?>
</html>