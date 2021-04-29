function validateform(){ 
			var dname= document.dForm.dname.value;
			var bloodGroup= document.dForm.bloodGroup.value;
			var price= document.dForm.price.value;
			var addedDate = document.dForm.addedDate.value;
			var expireDate = document.dForm.expireDate.value;
			var gender= document.dForm.gender.value;
			var phone= document.dForm.phone.value;
			var email=document.dForm.email.value;  
			var address=document.dForm.address.value;
			var dUname= document.dForm.dUname.value;  

			if (dname==null || dname==""){  
			  alert("Donor Name can't be blank");  
			  return false;  
			}else if (bloodGroup==null || bloodGroup==""){  
			  alert("Blood Group can't be blank");  
			  return false;   
			}else if (addedDate==null || addedDate==""){  
			  alert("Added Date can't be blank");  
			  return false;   
			}else if (expireDate==null || expireDate==""){  
			  alert("Expire Date can't be blank");  
			  return false;   
			}else if (gender==null || gender==""){  
			  alert("Gender can't be blank");  
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
			}else if (dUname==null || dUname==""){  
			  alert("Donor Username can't be blank");  
			  return false;   
			}
		}
		
		function checkDname() {
			if (document.getElementById("dname").value == "") {
			  	document.getElementById("dnameErr").innerHTML = "Enter Donor name";
			  	document.getElementById("dname").style.color = "";
			  	document.getElementById("dname").style.borderColor = "red";
			}else{
			  	document.getElementById("dnameErr").innerHTML = "";
				document.getElementById("dname").style.borderColor = "black";
			}
			
        }

        function checkBloodGroup() {
			if (document.dForm.bloodGroup.value==null || document.dForm.bloodGroup.value==""){  
			    document.getElementById("bloodGroupErr").innerHTML = "Must select a Blood Group";
			  	document.getElementById("bloodGroup").style.color = "red";
			  	document.getElementById("bloodGroup").style.borderColor = "red";   
			}else{
			  	document.getElementById("bloodGroupErr").innerHTML = "";
				document.getElementById("bloodGroup").style.borderColor = "black";
			}
			
        }

        function checkPrice() {
			if (document.getElementById("price").value == "") {
			  	document.getElementById("priceErr").innerHTML = "Enter price";
			  	document.getElementById("price").style.color = "";
			  	document.getElementById("price").style.borderColor = "red";
			}else{
			  	document.getElementById("priceErr").innerHTML = "";
				document.getElementById("price").style.borderColor = "black";
			}
			
        }

        function checkDate(str) {
			if (document.dForm.addedDate.value==null || document.dForm.addedDate.value==""){  
			    document.getElementById("addedDateErr").innerHTML = "Must select a date";
			  	document.getElementById("addedDate").style.color = "red";
			  	document.getElementById("addedDate").style.borderColor = "red";   
			}else if(document.dForm.addedDate.value!=null){  
			    var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function() {
				  if (this.readyState == 4 && this.status == 200) {
				    document.getElementById("addedDateErr").innerHTML = this.responseText;
				  }
				};
				xmlhttp.open("GET", "js/testDate.php?q=" + str, true);
				xmlhttp.send();  
			}else{
			  	document.getElementById("addedDateErr").innerHTML = "";
				document.getElementById("addedDate").style.borderColor = "black";
			}
			
        }

         function checkExpDate() {
			if (document.dForm.expireDate.value==null || document.dForm.expireDate.value==""){ 
			    document.getElementById("expireDateErr").innerHTML = "Must select a date";
			  	document.getElementById("expireDate").style.color = "";
			  	document.getElementById("expireDate").style.borderColor = "red";	
			}else{
			  	document.getElementById("expireDateErr").innerHTML = "";
				document.getElementById("expireDate").style.borderColor = "black";
			}
			
        }

        function checkGender() {
			if (document.dForm.gender.value==null || document.dForm.gender.value==""){  
			    document.getElementById("genderErr").innerHTML = "Must select a gender";
			  	document.getElementById("gender").style.color = "red";
			  	document.getElementById("gender").style.borderColor = "red";   
			}else{
			  	document.getElementById("genderErr").innerHTML = "";
				document.getElementById("gender").style.borderColor = "black";
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

        function checkUname(str) {
			if (document.getElementById("dUname").value == "") {
			  	document.getElementById("dUnameErr").innerHTML = "Enter a Username";
			  	document.getElementById("dUnameErr").style.color = "red";
			  	document.getElementById("dUname").style.borderColor = "red";
			}else{
				if (!/^[a-zA-Z0-9-._]*$/.test(document.getElementById("dUname").value)) {
					document.getElementById("dUnameErr").innerHTML = "For usernname only letters, numbers,  period and dash  allowed";
				  	document.getElementById("dUnameErr").style.color = "red";
				  	document.getElementById("dUname").style.borderColor = "red";	
				}else if (document.getElementById("dUname").value.length < 2) {
					document.getElementById("dUnameErr").innerHTML = "For user name at least 2 characters needed";
				  	document.getElementById("dUnameErr").style.color = "red";
				  	document.getElementById("dUname").style.borderColor = "red";
				}else if (document.getElementById("dUname").value.length > 2 ) {
					var xmlhttp = new XMLHttpRequest();
				    xmlhttp.onreadystatechange = function() {
				      if (this.readyState == 4 && this.status == 200) {
				        document.getElementById("dUnameErr").innerHTML = this.responseText;
				      }
				    };
				    xmlhttp.open("GET", "js/testDonorUname.php?q=" + str, true);
				    xmlhttp.send();

				}else{
					document.getElementById("dUnameErr").innerHTML = "";
					document.getElementById("dUname").style.borderColor = "black";
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
