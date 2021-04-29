
<!DOCTYPE html>    
<html>    
<head>   
    <link rel="stylesheet" type="text/css" href="style.css"> 
    <script type="text/javascript" src="js/regValidate.js"></script>   
</head>    
<body>  
<?php 
require_once ("controller/registration.php");
// $data = getAllUname();
include 'header.php';
?>
    <h2 class="h2">Registration</h2><br>    
    <div class="login1">    
    <form name="regForm" method="post" onsubmit="validateform()" action="">   
    <span>
    <?php 
    if(isset($error))
    {
        echo $error;
    }
    ?>   
    </span>
    <br><br>
        <label><b>Hospital name</b></label><br>    
        <input class="textBox" type="text" name="hname" id="hname" onkeyup="checkHname()" onblur="checkHname()" placeholder="Hospital name"> 
        <br>
        <span id="hnameErr"></span>   
        <br>   

        <label><b>Phone no </b></label><br>     
        <input class="textBox" type="text" name="phone" id="phone" onkeyup="checkPhone()" onblur="checkPhone()" placeholder="Phone no"> 
        <br>
        <span id="phoneErr"></span>   
        <br>   

        <label><b>Email </b></label><br>     
        <input class="textBox" type="text" name="email" id="email" onkeyup="checkEmail()" onblur="checkEmail()" placeholder="Email"> 
        <br>
        <span id="emailErr"></span>   
        <br> 

        <label><b>Address </b></label><br>     
        <input class="textBox" type="text" name="address" id="address" onkeyup="checkAddress()" onblur="checkAddress()" placeholder="Address"> 
        <br>
        <span id="addressErr"></span>   
        <br>   

        <label><b>Username </b></label><br>     
        <input class="textBox" type="text" name="uname" id="uname" onkeyup="showHint(this.value)" onblur="checkUname()" placeholder="Username"> 
        <br>
        <span id="unameErr"></span> 
        <br>    

        <label><b>Password </b></label><br>     
        <input class="textBox" type="Password" name="password" id="password" onkeyup="checkPassword()" onblur="checkPassword()" placeholder="Password"> 
        <br>
        <span id="passErr"></span>   
        <br>   

        <label><b>Confirm Password </b></label><br>     
        <input class="textBox" type="Password" name="confirmPassword" id="confirmPassword" onkeyup="checkConPassword()" onblur="checkConPassword()" placeholder="Retype Password"> 
        <br>
        <span id="conPassErr"></span>   
        <br><br>   

        <input type="submit" name="submit" id="log" value="Submit">       
        <br><br>    
        
        <br><br>    
    </form>     
</div> 
<?php include 'footer.php';?>

</body>    
</html>     

<!-- 
<!DOCTYPE html>  
 <html>  
      <head>  
        <link rel="stylesheet" type="text/css" href="style.css">
           <title>Append Data to JSON File using PHP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
        <?php 
        require_once ("controller/registration.php");
        
        include 'header.php';
        
        ?>
                   
           <div class="container" style="width:500px;">  
                <h3 align="">REGISTRATION</h3><br />                 
                <form class = "body" method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br />  
                     <label>Hospital name : </label>  
                     <input type="text" name="hname" class="form-control" /><br />

                     <label>Phone no: </label>  
                     <input type="text" name="phone" class="form-control" /><br />

                     <label>Email : </label>  
                     <input type="text" name="email" class="form-control" /><br />

                     <label>Address : </label>  
                     <input type="text" name="address" class="form-control" /><br />

                     <label>User name : </label>  
                     <input type="text" name="uname" class="form-control" /><br />

                     <label>Password : </label>  
                     <input type="Password" name="password" class="form-control" /><br />

                     <label>Confirm password : </label>  
                     <input type="Password" name="confirmPassword" class="form-control" /><br />

                     <input type="submit" name="submit" value="Submit" class="btn btn-info" />
                     <input type="reset" name="reset" value="Reset" class="btn btn-info" /><br />                     
                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
                </form>  
           </div>  
           <br />  
      <?php include 'footer.php';?>

      </body>  
 </html>   -->