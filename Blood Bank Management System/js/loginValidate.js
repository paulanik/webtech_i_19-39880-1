function validateform(){  
			var uname=document.loginForm.uname.value;  
			var password=document.loginForm.password.value;  

			if (uname==null || uname==""){  
			  alert("Username can't be blank");  
			  return false;  
			}else if (password==null || password==""){  
			  alert("Password can't be blank");  
			  return false;   
			}  

		}
		
		function checkUname() {
			if (document.getElementById("uname").value == "") {
			  	document.getElementById("unameErr").innerHTML = "Enter a username";
			  	document.getElementById("unameErr").style.color = "red";
			  	document.getElementById("uname").style.borderColor = "red";
			}else{
			  	document.getElementById("unameErr").innerHTML = "";
				document.getElementById("uname").style.borderColor = "black";
			}
			
        }
        function checkPass(){
        	if (document.getElementById("password").value == "") {
			  	document.getElementById("passErr").innerHTML = "Enter a password";
			  	document.getElementById("passErr").style.color = "red";
			  	document.getElementById("password").style.borderColor = "red";
			}
			else{
				document.getElementById("passErr").innerHTML = "";
				document.getElementById("password").style.borderColor = "black";
			}
        }
       