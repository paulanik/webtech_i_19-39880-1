<?php
//Including Database configuration file.
include "model/connection.php";
//Getting value of "search" variable from "script.js".
if (isset($_POST['search'])) {
//Search box value assigning to $username variable.
  $username = $_POST['search'];
//Search query.
  $Query = "SELECT user FROM `admin_table` WHERE user LIKE '%$username%'";
//Query execution
  $ExecQuery = MySQLi_query($con, $Query);

//Creating table to display result.
 echo '
<table id="admin_list">
<tr>
  <th>Admin List</th>
</tr>
 ';

   //Fetching result from database.
while ($username = MySQLi_fetch_array($ExecQuery)) {
?>  
       
<!--Calling javascript function named as "fill" found in "script.js" file.
    By passing fetched result as parameter. -->

<tr><td>  
<div onclick='fill("<?php echo $username['user'];?>")'> 
  <!-- Assigning searched result in "Search box" in "add_admin.php" file. -->
<a>
  <?php echo $username['user']; ?> 
</a>
</div>
</td></tr> 

<?php
}}
?>
