<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table,td,th{
      width: 600px;
			border:1px solid black;
      border-width: 3px;
      border-color: #8D91BD;
		}
		th,td {
  	padding:9px;
	}
	</style>
</head>
<body>
		<?php
require_once 'db_connect2.php';
$connect = mysqli_connect("localhost", "root", "", "patient");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM donor 
  WHERE name LIKE '%".$search."%'
   
 ";
}
else
{
 $query = "
  SELECT * FROM donor ORDER BY id
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .=  '  
 <table >
    <tr>
     <th>name</th>
     <th>email</th>
     <th>username</th>
     <th>address</th>
     <th>blood</th>
    
      
    </tr>
 '  ;
 while($row = mysqli_fetch_array($result))
 {
  $output .=  ' 
   <tr>
    <td>  '.$row["name"].' </td>
    <td>  '.$row["email"].' </td>
    <td>  '.$row["username"].' </td>
    <td>  '.$row["address"].' </td>
    <td>  '.$row["blood"].' </td>
   </tr>
  '  ;
 }
 echo $output;
}
else
{
 echo 'Not found';
}

?>