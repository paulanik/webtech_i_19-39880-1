function validateform(){ 
			var bloodGroup= document.dForm.bloodGroup.value;
			var price= document.dForm.price.value;
			var addedDate = document.dForm.addedDate.value;
			var expireDate = document.dForm.expireDate.value;
			var dUname= document.dForm.dUname.value;  
			var price = document.dForm.price.value;

			if (dUname==null || dUname==""){  
			  alert("Donor Username can't be blank");  
			  return false;  
			}else if (bloodGroup==null || bloodGroup==""){  
			  alert("Blood Group can't be blank");  
			  return false;   
			}else if (price==null || price==""){  
			  alert("Price can't be blank");  
			  return false;   
			}else if (addedDate==null || addedDate==""){  
			  alert("Added Date can't be blank");  
			  return false;   
			}else if (expireDate==null || expireDate==""){  
			  alert("Expire Date can't be blank");  
			  return false;   
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

        function checkUname(str) {
			if (document.getElementById("dUname").value == "") {
			  	document.getElementById("dUnameErr").innerHTML = "Enter a Username";
			  	document.getElementById("dUnameErr").style.color = "red";
			  	document.getElementById("dUname").style.borderColor = "red";
			}else{
				if (document.getElementById("dUname").value.length > 2 ) {
					var xmlhttp = new XMLHttpRequest();
				    xmlhttp.onreadystatechange = function() {
				      if (this.readyState == 4 && this.status == 200) {
				        document.getElementById("dUnameExists").innerHTML = this.responseText;
				        document.getElementById("dUnameErr").innerHTML = "";
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

