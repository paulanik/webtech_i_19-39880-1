function validateform(){ 
			var hname= document.regForm.hname.value;
			var phone= document.regForm.phone.value;
			var email= document.regForm.email.value;
			var address= document.regForm.address.value;
			var uname=document.regForm.uname.value;  
			var password=document.regForm.password.value;
			var confirmPassword= document.regForm.confirmPassword.value;  

			if (hname==null || hname==""){  
			  alert("Hospital Name can't be blank");  
			  return false;  
			}else if (phone==null || phone==""){  
			  alert("Phone no can't be blank");  
			  return false;   
			}else if (email==null || email==""){  
			  alert("Email can't be blank");  
			  return false;   
			}else if (address==null || address==""){  
			  alert("Address can't be blank");  
			  return false;   
			}else if (uname==null || uname==""){  
			  alert("Username can't be blank");  
			  return false;   
			}else if (password==null || password==""){  
			  alert("Password can't be blank");  
			  return false;   
			}else if (confirmPassword==null || confirmPassword==""){  
			  alert("Conform Password can't be blank");  
			  return false; 
			}
		}
		
		function checkHname() {
			if (document.getElementById("hname").value == "") {
			  	document.getElementById("hnameErr").innerHTML = "Enter Hospital name";
			  	document.getElementById("hnameErr").style.color = "red";
			  	document.getElementById("hname").style.borderColor = "red";
			}else{
			  	document.getElementById("hnameErr").innerHTML = "";
				document.getElementById("hname").style.borderColor = "black";
			}
			
        }

        function checkPhone(){
        	if (document.getElementById("phone").value == "") {
			  	document.getElementById("phoneErr").innerHTML = "Enter a Phone no";
			  	document.getElementById("phoneErr").style.color = "red";
			  	document.getElementById("phone").style.borderColor = "red";
			}
			else if (document.getElementById("phone").value != "") {
				if (isNaN(document.getElementById("phone").value)) {
					document.getElementById("phoneErr").innerHTML = "Enter a valid Phone no";
				  	document.getElementById("phoneErr").style.color = "red";
				  	document.getElementById("phone").style.borderColor = "red";
				}else if (document.getElementById("phone").value.length < 8 || document.getElementById("phone").value.length > 11){
					document.getElementById("phoneErr").innerHTML = "Phone number can not be less than 8 digits and more than 11 digits ";
				  	document.getElementById("phoneErr").style.color = "red";
				  	document.getElementById("phone").style.borderColor = "red";
				}else{
					document.getElementById("phoneErr").innerHTML = "";
					document.getElementById("phone").style.borderColor = "black";
				}

			}
			
        }

        function checkEmail() {
			if (document.getElementById("email").value == "") {
			  	document.getElementById("emailErr").innerHTML = "Enter a email";
			  	document.getElementById("emailErr").style.color = "red";
			  	document.getElementById("email").style.borderColor = "red";
			}else{
				if (!/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(document.getElementById("email").value)) {
				  	document.getElementById("emailErr").innerHTML = "Enter a valid email";
				  	document.getElementById("emailErr").style.color = "red";
				  	document.getElementById("email").style.borderColor = "red";					
				}else{
					document.getElementById("emailErr").innerHTML = "";
					document.getElementById("email").style.borderColor = "black";
				}
			  	
			}
			
        }

        function checkAddress() {
			if (document.getElementById("address").value == "") {
			  	document.getElementById("addressErr").innerHTML = "Enter address";
			  	document.getElementById("addressErr").style.color = "red";
			  	document.getElementById("address").style.borderColor = "red";
			}else{
			  	document.getElementById("addressErr").innerHTML = "";
				document.getElementById("address").style.borderColor = "black";
			}
			
        }

        function checkUname() {
			if (document.getElementById("uname").value == "") {
			  	document.getElementById("unameErr").innerHTML = "Enter a Username";
			  	document.getElementById("unameErr").style.color = "red";
			  	document.getElementById("uname").style.borderColor = "red";
			}else{
				if (!/^[a-zA-Z0-9-._]*$/.test(document.getElementById("uname").value)) {
					document.getElementById("unameErr").innerHTML = "For usernname only letters, numbers,  period and dash  allowed";
				  	document.getElementById("unameErr").style.color = "red";
				  	document.getElementById("uname").style.borderColor = "red";	
				}else if (document.getElementById("uname").value.length < 2) {
					document.getElementById("unameErr").innerHTML = "For user name at least 2 characters needed";
				  	document.getElementById("unameErr").style.color = "red";
				  	document.getElementById("uname").style.borderColor = "red";
				}else{
					document.getElementById("unameErr").innerHTML = "";
					document.getElementById("uname").style.borderColor = "black";
				}
			  	
			}
			
        }

        function showHint(str) {
				if (str.length == 0) { 
				  document.getElementById("unameErr").innerHTML = "";
				  return;
				}else {
				    var xmlhttp = new XMLHttpRequest();
				    xmlhttp.onreadystatechange = function() {
				      if (this.readyState == 4 && this.status == 200) {
				        document.getElementById("unameErr").innerHTML = this.responseText;
				      }
				    };
				    xmlhttp.open("GET", "js/test.php?q=" + str, true);
				    xmlhttp.send();
				}
		}

        function checkPassword() {
			if (document.getElementById("password").value == "") {
			  	document.getElementById("passErr").innerHTML = "Enter password";
			  	document.getElementById("passErr").style.color = "red";
			  	document.getElementById("password").style.borderColor = "red";
			}else{
				if (document.getElementById("password").value.length < 8) {
					document.getElementById("passErr").innerHTML = "Password must not be less than eight (8) characters";
				  	document.getElementById("passErr").style.color = "red";
				  	document.getElementById("password").style.borderColor = "red";
				}else if (!document.getElementById("password").value.match(/^(?=.*[!@$%]{1})[a-zA-Z0-9!@#$%^&*]*$/)) {
					document.getElementById("passErr").innerHTML = "For password use one of the special characters (@, $, %)";
				  	document.getElementById("passErr").style.color = "red";
				  	document.getElementById("password").style.borderColor = "red";

				}else{
					document.getElementById("passErr").innerHTML = "";
					document.getElementById("password").style.borderColor = "black";
				}
			  	
			}
			
        }

        function checkConPassword() {
			if (document.getElementById("confirmPassword").value == "") {
			  	document.getElementById("conPassErr").innerHTML = "Enter confirm password";
			  	document.getElementById("conPassErr").style.color = "red";
			  	document.getElementById("confirmPassword").style.borderColor = "red";
			}else{
				if (document.getElementById("password").value != document.getElementById("confirmPassword").value) {
					document.getElementById("conPassErr").innerHTML = "Password doesn't match";
				  	document.getElementById("conPassErr").style.color = "red";
				  	document.getElementById("confirmPassword").style.borderColor = "red";
				}else{
					document.getElementById("conPassErr").innerHTML = "";
					document.getElementById("confirmPassword").style.borderColor = "black";
				}
				  	
			}	
			
        }

        function checkCurrPassword() {
			if (document.getElementById("currPass").value == "") {
			  	document.getElementById("currPassErr").innerHTML = "Enter Current Password";
			  	document.getElementById("currPassErr").style.color = "red";
			  	document.getElementById("currPass").style.borderColor = "red";
			}else{
			  	document.getElementById("currPassErr").innerHTML = "";
				document.getElementById("currPass").style.borderColor = "black";
			}
			
        }
       