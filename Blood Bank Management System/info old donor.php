<!DOCTYPE html>    
<html>    
<head>   
     <link rel="stylesheet" type="text/css" href="style.css"> 
    <script type="text/javascript" src="js/oldDonorValidate.js"></script>
</head>    
<body>  
<?php 
// $data = getAllUname();
?>
    <h2 class="h2">Blood Donation (Previous donors)</h2><br>    
    <div class="login1">    
    <form name="dForm" method="post" onsubmit="validateform()" action="">   
    <span>
    <?php 
    if(isset($error))
    {
        echo $error;
    }
    ?>   
    </span>
    <br><br>
         
        <label><b>Donor Username :</b></label><br>     
        <input class="textBox" type="text" name="dUname" id="dUname" onkeyup="checkUname(this.value)" onblur="checkUname()" placeholder="Username"> 
        <br>
        <span id="dUnameErr"></span>
        <label id="dUnameExists"></label>  
        <br>   

        <label>Blood group :</label>  <br>
                     <select name="bloodGroup" class="textBox" onchange="checkBloodGroup()" onblur="checkBloodGroup()">
                     <option value="" disabled selected>Select a option</option>
                     <option value="A-">A-</option>
                     <option value="A+">A+</option> 
                     <option value="B-">B-</option>
                     <option value="B+">B+</option>
                     <option value="AB-">AB-</option> 
                     <option value="AB+">AB+</option>
                     <option value="O-">O-</option> 
                     <option value="O+">O+</option>
                     </select></label><br>
        <span id="bloodGroupErr"></span>
        <br>

        <label><b>Price(Taka) :</b></label><br>     
        <input class="textBox" type="number" name="price" id="price" onkeyup="checkPrice()" onblur="checkPrice()" placeholder="Price"> 
        <br>
        <span id="priceErr"></span>   
        <br>  

        <label>Added date : </label> <br> 
        <input type="date" id = "addedDate" name="addedDate" onchange="checkDate(this.value)" value="<?php echo date("Y-m-d");?>" /><br>
        <span id="addedDateErr"></span>   
        <br>

        <label>Expire date : </label> <br> 
        <input type="date" id = "expireDate" name="expireDate" onchange ="checkExpDate()" onblur="checkExpDate()" /><br>
        <span id="expireDateErr"></span>   
        <br>    

        <input type="submit" name="submit" id="submit" value="Submit"> 
        <input type="reset" name="reset" id="reset" value="Reset">      
        <br><br>    
        <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
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
           <title>Append Data to JSON File using PHP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
      	<?php 
      	
      	?>
      	           
           <div class="container" style="width:500px;">  
                <h3 align="">Blood Donation</h3><br />                 
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br />  
                     <label>Donor name : </label>  
                     <input type="text" name="name" class="form-control" /><br />

                     <label>Gender : </label>  <br>
                     <input type="radio" id="male" name="gender" value="male" >
                     <label for="male">Male</label>
                     <input type="radio" id="female" name="gender" value="female" >
                     <label for="female">Female</label>
                     <input type="radio" id="other" name="gender" value="other" >
                     <label for="other">Other</label>  <br><br>

                     <label>Blood group : </label>  
                     <select name="bloodGroup">
                     <option value="A-">A-</option>
                     <option value="A+">A+</option> 
                     <option value="B-">B-</option>
                     <option value="B+">B+</option>
                     <option value="AB-">AB-</option> 
                     <option value="AB+">AB+</option>
                     <option value="O-">O-</option> 
                     <option value="O+">O+</option>
                     </select></label><br><br>

                     <label>Added date : </label>  
                     <input type="date" name="addedDate" value="<?php echo date("Y-m-d");?>"  class="form-control" /><br />

                     <label>Email : </label>  
                     <input type="text" name="email" class="form-control" /><br />

                     <label>Address : </label>  
                     <input type="text" name="address" class="form-control" /><br />

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
           <?php include 'footer.php'?>;

      </body>  
 </html>   -->