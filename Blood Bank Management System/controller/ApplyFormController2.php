<?php
require_once '../Model/model2.php';

if(isset($_POST["submit"])){
$flag=1;
$name = $email = $gender = $Pnumber = $address = "";
$username = $password = "";
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    echo "Name is required";
    $flag=0;
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-.' ]*$/",$name)) {
      echo "Only letters white space, period & dash allowed";
      $name ="";
      $flag=0;
    }
    else if (str_word_count($name)<2) {
      echo "At least two words needed";
      $name ="";
      $flag=0;
    }
  }
  
  if (empty($_POST["email"])) {
    echo "Email is required";
    $flag=0;
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo"Invalid email format";
      $email ="";
      $flag=0;
    }
  }

  if (empty($_POST["phone"])) {
    echo "Phone number is required";
    $flag=0;
  }else {
    $Pnumber = test_input($_POST["phone"]);
   if (strlen($Pnumber)>11 || strlen($Pnumber)<11) {
      echo "Enter Only 11 digit Phone number";
      $Pnumber ="";
      $flag=0;
    }
   if (empty($_POST["address"])) {
    echo "Present Address is required";
    $flag=0;
  } else {
    $address = test_input($_POST["address"]);
  } 

  if (empty($_POST["gender"])) {
    echo "Select gender";
    $flag=0;
  } else {
    $gender = test_input($_POST["gender"]);
  }
  }
  } 
 if ($flag==1) {
 	     $data['name']=$name;
  $data['email']=$email;
  $data['phone']=$Pnumber;
  $data['address']=$address;
  $data['gender']=$gender;

  if (Apply($data)) {
    echo 'Successfully added!!<br>';
  }

  else {
    echo 'Could not add!!<br>';
  }
}
}

else {
  echo "You can not access this page!!<br>";
}



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>