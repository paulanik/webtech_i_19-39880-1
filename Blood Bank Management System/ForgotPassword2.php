<!DOCTYPE HTML>  
<html>
<head>
  <title>Change Password</title>
  <link rel="stylesheet" href="css/style_2.css">
<style>
.error {color: #FF0000;
        font-size: 14px;}
.form{
    font-family: "Roboto", sans-serif;
    background: #FFFFFF;
    max-width: 300px;
    margin: 100px auto 100px;
    padding: 10px 45px 30px 45px;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    border-radius: 10px;
  }
  body{
    background-image: url(Images/image-asset.gif);
    background-repeat: no-repeat;
    background-size: 1600px 780px;
      }
  h2{  font-style: bold;
       font-size: 30px;
        }
  form{ padding-top: 20px;
        font-size: 20px;}
  input{
       height: 20px;
       border: 2px solid #ddd;
       border-radius: 2px;
       padding: 4px;
       background-color: #fff;
       box-shadow: inset 1px 1px 3px rgba(0,0,0,0.2);
  }
    input[type="submit"] {
    padding: 0px 25px;
    background-color: green;
    border: 2px;
    color: #fff;
    margin-left: 5px;
    border-radius: 2px;
    margin-bottom: 4px;
}

</style>
</head>
<body>  
<div class="topnav">
  <a style="float: left;font-style: bold;font-size: 20px;">Blood Donation</a>
  <div style="float: right;">
  <a href="WebHome2.php">Home</a>
  <a class="active" href="">Login</a>
  <a href="">Registration</a></div>
</div>
<?php
// define variables and set to empty values

$usernameErr = $newpasswordErr = $retypepasswordErr = "";
$username = $newpassword = $retypepassword = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["username"])) {
    $usernameErr = "Current username is required";
  } else {
    $username = test_input($_POST["username"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
      $usernameErr = "Only letters, white space, period & dash is allowed";
      $username = "";
          }
       else if(strlen($username)<2)
          {
           $usernameErr = "User Name must contain at least two (2) characters";
           $username = "";

          }
     }

if (empty($_POST["newpassword"])) {
    $newpasswordErr = "New password field is required";
  } else {
      $newpassword = test_input($_POST["newpassword"]);
      if(strlen($newpassword)<8){
      $newpasswordErr = "Must not be less than eight (8) characters";
      $newpassword = "";
  }
  elseif (!preg_match("/[@, #, $,  %]/",$newpassword)) {
      $newpasswordErr ="Password must contain at least one of the special characters (@, #, $,  %)";
      $newpassword = "";
    }
          

}

if (empty($_POST["retypepassword"])) {
    $retypepasswordErr = "Retype password field is required";
  } else {
      $retypepassword = test_input($_POST["retypepassword"]);
      if(strlen($retypepassword)<8){
      $retypepasswordErr = "Must not be less than eight (8) characters";
      $retypepassword = "";
  }
  elseif (!preg_match("/[@, #, $,  %]/",$retypepassword)) {
      $retypepasswordErr ="Password must contain at least one of the special characters (@, #, $,  %)";
      $retypepassword = "";
    }

  elseif (!strcmp($retypepassword, $newpassword)==0) {
        $retypepasswordErr = "New Password must match with the Retype Password!";
        $retypepassword = "";
            }
            else {
         $retypepassword = test_input($_POST["retypepassword"]);
     }
     }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?> 



<div class="form">
<form method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"><a href="Login2.php" style="float: right; font-style: italic;font-size: 15px;">Go Back</a> 
 <h2>Change Password</h2><br><hr><br> 
  Current Username : 
  <input type="text" size= "30" name="currentpassword" placeholder="Enter your current username" >
  <span class="error"><br> <?php echo $usernameErr;?></span>
  <br><br>
  
  New Password :
  <input type="text" size="30" name="newpassword" placeholder="Enter your new password" >
  <span class="error"><br> <?php echo $newpasswordErr;?></span>
  <br><br>

  Retype New Password : 
  <input type="text" size= "30" name="retypepassword" placeholder="Re-type your new password" >
  <span class="error"><br> <?php echo $retypepasswordErr;?></span>
  <br><br><hr>

  <input type="submit" name="submit" value="Submit" size="30">

</form></div><br><div><?php include 'Images/footer2.php';?></div> 
</body>
</html>