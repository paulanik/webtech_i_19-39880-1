<!DOCTYPE HTML>
<html>

<head>
  <title>Apply for Test</title>
  <link rel="stylesheet" href="css/style_2.css">
  <link rel="stylesheet" href="css/style2_2.css">
  <style>

    body{
    background-image: url('Images/wp4323461.png');
    background-repeat: no-repeat;
    background-size: 1800px 1250px;
      }
    .form{
    font-family: "Roboto", sans-serif;
    background: #DAF7A6;
    max-width: 600px;
    margin: 33px auto 50px;
    padding: 10px 45px 30px 45px;
   box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    border-radius: 10px;
   }
  </style>
</head>
  
<body>
<div class="topnav">
  <a style="float: left;font-style: italic;font-size: 20px;">Blood Donation Form</a>
  <div style="float: right;">
  <a href="Dashboard2.php">Dashboard</a>
  <a href="Profile2.php">Profile</a>
  <a class="active" href="ApplyForm2.php">Apply</a>
  <a href="Report2.php">Report</a></div>
</div>
<?php

 $birthErr = $nameErr = $emailErr =$CityErr=$degreeErr=$BGErr= $genderErr = $websiteErr =$error= "";
 $birthDate = $birthMonth =$City=$degree=$BG= $birthYear = $name = $email = $gender = $comment = $website = "";
 $username=$password="";
 $usernameErr=$passwordErr="";
$confirmpassword="";
$confirmpasswordErr="";
$flag=1;
?>
 <br>
    <div><?php include 'Images/AccountDesign2.php';?></div>
    <div class="form">
     <form method="post" action="controller/ApplyFormController2.php">
      
      <h2><span style="font-weight: bold;font-size: 30px;color: #2F4F4F;">APPLICATION FORM</span></h2><hr><br>
            
            Name: <input type="text" name="name" placeholder="Enter Your Name" size="25">
            <br>
            <br>
            E-mail: <input type="text" name="email" placeholder="Enter your Email" size="25">
            
            <br>
            <br>
           Phone Number: <input type="text" name="phone" placeholder="Enter your phone number" size="30">
            
            <br>
            <br>

            Address:
                <input type="text" name="address" size="40">
                
                <br>
                <br>

  Blood Group:
        <label for="BG"></label>
        <select id="BG" name="BG">
            <option value="">Select any one</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
        </select><span class="error">* <?php echo $BGErr;?></span>
            <br>
            <br>
                 Gender:&nbsp;&nbsp;&nbsp;
                <input type="radio" name="gender" value="female">Female
                &nbsp;&nbsp;<input type="radio" name="gender" value="male">Male
                &nbsp;&nbsp;<input type="radio" name="gender" value="other">Other
                <br>
            
            <hr>
          
            <input style="color: #C70039 " type="submit" name="submit" value="Submit"> <input style="color: #C70039 " type="reset" value="Reset"><br><br>

</form></div>
<div><?php include 'Images/footer2.php';?></div>
</div>
</body>
</html>