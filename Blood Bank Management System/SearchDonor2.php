<!DOCTYPE html>
<html>
  <body>
  	<head>
  		<link rel="stylesheet" href="css/style_2.css">
  <link rel="stylesheet" href="css/style2_2.css">
  <style>
  	body{
    background-image: url('Images/blood-donation-4.jpg');
    background-repeat: no-repeat;
    background-size: 1600px 900px;
    
      }
  </style>
  	</head>
  	
  	<fieldset>
	<legend style="float: left;font-style: bold;font-size: 20px;"><B>Search Donor</B></legend>  
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
      <input type="text" name="name" value="<?php if (!empty($_POST['name'])) {echo $_POST['name'];} ?>" required/>
      <input type="submit" name="findDonor" value="Search By Name"/>
    </form><br>
<?php require_once 'controller/SearchDonorController2.php'; ?>
</fieldset>
  </body>

</html>
<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"Model/donorSearch2.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>
