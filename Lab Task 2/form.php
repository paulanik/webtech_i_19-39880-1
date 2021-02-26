<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $dateofbirthErr = $genderErr = $degreeErr = $bloodgroupErr = "";
$name = $email = $dateofbirth = $gender = $degree = $bloodgroup = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
    // check if name contains min two words
    if (str_word_count($name) < 2) {
      $nameErr = "Input at least two words";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
  if (empty($_POST["dateofbirth"])) {
    $dateofbirthErr = "Date of Birth is required";
  } else {
    $dateofbirth = test_input($_POST["dateofbirth"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["degree"])) {
    $degreeErr = "Degree is required";
  } 
  else {
    $degree = test_input($_POST["degree"]);
    if (count($_POST["degree"]) < 2) {
      $degreeErr = "Select at least two Degree";
    }
}


  if (empty($_POST["bloodgroup"])) {
    $bloodgroupErr = "Blood group is required";
  } else {
    $bloodgroup = test_input($_POST["bloodgroup"]);
  }
}

function test_input($data) {
  if(is_array($data)) {
        return array_map('test_input', $data);
    }
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

  NAME: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>

  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>

  DATE Of Birth:
   <input type="date" name="dateofbirth" value="<?php echo $dateofbirth;?>">
  <span class="error">* <?php echo $dateofbirthErr;?></span>
  <br><br>

  GENDER:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female">Female
  <input type="radio" name="gender"  value="Other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>

  DEGREE:
   <input type="checkbox" name="degree[]" value="SSC">SSC
   <input type="checkbox" name="degree[]" value="HSC">HSC
   <input type="checkbox" name="degree[]" value="BSc">BSc
   <input type="checkbox" name="degree[]" value="MSc">MSc
   <span class="error">* <?php echo $degreeErr;?></span>
  <br><br>

  BLOOD GROUP:
  <select name="bloodgroup" <?php  echo($data['user_bloodgroup']==$bloodgroup)?'checked':'' ?>>
    <option></option>
    <option value="A+">A+</option>
    <option value="B+">B+</option>
    <option value="AB+">AB+</option>
    <option value="0+">0+</option>
  </select>
  <span class="error">* <?php echo $bloodgroupErr;?></span>
  <br><br>

  <input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $dateofbirth;
echo "<br>";
echo $gender;
echo "<br>";
if (isset($_POST['degree'])) {
  $name = $_POST['degree'];
  if (count($name)<2){
    echo "";
  }
   else {foreach ($name as $degree){ 
        echo $degree, " ";
    }}
  }
echo "<br>";
echo $bloodgroup;
?>

</body>
</html>