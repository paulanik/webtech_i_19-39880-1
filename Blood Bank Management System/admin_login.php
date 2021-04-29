<?php 
require_once ("controller/login_check_cnt.php");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style1.css">
<script type="text/javascript" src="js/login_validate.js"></script>
</head>

<body>  


<h2>Blood Bank Management System</h2></p>
</div>
    
</div>
</div>
<hr>

<div class="logincss">
<h2 class="loginCenter">Admin Login</h2>
<form action="LOGIN.php"><button type="submit" name="submit" class="profilee">Hospital Login</button></form>
<form action="WebHome2.php"><button type="submit" name="submit" class="profilee">Patient Login</button></form>


<form name="admin_login" action="" onsubmit="validateForm()" autocomplete="off" method="post">


  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" onkeyup="checkUname()" onblur="checkUname()" id="uname" value="" /> 
    <span id="unameErr"></span>
    <br>
    <!-- <span><?php if (isset($unameErr)) echo $unameErr; ?></span> -->
 
    <label for="psw"><b>Password</b></label>
    <input type="Password" placeholder="Enter Password" name="psw" onkeyup="checkPassword()" onblur="checkPassword()" id="password" value="" />
    <span id="passErr"></span> 
    <br> 

    <button type="submit" name="submit">Login</button>

  </div>
  </div>
</div>
</form>
</body>
</html>
