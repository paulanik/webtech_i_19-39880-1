<?php
	
include_once "Model/model2.php";

$nameErr = $emailErr = $bloodErr =$unameErr= $genderErr = $addressErr = $dobErr =$cpassErr = $passErr= ""; 
 $name = $email = $blood = $username= $gender = $address =$dob =$cpassword = $password=$bdy="";
 $hasError=false;

	if(isset($_POST["submit"])){

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

		//Full name
	if (empty($_POST["name"])) {
    $nameErr = "Name is required";
    $hasError=true;
  } else {
    $name = test_input($_POST["name"]);

    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
      $hasError=true;
    } 
     if (str_word_count($name)<2) {
      $nameErr = "Should contain atleast 2 words";
      $hasError=true;
    } 

  }
        //Email
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    $hasError=true;
  }
    else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      $hasError=true;
    }
  }
		//Username
 if (empty($_POST["username"])) {
    $unameErr = "User Name is required";
    $hasError=true;
  } else {
    $username = test_input($_POST["username"]);

    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-._]*$/",$username)) {
      $unameErr = "Only alpha numeric characters, period, dash or underscore allowed<br>";
      $hasError=true;
    } 
     if (strlen($_POST["username"])<2) {
      $unameErr = "Should contain atleast 2 characters";
      $hasError=true;
    } 

  }
		
		//Password
	 if(empty($_POST["password"]))
    {
      $passErr = "Password is required";
      $hasError=true;
    }
    else {
      $password=test_input($_POST["password"]);
      if(strlen($password)<8)
      {
        $passErr="Password must not be less than eight (8) characters";
        $hasError=true;
      }
      else if (!preg_match("/[@,#,$,%]/",$password)) {
      echo "Password must contain at least one of the special characters (@, #, $,%)<br>";
      $password ="";
      $flag=0;
    }
    }
		
		//Confirm password
if ($_SERVER["REQUEST_METHOD"] == "POST"){
if (empty($_POST["cpassword"])) {
    $cpassErr = "Retyped Password is required";
    $hasError=true;
  } 
else if(empty($_POST["password"]))
{
  $cpassErr = "Password is required";
  $hasError=true;

}
  else {
    $cpassword = test_input($_POST["cpassword"]);
    // check if password is well-formed
     if ($password!=$cpassword) {
      $cpassErr = "Retyped password did not match with new password";
      $hasError=true;
    }
  }
}
		
		//Gender
	if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
    $hasError=true;
  } else {
    $gender = test_input($_POST["gender"]);
  }
  //Blood Group
  if (empty($_POST["blood"])) {
    $bloodErr = "Blood is required";
    $hasError=true;
  } else {
    $blood = test_input($_POST["blood"]);
  }
		//Address
  if (empty($_POST["address"])) {
    $addressErr = "Address is required";
    $hasError=true;
  } else {
    $address = test_input($_POST["address"]);
  }
		//Birth day
	if (empty($_POST["day"])) {
      $bdy = $bdy . "Day";
    }
    if (empty($_POST["month"])) {
      if (strlen($bdy) > 1) {
      $bdy .= ", month";
        }
        else $bdy .= "Month";
    }
    if (empty($_POST["year"])) {
      if (strlen($bdy) > 1) {
      $bdy .= " and year";
        }
        else $bdy = "Year";
    }
    if (strlen($bdy) > 1) {
      if (strlen($bdy) <= 5) $bdy .= " is required";
      else $bdy .= " are required";
    }
		
		if(!$hasError  && isset($_POST["submit"])){
			
			$password = md5($_POST["password"]);
      $qq = "INSERT INTO patient_db VALUES ('','".$name."','".$email."','".$username."','".$password."','".$address."','".$blood."')";
			
			$patient_db = get($qq);
			//mysqli_query($conn, $qq);
			
			//header("Location: lg4.php");
			
		}
	}
	
?>
