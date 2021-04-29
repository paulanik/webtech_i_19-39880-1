<?php
require_once '../Model/model2.php';

if(isset($_POST["submit"])){  
$flag=1;
$nameErr = $emailErr = $genderErr = $unameErr = $addressErr=$passErr=$bloodErr= $id = $name = $email =$uname = $pass= $address = $blood"";
$uname = $pass = "";
$unameErr = $passErr = $cpassErr = $cpass = "";
$message = '';  
$error = '';

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 } 
  if (empty($_POST["name"])) {
    echo 'Name is required!<br>';
    $flag=0;
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-.' ]*$/",$name)) {
      echo "Only letters white space, period & dash allowed<br>";
      $name ="";
      $flag=0;
    }
    else if (str_word_count($name)<2) {
      echo "At least two words needed<br>";
      $name ="";
      $flag=0;
    }
  }
  
  if (empty($_POST["email"])) {
    echo "Email is required<br>";
    $flag=0;
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Invalid email format<br>";
      $email ="";
      $flag=0;
    }
  }

  if (empty($_POST["birthday"])) {
    echo "DOB is required<br>";
    $flag=0;
    } 
    else {
    $dob = test_input($_POST["birthday"]);
  }

  if (empty($_POST["gender"])) {
    echo "Gender is required<br>";
    $flag=0;
  } else {
    $gender = test_input($_POST["gender"]);
  }
 if (empty($_POST["address"])) {
    echo "Address is required<br>";
    $flag=0;
  } else {
    $address = test_input($_POST["address"]);
  }
  if (empty($_POST["username"])) {
    echo "UserName is required<br>";
    $flag=0;
  } else {
    $username = test_input($_POST["username"]);
    if (!preg_match("/^[a-zA-Z-._]*$/",$username)) {
      echo "Only alpha numeric characters, period, dash or underscore allowed<br>";
      $username ="";
      $flag=0;
    }
    else if (strlen($username)<2) {
      echo "At least two charecters needed<br>";
      $username ="";
      $flag=0;
    }
  }
  
  if (empty($_POST["Password"])) {
    echo "Password is required<br>";
    $flag=0;
  } else {
    $password = test_input($_POST["Password"]);
    if (strlen($password)<5) {
      echo "Password must be 5 charecters<br>";
      $password ="";
      $flag=0;
    }
    else if (!preg_match("/[@,#,$,%]/",$password)) {
      echo "Password must contain at least one of the special characters (@, #, $,%)<br>";
      $password ="";
      $flag=0;
    }
  }
  if (empty($_POST["confirmpass"])) {
    echo "Retype The Current Password<br>";
    $flag=0;
  } else {
    $confirmpass = test_input($_POST["confirmpass"]);
    if (strcmp($password, $confirmpass)==1) {
      echo "Password & Retyped Password Dosen't Match<br>";
      $confirmpass ="";
       }
  }


if($flag==1)
{
  $data['name']=$name;
  $data['email']=$email;
  $data['username']=$username;
  $data['password']=$password;
  $data['dateofbirth']=$dob;
  $data['address']=$address;

  if (register($data)) {
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


 ?>
