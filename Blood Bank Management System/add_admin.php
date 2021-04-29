<?php  
session_start();
if(!isset($_SESSION['user'])){
  header('location:admin_dashboard.php');
}
?>

<!DOCTYPE html>
<html>
<head>
  <?php include 'header1.php';
  require_once 'navbar.php';
  // include 'model/model.php';
  // require_once 'controller/add_admin_cnt.php';
  ?>
  <link rel="stylesheet" href="style1.css">

    <!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <script type="text/javascript" src="js/library.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/regi_validate.js"></script>   
</head>

<body>

<div>
      <input type="text" id="search" placeholder="search admin" />
      <div id="display"></div>
</div>

<div class="dash">
<div style="text-transform: uppercase;">
</div>

<div class="logincss">
<center><h2>Add New Admin</h2></center>

<form name="regForm" action="controller/add_admin_cnt.php" onsubmit="validateform()"  method="POST">
	<div class="container">

  <label for="uname"><b>Username</b></label>
  <input type="text" placeholder="Enter Username" name="uname" onkeyup="checkUname()" onblur="checkUname()" id="uname" value=""  />
  <span id="unameErr"></span> <br>

  <label for="psw"><br><b>Password</b></label>
  <input type="Password" name="psw" onkeyup="checkPassword()" onblur="checkPassword()" id="password" placeholder="Enter Password" value=""  />
  <span id="passErr"></span> 
  <br>

         <label><b><br>Gender</b></label>  <br>
                     <input type="radio" id="male" name="gender" value="male" onchange ="checkGender()">
                     <label for="male">Male</label>
                     <input type="radio" id="female" name="gender" value="female" onchange="checkGender()">
                     <label for="female">Female</label>
                     <input type="radio" id="other" name="gender" value="other" onchange="checkGender()">
                     <label for="other">Other</label><br>
  <span id="genderErr"></span> 
  <br>

        <label><b>Blood group</b></label>  <br>
                     <select name="blood_group" class="textBox" onchange="checkBlood()" onblur="checkBlood()">
                     <option value="" disabled selected>Select a option</option>
                     <option value="A-">A-</option>
                     <option value="A+">A+</option> 
                     <option value="B-">B-</option>
                     <option value="B+">B+</option>
                     <option value="AB-">AB-</option> 
                     <option value="AB+">AB+</option>
                     <option value="O-">O-</option> 
                     <option value="O+">O+</option>
                     </select></label>
                       <span id="blood_groupErr"></span> 
  <br>

  <label for="phone"><b><br>Phone No</b></label>
  <input type="text" placeholder="Enter Phone No" name="phone" onkeyup="checkPhone()" onblur="checkPhone()" id="phone" value=""  />  <br>
  <span id="phoneErr"></span> 
  <br>

  <button type="submit" name="submit">Update</button>

  </div>
</form>

</div>
</body>
<?php include 'footer1.php';?>
</html>
