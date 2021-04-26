<!DOCTYPE html>
<html>
<head>
	<title>Signup </title>
</head>
<body>
	<form method="POST" action="../controller/regCheck.php" onsubmit="return validation()">
		<table width="100%" height="700px">
			<tr>
				<td>
					<table align="center" >
						<tr>
							<td>
								<fieldset>
									<table>
										<tr>
											<td colspan="2">
												<h2 align="center">Sign Up</h2>
											</td>
										</tr>
										<tr>
											<td colspan="2" align="center">
												<img src="../asset/5.png" width="250px">
											</td>
										</tr>
										<tr>
											<td>
												Username
											</td>
											<td>
												<input type="text" name="username" id="username" value="">
												<p id="users"></p>
											</td>
										</tr>
										<tr>
											<td>
												Name
											</td>
											<td>
												<input type="text" name="name" id="name" value="">
												<p id="names"></p>
											</td>
										</tr>
										<tr>
											<td>
												Password
											</td>
											<td>
												<input type="password" name="password" id="password" value="">
												<p id="passwords"></p>
											</td>
										</tr>
										<tr>
											<td>
												Confirm Password
											</td>
											<td>
												<input type="password" name="cpassword" id="cpassword" value="">
												<p id="cpasswords"></p>
											</td>
										</tr>
										<tr>
											<td>
												Email
											</td>
											<td>
												<input type="email" name="email" id="email" value="">
												<p id="emails"></p>
											</td>
										</tr>
										<tr>
											<td>
												Phone
											</td>
											<td>
												<input type="number" name="phone" id="phone" value="">
												<p id="phones"></p>
											</td>
										</tr>
										<tr>
											<td>
												Address
											</td>
											<td>
												<textarea name="address" id="address"></textarea>
												<p id="addresses"></p>
											</td>
										</tr>
										<tr>
											<td colspan="2">
												<fieldset>
													<legend>Gender</legend>
													<input type="radio" name="gender" value="Male">Male
														<input type="radio" name="gender" value="Female">Female
															<input type="radio" name="gender" value="Others">Others
												</fieldset>
											</td>
										</tr>
										<tr>
											<td colspan="2">
												<fieldset>
													<legend>Date of Birth</legend>
													<input type="date" name="dob" value="">
												</fieldset>
											</td>
										</tr>
										<tr>
											<td>
												Department
											</td>
											<td>
												<select name="department">
													<option>Board of Director</option>
														
												</select>
											</td>
										</tr>
										<tr>
											<td>
												Blood Group
											</td>
											<td>
												<select name="blood">
													<option>A+</option>
														<option>B+</option>
															<option>AB+</option>
																<option>O+</option>
																	<option>A-</option>
																		<option>B-</option>
																			<option>AB-</option>
																				<option>O-</option>
												</select>
											</td>
										</tr>
										<tr align="center">
											<td colspan="2">
												<br>
												<hr>
											</td>
										</tr>
										<tr align="center">
											<td colspan="2">
												<input type="submit" name="submit" value="Sign Up">
												<a href="signin.php">Sign In</a>
											</td>
										</tr>
									</table>
								</fieldset>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</form>

	<script type="text/javascript">
		function validation() {
			
			let username = document.getElementById('username').value;
			let name = document.getElementById('name').value;
			let password = document.getElementById('password').value;
			let cpassword = document.getElementById('cpassword').value;
			let email = document.getElementById('email').value;
			let phone = document.getElementById('phone').value;
			let address = document.getElementById('address').value;

			if (username == "") {

				document.getElementById('users').innerHTML = "(Please)Fill the Username";
				return false;
			}
			if (username.length <= 8){

				document.getElementById('users').innerHTML = "(Please)Write a more than 8 word ";
				return false;
			}
			if (name == "") {

				document.getElementById('names').innerHTML = "(Please)Fill the Name";
				return false;
			}
			if (password == "") {

				document.getElementById('passwords').innerHTML = "(Please)Fill the Password";
				return false;
			}
			if (password.length <= 8){

				document.getElementById('passwords').innerHTML = "(Please)Write a strong password";
				return false;
			}
			if (cpassword == "") {

				document.getElementById('cpasswords').innerHTML = "(Please)Fill the Confirm Password";
				return false;
			}
			if (email == "") {

				document.getElementById('emails').innerHTML = "(Please)Fill the email";
				return false;
			}
			if (phone == "") {

				document.getElementById('phones').innerHTML = "(Please)Fill the Phone";
				return false;
			}
			if (address == "") {

				document.getElementById('addresses').innerHTML = "(Please)Fill the Address";
				return false;
			}
			
		}
		function regAjax() {

	const username = document.getElementById('username').value;
	const name = document.getElementById('name').value;
	const password = document.getElementById('password').value;
	const cpassword = document.getElementById('cpassword').value;
	const email = document.getElementById('email').value;
	const phone = document.getElementById('phone').value;
	const address = document.getElementById('address').value;
	

	const xhttp = new XMLHttpRequest();
	xhttp.open('POST', '../view/regAjax.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('username='+username, 'name='+name,'password='+password,'cpassword='+cpassword,'email='+email, 'phone='+phone, 'address='+address);

		xhttp.onreadystatechange = function(){
		if (this.readyState == 4 && this.status == 200) {

				document.getElementById('result').innerHTML = this.responseText;
			
		}

	}

}
	</script>

</body>
</html>