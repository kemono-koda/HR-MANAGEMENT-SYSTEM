
function loginCheckValidation(){

	const username = document.getElementById('username').value;
	const password = document.getElementById('password').value;
	const remember = document.getElementById('remember').value;
	const type = document.getElementById('type').value;

	if(username==""){
		document.getElementById('user').innerHTML = "*Please fill the username ?";
		return false;
	}
	if(username.length>0){
		document.getElementById('user').innerHTML = "";
	}

	if(password==""){
		document.getElementById('pass').innerHTML = "*Please fill the password ?";
		return false;
	}
	if(password.length>0){
		document.getElementById('pass').innerHTML = "";
	}
	if(type==""){
		document.getElementById('types').innerHTML = "*Please fill the type ?";
		return false;

	const xhttp = new XMLHttpRequest();

	xhttp.open('post', '../controler/loginCheckTest.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	
	xhttp.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){


			
			if ($type == "Admin") {

				if(this.responseText == "success"){
				location="../view/dashboard.php";
				}
				if (this.responseText == "Invalid User"){
				document.getElementById('txtHint').innerHTML =this.responseText;
				}
			}
			else if($type == "Manager")
			{
				if(this.responseText == "success"){
				location="../view/dashboard.php";
				}
			}
			else if ($type == "Director") {

				if(this.responseText == "success"){
				location="../view/dashboard.php";
				}
			}
			else if ($type == "Employee") {

				if(this.responseText == "success"){
				location="../Final/view/dashboard.php";
				}
			}

			
		}
	}
	xhttp.send('username='+username+'&password='+password+'&remember='+remember'&type='+type);

}
