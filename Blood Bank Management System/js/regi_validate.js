function validateform(){ 
		var uname= document.regForm.uname.value;
		var psw= document.regForm.psw.value;
		var gender= document.regForm.gender.value;
		var blood_group= document.regForm.blood_group.value;
		var phone=document.regForm.phone.value;  

		if (uname==null || uname==""){  
		  alert("Admin Name can't be blank");  
		  return false;  
		}else if (psw==null || psw==""){  
	  alert("Password can't be blank");  
	  return false;   
	}else if (gender==null || gender==""){  
	  alert("Gender can't be blank");  
	  return false;   
	}else if (blood_group==null || blood_group==""){  
	  alert("Blood Group can't be blank");  
	  return false;   
	}else if (phone==null || phone==""){  
	  alert("Phone No can't be blank");  
	  return false;   
	}
}
	
	function checkUname() {
		if (document.getElementById("uname").value == "") {
		  	document.getElementById("unameErr").innerHTML = "Enter User name";
		  	document.getElementById("unameErr").style.color = "red";
		  	document.getElementById("uname").style.borderColor = "red";
		}else{
		  	document.getElementById("unameErr").innerHTML = "";
			document.getElementById("uname").style.borderColor = "blue";
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
			document.getElementById("password").style.borderColor = "blue";
		}
	}
}

    function checkGender() {
		if (document.getElementById("gender").value == "") {
		  	document.getElementById("genderErr").innerHTML = "Enter Gender";
		  	document.getElementById("genderErr").style.color = "red";
		  	document.getElementById("gender").style.borderColor = "red";
		}else{
		  	document.getElementById("unameErr").innerHTML = "";
			document.getElementById("gender").style.borderColor = "blue";
		}
    }

	function checkBlood() {
		if (document.getElementById("blood_group").value == "") {
		  	document.getElementById("blood_groupErr").innerHTML = "Enter Blood Group";
		  	document.getElementById("blood_groupErr").style.color = "red";
		  	document.getElementById("blood_group").style.borderColor = "red";
		}else{
		  	document.getElementById("blood_groupErr").innerHTML = "";
			document.getElementById("blood_group").style.borderColor = "blue";
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
			document.getElementById("phone").style.borderColor = "blue";
		}
	}
}
