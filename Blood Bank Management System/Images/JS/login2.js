
function validateform(){  
			var uname=document.uname.value;  
			var pass=document.pass.value; 
	if (uname==null || uname==""){  
			  alert("UserName can't be blank");  
			  return false;  
			}else if(pass.length<6){  
			  alert("Password must be at least 6 characters long.");  
			  return false;  
			}  

			
		  