<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="style1.css">
</head>

<body>
  <div class="navbar">
  <a href="admin_dashboard.php">Home</a>
  <div class="subnav">
    <button class="subnavbtn">Admin ☟<i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="admin_list.php">Admin List</a>
      <a href="add_admin.php">Add Admin</a>
    </div>
  </div> 
  <div class="subnav">
    <button class="subnavbtn">User ☟<i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="user_list.php">User List</a>
      <a href="store_user.php">Add User</a>
    </div>
  </div> 
  <div class="subnav">
    <button class="subnavbtn">Hospital ☟<i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="hospital_list.php">Hospital List</a>
      <a href="store_hospital.php">Add Hospital</a>
    </div>
  </div>
</div>

</body>
</html>