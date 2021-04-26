function password() {
			
	let cpassword = document.getElementById('cpassword').value;
	let npassword = document.getElementById('npassword').value;
	let rpassword = document.getElementById('rpassword').value;

	if (cpassword == "") {

		document.getElementById('cpass').innerHTML = "* Please fill the Current Password.";
		return false;
	}

	if (npassword == "") {

		document.getElementById('npass').innerHTML = "* Please fill the New Password.";
		return false;
	}
	if (npassword.length <= 5) {

		document.getElementById('npass').innerHTML = "* Password must contain at least 6 digits.";
		return false;
	}
	if (isNaN(npassword)) {

		document.getElementById('npass').innerHTML = "* Password must be number.";
		return false;
	}
	if (cpassword == npassword) {

		document.getElementById('npass').innerHTML = "* You cannot use old password.";
		return false;
	}

	if (npassword != rpassword) {

		document.getElementById('rpass').innerHTML = "* New Password & Retype New Password must be same.";
		return false;
	}
}