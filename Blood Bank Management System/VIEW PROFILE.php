<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php 
session_start();

include 'header.php';?>

<?php 
require_once 'model/model.php';

if (isset($_SESSION['uname'])) {
  
    echo '<div class="body" >';
     echo '<span class = ""><b>PROFILE </b></span><br><br>';
     echo "<span class = 'viewProfile'>";
     if ((getHimage($_SESSION['uname']) != null)){
        echo '<img class="formLabel" src="uploads/';
        echo getHimage($_SESSION['uname']);
        echo ' " alt="LOGO" height=100px width:100px>';
     }
     else{
        echo '<img src="Uploads/Upload.PNG" alt="LOGO" height="100px">';
     }
       echo '<a href="PROFILE PICTURE.php">Change</a></span><br><br>';
       echo " <label><span class = 'viewProfile'> Hospital Name  :".getHname($_SESSION['uname'])."</span></label><br><br>";
       echo " <span><label class = 'viewProfile'> Phone  :</label>".getHphone($_SESSION['uname'])."</span><br><br>";
       echo " Email  :".getHemail($_SESSION['uname'])."<br><br>";
       echo " Address  :".getHaddress($_SESSION['uname'])."<br><br>";
       echo '<br>';
       echo '<a href="EDIT PROFILE.php">Edit Profile</a>';
    echo '</div>';
  

}
else{
    $msg="error";
    header("location:login.php");
    // echo "<script>location.href='login.php'</script>";
  }

 ?>
</span>
<?php include 'footer.php';?>

</body>
</html>

