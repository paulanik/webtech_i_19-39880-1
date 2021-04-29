function getElement(id){
	return document.getElementById(id);
}

function validate(){
	var hasErr = false;
	var e_name = getElement("name");
	var e_username = getElement("username");
	var e_password  = getElement("password");
	var e_cpassword = getElement("cpassword");
	var e_email = getElement("email");
	
	var nameErr = getElement("nameErr");
	var unameErr = getElement("unameErr");
	var passErr  = getElement("passErr");
	var cpassErr = getElement("cpassErr");
	var emailErr = getElement("emailErr");

	//Full Name
	if(e_name.value == ""){
		hasErr= true;
		nameErr.innerHTML = "Full name Required";
		nameErr.style.color = "blue";
		e_name.focus();
		return !hasErr;
	}
	else {
			nameErr.innerHTML = "";
	}
	
	//Username
	if(e_username.value == ""){
		hasErr= true;
		unameErr.innerHTML = "Username Required";
		unameErr.style.color = "blue";
		e_username.focus();
		return !hasErr;
	}
	else {
			unameErr.innerHTML = "";
	}

	//Password
	if(e_password.value == ""){
		hasErr= true;
		passErr.innerHTML = "Password Required";
		passErr.style.color = "blue";
		passErr.focus();
		return !hasErr;
	}
	else {
			passErr.innerHTML = "";
	}
	
	//Confirm Password
	if(e_cpassword.value == ""){
		hasErr= true;
		cpassErr.innerHTML = "Confirm your Password";
		cpassErr.style.color = "blue";
		e_cpassword.focus();
		return !hasErr;
	}
	else {
			cpassErr.innerHTML = "";
	}
	
	//Email
	if(e_email.value == ""){
		hasErr= true;
		emailErr.innerHTML = "Please give your email";
		emailErr.style.color = "blue";
		e_email.focus();
		return !hasErr;
	}
	else {
			emailErr.innerHTML = "";
	}

	return !hasErr;
	
}

function refresh(){
	var nameErr = getElement("nameErr");
	var unameErr = getElement("unameErr");
	var passErr  = getElement("passErr");
	var cpassErr = getElement("cpassErr");
	var emailErr = getElement("emailErr");
	
	
	nameErr.innerHTML = "";
	unameErr.innerHTML = "";
	passErr.innerHTML = "";
	cpassErr.innerHTML = "";
	emailErr.innerHTML = "";
	
}