<!DOCTYPE html>
<html>
<head>
	<title>Add Donor</title>
<link rel="stylesheet" href="css/style_2.css">
  <link rel="stylesheet" href="css/style2_2.css">
  <style>
  body{
    background-image: url('Images/wp4323461.png');
    background-repeat: no-repeat;
    background-size: 1400px 900px;

      }
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
<div  class="topnav">
  <a style="float: left;font-style: bold;font-size: 20px;">Blood Donation</a>
<div style="float: right;"><a  href="WebHome2.php">Home</a>
  <a href="SearchDonor2.php">Find Donor</a>
<a href="Display2.php">Dispaly</a></div>
</div>
<div class="form" align="center">
<form action="controller/AddDonorController2.php" method="post" enctype="multipart/form-data">
  <fieldset>
<legend><B>Add Donor</B></legend> <br>
  <div style="float: center; text-align: middle;">  
  Name     : <input type="text" name="name" required>
  <br><hr>
  
  Email  : <input type="text" name="email" required>
  <br><hr>
  Username: <input type="text" name="username" required>
  <br><hr>
  Address : <input type="text" name="address" required>
  <br><hr>
  Blood Group: <input type="text" name="blood" required>
  <br><hr>
  <input type="checkbox" name="display" value="Yes">
  <label for="display">Display</label>
  <br><hr>
  <input type="submit" name="submit" value="Save"></div>
</form>
</fieldset>
</body>
</html>