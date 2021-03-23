<?php 
session_start();

$conn = mysqli_connect('localhost','root');
// if($conn){ 
// 	echo "connection successful";
// }else{
// 	echo "no connection";
// }

$db = mysqli_select_db($conn, 'labtask5');