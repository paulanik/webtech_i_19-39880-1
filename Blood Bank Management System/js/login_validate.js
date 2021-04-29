function validateform(){ 
var uname= document.admin_login.uname.value;
		var psw= document.admin_login.psw.value;

		if (uname==null || uname==""){  
		  alert("Admin Name can't be blank");  
		  return false;  
		}else if (psw==null || psw==""){  
	  alert("Password can't be blank");  
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
			document.getElementById("passErr").innerHTML = "";
			document.getElementById("password").style.borderColor = "blue";
		}
	}

// function validateForm() {
//   var uname = document.forms["admin_login"]["uname"].value;
//   if (uname == "") {
//     alert("Name must be filled out");
//     return false;
//   }
// }
function validateForm() {
  var password = document.forms["admin_login"]["password"].value;
  if (password == "") {
    alert("Password must be filled out");
    return false;
  }
}