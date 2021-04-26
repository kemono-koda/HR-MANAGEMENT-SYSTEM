function edit() {
	
	let name = document.getElementById('name').value;
	let email = document.getElementById('email').value;
	let phone = document.getElementById('phone').value;
	let address = document.getElementById('address').value;

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