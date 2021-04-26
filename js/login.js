function login() {
	
	let username = document.getElementById('username').value;
	let password = document.getElementById('password').value;

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
}


function ajax() {

	const username = document.getElementById('username').value;
	const password = document.getElementById('password').value;
	const xhttp = new XMLHttpRequest();
	xhttp.open('POST', 'log.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('username='+username, 'password='+password);

	xhttp.onreadystatechange = function(){

		if (this.readyState == 4 && this.status == 200) {

			const result = this.responseText;

			
				document.getElementById('result').innerHTML = this.responseText;
			
		}

	}

}