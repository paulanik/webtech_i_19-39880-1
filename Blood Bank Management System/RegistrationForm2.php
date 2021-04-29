<?php include_once "controller/rc2.php" ;?>
<html>
  <head>
    <title>Registration</title>
  <link rel="stylesheet" href="css/style_2.css">
  <link rel="stylesheet" href="css/style2_2.css">
  <style>
    /*add a background picture and declaring a size*/
    body{
    background-image: url('Images/Blood.jpg');
    background-repeat: no-repeat;
    background-size: 1600px 900px;
    font-family: "Roboto", sans-serif;
      }
      /*create a form box*/
      .form{
    font-family: "Roboto", sans-serif;
    background: #DAF7A6;
    max-width: 700px;
    margin: 20px auto 50px;
    padding: 10px 45px 30px 45px;
   box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    border-radius: 10px;
   }
  </style>

 
  </head>
  <body>
    <div class="topnav">

  <a style="float: left;font-style: bold;font-size: 20px;">Blood Donation</a>
  <div style="float: right;">
  <a  href="WebHome2.php">Home</a>
  <a href="Login2.php">Login</a>
  <a href="Display2.php">Dispaly</a>
  <a href="AddDonor2.php">AddDonor</a>
  <a href="SearchDonor2.php">Find Donor</a>
  <a class="active" href="RegistrationForm2.php">Registration</a></div>
</div>
<div><?php include 'Images/AccountDesign2.php';?></div>
    <div class="form" align="center">
      
    <form action="" method="post" style="width: 700px;" align="center" onsubmit="return validate()">
      
      <fieldset style="background-color: #DAF7A6;" >
        <table align="center"> 
          <h2><span style="font-weight: bold;font-size: 25px;">REGISTRATION:</span></h2><hr>
            <tr><td><p style="color:red;">Required</p></td></tr>
          <tr>
            <td>Name:</td>
            <td><input type="text" id="name" value="<?php echo $name?>" name="name" placeholder="Enter Your Name"  onblur="myFunction(this)"><span id="nameErr"></span></td>
            <td><span style="color:red;">*<?php echo $nameErr;?></span></td>
          </tr>
          <tr>
            <td>Username:</td>
            <td ><input type="text" id="username" onfocusin="myFunction(this)" placeholder="Enter Your Username" value="<?php echo $username?>" name="username"><span id="unameErr"></span></td>
            <td><span style="color:red;" id = "unameErr">*<?php echo $unameErr;?></span></td>
            <small class="text-help" id="userNameErrorMsg"></small>
          </tr>
          <tr>
            <td>Password:</td>
            <td><input type="password" id="password" value="<?php echo $password?>" name="password" placeholder="Enter Your Password" onfocusin="myFunction(this)"><span id="passErr"></span></td>
            <td><span style="color:red;">*<?php echo $passErr;?></span></td>
          </tr>
          <tr>
            <td>Confirm password:</td>
            <td><input type="password" id="cpassword" value="<?php echo $cpassword?>" name="cpassword" placeholder="Retype Your Password" onfocusin="myFunction(this)"><span id="cpassErr"></span></td>
            <td><span style="color:red;">*<?php echo $cpassErr;?></span></td>
          </tr>
          <tr>
            <td>Email:</td>
            <td><input type="text" id="email" value="<?php echo $email?>" name="email" placeholder="Enter Your Email" onfocusin="myFunction(this)"><span id="emailErr"></span></td>
            <td><span style="color:red;">*<?php echo $emailErr;?></span></td>
          </tr>
          <br>
          <td>Blood Group:</td>
            <td><input type="select" id="blood" value="<?php echo $blood?>" name="blood" placeholder="Write Blood group" onfocusin="myFunction(this)"><span id="bloodErr"></span></td>
            <td><span style="color:red;">*<?php echo $bloodErr;?></span></td>
          </tr>
          <br>
          <tr>
            <td>Address:</td>
            <td><input type="text" id="address" value="<?php echo $address?>" name="address" placeholder="Enter Your Address" onfocusin="myFunction(this)"><span id="addressErr"></span></td>
            <td><span style="color:red;">*<?php echo $addressErr;?></span></td>
          </tr>
          
                     <tr>
            <td>Gender: </td>
            <td>
              <input type="radio" name="gender" value="Male"> Male
              <input type="radio" name="gender" value="Female"> Female
              <input type="radio" name="gender" value="Custom"> Custom
              <td><span style="color:red;">*<?php echo $genderErr;?></span></td>
            </td>
          </tr>
          <tr>
            <td>
              Birth Date:
            </td>
            <td>
              <select name = "day">
                <option disabled="disabled" selected="selected"> Day </option>
                <?php
                                   for($i = 1; $i <= 31; $i++) {
                                     echo "<option>" . "$i" . "</option>";
                                   }
                ?>
              </select>
              <select name="month">
                <option disabled="disabled" selected="selected"> Month </option>
                <?php
                $month = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
                                   for($i = 0; $i < 12; $i++) {
                                     echo "<option> $month[$i] </option>";
                                   }
                ?>
              </select>
              <select name="year">
                <option disabled="disabled" selected="selected"> Year </option>
                <?php
                  for ($i = 0; $i < 30; $i++) {
                    echo "<option>" . (1980+$i) . "</option>";
                  }
                ?>
              </select>
            </td>
            <td>
              <span style="color:red;">*<?php echo "$bdy"; ?></span>
            </td>
          </tr>
          <tr>
            <td colspan="2" align="center">
              <input type="submit" name="submit" value="submit">
            </td>
          </tr>
          </fieldset>
    </form>
    </div>
    <div><?php include 'Images/footer2.php';?></div><hr>
    <script src="JS/valid_reg.js"></script>
    <script>
  function myFunction(x) {
  x.style.background = "yellow";
}
</script>
<script>
function myFunction2() {
  var x = document.getElementById("username");
  x.value = x.value.toUpperCase();
}
</script>

</body>
</html>