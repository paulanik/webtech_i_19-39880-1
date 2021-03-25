<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div class="logincss">
<h2 class="admin">Admin Login</h2>

<form action="login_check.php" method="post">

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" value="" required autocomplete="off" /> <br>

    <label for="psw"><b>Password</b></label>
    <input type="Password" placeholder="Enter Password" name="psw" value=""  required autocomplete="off"
     pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/> <br> 

    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label> <br>

    <button type="submit" name="submit">Login</button>

  </div>

  <div class="container" style="background-color:#f1f1f1">

    <span class="psw"><a href="#">Forgot Password?</a></span>
  </div>
</div>
</form>
</body>
</html>
