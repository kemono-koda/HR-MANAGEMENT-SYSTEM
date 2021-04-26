function reg() {
	
	let username = document.getElementById('username').value;
	let name = document.getElementById('name').value;
	let password = document.getElementById('password').value;
	let cpassword = document.getElementById('cpassword').value;
	let email = document.getElementById('email').value;
	let phone = document.getElementById('phone').value;
	let address = document.getElementById('address').value;
	let dob = document.getElementById('dob').value;

	if (username == "") {

		document.getElementById('user').innerHTML = "* Please fill the Username.";
		return false;
	}
	if (username.length <= 3) {

		document.getElementById('user').innerHTML = "* User Name must contain at least 4 characters.";
		return false;
	}
	if (!isNaN(username)) {

		document.getElementById('user').innerHTML = "* Number not Accepted.";
		return false;
	}
	
	if (name == "") {

		document.getElementById('nam').innerHTML = "* Please fill the Name.";
		return false;
	}
	if (name.length <= 3) {

		document.getElementById('nam').innerHTML = "* Name must contain at least 4 characters.";
		return false;
	}
	if (!isNaN(name)) {

		document.getElementById('nam').innerHTML = "* Name cannot be number.";
		return false;
	}
	
	if (password == "") {

		document.getElementById('pass').innerHTML = "* Please fill the Password.";
		return false;
	}
	if (password.length <= 5) {

		document.getElementById('pass').innerHTML = "* Password must contain at least 6 digits.";
		return false;
	}
	/*if (isNaN(password)) {

		document.getElementById('pass').innerHTML = "* Password must be number.";
		return false;
	}*/
	
	if (password != cpassword) {

		document.getElementById('cpass').innerHTML = "* Password & Confirm password must be same.";
		return false;
	}
	
	if (email == "") {

		document.getElementById('eml').innerHTML = "* Please fill the Email.";
		return false;
	}
	
	if (phone == "") {

		document.getElementById('phn').innerHTML = "* Please fill the Phone.";
		return false;
	}
	if (isNaN(phone)) {

		document.getElementById('phn').innerHTML = "* Phone number  must be digits.";
		return false;
	}
	
	if (address == "") {

		document.getElementById('adrs').innerHTML = "* Please fill the Address.";
		return false;
	}if (address.length <= 10) {

		document.getElementById('adrs').innerHTML = "* Please give full address.";
		return false;
	}
	

}