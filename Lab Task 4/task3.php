<!DOCTYPE html>
<html>
<body>
<h3 align="" style = "display:inline-block; width:200px;text-align:right;">PROFILE PICTURE</h3><br />
<form action="upload.php" method="post" enctype="multipart/form-data">
  <img src="profile.png" alt="Profile pic">
  <br><br>
  <input type="file" name="fileToUpload" id="fileToUpload">
  <br><br>
  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>