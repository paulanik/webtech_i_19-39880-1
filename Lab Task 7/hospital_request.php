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
  <li><a href="store_hospital.php">Add New Hospital</a></li>
  <li><a href="store_user.php">Add New User</a></li>
<!-- <li><a href="hospital_list.php">Hospital List</a></li> -->
  
</ul>
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
  

  <br><center><h2>Hospital Request List</h2></center>

          
      <body>  
        <div class="container" style="width:150%;"> 
                <div class="table-responsive"> 
                     <table class="table table-bordered">  
                          <tr>  
                               <th>Hospital Name</th> 
                               <th>Address</th>  
                               <th>Phone No</th> 
                               <th>Request</th>  
                          </tr>  
                          <tr>
                            <td>National Hospital</td>
                            <td>Dhaka</td>
                            <td>0188888888</td>
                            <td><button style="color: green;"></a>Accept</button> <button style="color: green;border: 6px">Reject</button></td>
                          </tr>

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