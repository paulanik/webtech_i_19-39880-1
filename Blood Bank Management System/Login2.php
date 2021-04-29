
<!DOCTYPE HTML>  
<html>
<head>
  <title>Form Login</title>
  <link rel="stylesheet" href="css/style_2.css">
  <link rel="stylesheet" href="css/style2_2.css">
  
<style>
  /*create a form box*/
  .form{
    font-family: "Roboto", sans-serif;
    background: #DAF7A6;
    
    max-width: 500px;
    margin: 50px auto 100px;
    padding: 10px 45px 30px 45px;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    border-radius: 10px;
  }
  /*add a background picture and declaring a size*/
  body{
    background-image: url('Images/blood-donation-4.jpg');
    background-repeat: no-repeat;
    background-size: 1600px 780px;
    }
</style>
</head>
<body>
<div class="topnav">
  <a style="float: left;font-style: italic;font-size: 20px;">Blood Donation</a>
  <div style="float: right;">
  <a href="WebHome2.php">Home</a>
  <a class="active" href="Login2.php">Login</a>
  <a href="RegistrationForm2.php">Registration</a></div>
</div>
 <div><?php include 'Images/AccountDesign2.php';?></div>  
<div class="form">
<form  method="post" enctype="multipart/form-data" onsubmit="return validate()" action="controller/LoginController2.php" onsubmit=" return validateform()"> 

<h2 style="font-size: 50px;">Login</h2>
  <hr>
  User Name: 
  <input type="text"size= "30" name="username" placeholder="Enter your name" id="username" >
  <br><br>

  Password:
  <input type="password"size="30" name="password" placeholder="Enter your password" id="password" >
  
  <br>
  <hr>

  <input type="submit" name="submit" value="submit" size="30" >&nbsp;
  <a href="ForgotPassword2.php" class="active" style="font-size: 17px;color: #4169E1;">Forgot password?</a><br><br><br>
  <p style="font-style: italic;font-size: 15px;">Don't have an account?&nbsp;<a href="RegistrationForm2.php" class="active" style="font-size: 15px;color: #4169E1;">Sign Up</a></p> 
</form></div>
<div>
  <?php include 'Images/footer2.php';?></div><hr>
  


</div>
<script src="JS/valid_reg.js"></script>
</body>
<script>
  "use strict"
  
  function validate()
  {
     let name= document.forms["myForm"] ["username"].value;
     if(name=="")
     {
       alert("username is required");
     return false;
     
     }
     
    let password= document.forms["myForm"] ["password"].value;
     if(password=="")
     {
       alert("Password is required");
     return false;
     
     }
     
     else if(password.length <=2)
     {
        alert("Password must be longer than 2 characters");
      
      return false;
     }
     
  }
    
  </script>
</html>
