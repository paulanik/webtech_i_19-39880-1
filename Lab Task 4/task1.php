<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>


<?php
$name = "paul";
$pass = "@paul1234";
$userNameErr = $passwordErr = "";
$userName = $password = "";
$verify = 1;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["userName"])) {
    $userNameErr = "User name is required";
    $verify = 0;
  } else {
    $userName = test_input($_POST["userName"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z0-9-._]*$/",$userName)) {
      $userNameErr = "Only letters, numbers,  period and dash  allowed";
      $userName = "";
      $verify = 0;
    }
    else {
      if (strlen($userName) < 2){
        $userNameErr = " At least 2 characters";
        $userName = "";
        $verify = 0;
      }
      else{
      	if ($userName != $name){
      		$verify = 0;
      	}
      }

    }
  }
  
  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
    $verify = 0;
  } else {
    $password = test_input($_POST["password"]);
    	if (!preg_match('#[@$%]{1}#', $password)) {
      	$passwordErr = "Use one of the special characters (@, $, %)";
     	$password = "";
     	$verify = 0;
    }
    	else {
    		if (strlen($password) < 8 ){
    			$passwordErr = "Password must not be less than eight (8) characters";
    			$password = "";
    			$verify = 0;
    		}
    		else{
    			if ($password != $pass){
    				$verify = 0;
    			}
    		}

    }
  }
  if ($verify == 1){
	echo "<h2> Login successful </h2>";
}
else{
	echo "<h2> Enter valid user name and password..</h2>";
}

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h3 align="" style = "display:inline-block; width:250px;text-align:right;">LOGIN</h3><br />
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

  <span style = "display:inline-block; width:250px;text-align:right;"><b>User Name:</b></span> 
  <input type="text" name="userName" value="<?php echo $userName;?>">
  <span class="error">* <?php echo $userNameErr;?></span>
  <br><br>

  <span style = "display:inline-block; width:250px;text-align:right;"><b>Password:</b></span> 
  <input type="password" name="password" value="<?php echo $password;?>">
  <span class="error">* <?php echo $passwordErr;?></span> 
   <br><br>

   <span style = "display:inline-block; width:300px;text-align:right;">
  <input type="checkbox" name="degree1" value="ssc">Remember me
  
  <br><br>
  <span style = "display:inline-block; width:430px;text-align:right;"><input type="submit" name="submit" value="Submit"> </span> <a href="https://sites.google.com/view/anikpaul/home">Forgot password?</a>
   
</form>

</body>
</html>