function mySubmit(){
	var uname = document.myForm.username.value;
	var mail = document.myForm.email.value;
	var phone = document.myForm.phone.value;
	var check = document.myForm.checkPhone;
	var department = document.myForm.department;
	var stdId = document.myForm.Id.value;
	var about = document.myForm.about;


	if(uname == ""){
		var attr = document.createAttribute("placeholder");
		var v = document.getElementById("uname");
		v.style.border = "2px solid red";
		v.style.padding = "0px 0px 0px 5px";
		v.style.fontSize = "18px";
		attr.value = "please enter username";
		v.setAttributeNode(attr);
		
		return false;
	}

	if(mail == ""){
		var attr = document.createAttribute("placeholder");
		var v = document.getElementById("email");
		v.style.border = "2px solid red";
		document.getElementById("uname").style.border = "2px solid blue";
		v.style.padding = "0px 0px 0px 5px";
		v.style.fontSize = "18px";
		attr.value = "please enter email";
		v.setAttributeNode(attr);
		
		return false;
	}

	if(phone == "" && check.checked == false){
		var attr = document.createAttribute("placeholder");
		var v = document.getElementById("phone");
		v.style.border = "2px solid red";
		document.getElementById("email").style.border = "2px solid blue";
		v.style.padding = "0px 0px 0px 5px";
		v.style.fontSize = "18px";
		attr.value = "please enter Phone";
		v.setAttributeNode(attr);
		
		return false;
	}

	if(department.value == "Select........"){
		var attr = document.createAttribute("placeholder");
		var v = document.getElementById("department");
		v.style.border = "2px solid red";
		document.getElementById("phone").style.border = "2px solid blue";
		v.style.padding = "0px 0px 0px 5px";
		v.style.fontSize = "18px";
		attr.value = "please select division";
		v.setAttributeNode(attr);
		
		return false;
	}

	if(stdId == ""){
		var attr = document.createAttribute("placeholder");
		var v = document.getElementById("Id");
		v.style.border = "2px solid red";
		document.getElementById("department").style.border = "2px solid blue";
		v.style.padding = "0px 0px 0px 5px";
		v.style.fontSize = "18px";
		attr.value = "please enter Id";
		v.setAttributeNode(attr);
		
		return false;
	}

	if(about.value==""){
		var attr = document.createAttribute("placeholder");
		var v = document.getElementById("about");
		v.style.border = "2px solid red";
		document.getElementById("Id").style.border = "2px solid blue";
		v.style.padding = "0px 0px 0px 5px";
		v.style.fontSize = "18px";
		attr.value = "please Enter About Yourself";
		v.setAttributeNode(attr);
		
		return false;
	}
	
}

function pd()
{
	if(document.myForm.checkPhone.checked == true){
		var v = document.getElementById("phone");
		document.myForm.phone.disabled = true;
		var attr = document.createAttribute("placeholder");
		v.style.border = "2px solid red";
		document.getElementById("department").style.border = "1px solid blue";
		v.style.padding = "0px 0px 0px 5px";
		v.style.fontSize = "18px";
		attr.value = "Phone is disabled";
		v.value = "";
		v.setAttributeNode(attr);
		
		return false;
	}
	else
	{
		document.myForm.phone.disabled = false;
		var attr = document.createAttribute("placeholder");
		var v = document.getElementById("phone");
		v.style.border = "1px solid blue";
		v.style.padding = "0px 0px 0px 5px";
		v.style.fontSize = "18px";
		attr.value = "";
		v.setAttributeNode(attr);
		
		return false;
	}
}