<!DOCTYPE html>    
<html>    
<head>   
     <link rel="stylesheet" type="text/css" href="style.css"> 
    <script type="text/javascript" src="js/bloodSearch.js"></script>
</head>    
<body onload="loadTable()">  
<?php 
require_once "controller/confirmBlood.php";

?>
<h2 class="h2">Blood Page</h2><br> 

    <div>  
    <form method="post">
      <b>Enter a ID to withdraw blood</b>
    <input type="text" name="bloodId">
    <input type="submit" name="submit" value="Submit"><br>
    <label>
    <?php if (isset($msg)){echo $msg ;} ?>
    </label>
    </form>
    </div><br>

    <b>Search blood : </b>  
    <select name="bloodGroup" class="textBox" onchange="searchTable(this.value)">
            <option value="" disabled selected>Select a blood</option>
            <option value="A-">A-</option>
            <option value="A*">A+</option> 
            <option value="B-">B-</option>
            <option value="B*">B+</option>
            <option value="AB-">AB-</option> 
            <option value="AB*">AB+</option>
            <option value="O-">O-</option> 
            <option value="O*">O+</option>
            </select><br><br>



    <div id="table">
        
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