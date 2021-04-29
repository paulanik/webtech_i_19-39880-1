<?php
require_once ('../Model/model2.php');
$tableName = 'patient_db';
session_start();
if(isset($_POST['submit']))
{
  function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
  }

$username = $password = "";
$flag=1;

  if (empty($_POST["username"])) {
    echo "UserName is required<br>";
    $flag = 0;
  } else {
    $username = test_input($_POST["username"]);
    if (!preg_match("/^[a-zA-Z-._]*$/",$username)) {
      echo "Only alpha numeric characters, period, dash or underscore allowed<br>";
      $username ="";
      $flag = 0;
    }
    else if (strlen($username)<2) {
      echo "At least two charecters needed<br>";
      $username ="";
      $flag = 0;
    }
  }
  
  if (empty($_POST["password"])) {
    echo "Password is required<br>";
    $flag=0;
  } else {
    $password = test_input($_POST["password"]);
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
  
if($flag==1)
  {
    try {

      $data = loginSearch($username);
      if($data!=NULL)
      {
        foreach ($data as $i => $user):

             $passwordFromDB= $user['password'] ;
        endforeach;
        if($password==$passwordFromDB)
        {
          echo "Login Successful";
          $_SESSION['username']=$username;
          header('location:../Dashboard2.php');

        }
        else {
          echo "Incorrect Password";
        }
      }else {
        echo "Username not found";
      }


    } catch (Exception $ex) {
      echo $ex->getMessage();
    }

  }

}
else {
  echo "You are not allowed to access this page";
}


?> 