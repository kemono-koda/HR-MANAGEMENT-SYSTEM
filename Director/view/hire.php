<?php
	
	include('header.php');
?>

	<form method="POST" action="../controller/hireCheck.php" onsubmit="return validation()">
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
												<h2 align="center">Hiring</h2>
											</td>
										</tr>
										<tr>
											<td>
												Username
											</td>
											<td>
												<input type="text" name="username" value="">
												<p id="users"></p>
											</td>
										</tr>
										<tr>
											<td>
												Name
											</td>
											<td>
												<input type="text" name="name" value="">
												<p id="names"></p>
											</td>
										</tr>
										<tr>
											<td>
												Password
											</td>
											<td>
												<input type="password" name="password" value="">
												<p id="passwords"></p>
											</td>
										</tr>
										<tr>
											<td>
												Confirm Password
											</td>
											<td>
												<input type="password" name="cpassword" value="">
												<p id="cpasswords"></p>
											</td>
										</tr>
										<tr>
											<td>
												Email
											</td>
											<td>
												<input type="email" name="email" value="">
												<p id="emails"></p>
											</td>
										</tr>
										<tr>
											<td>
												Phone
											</td>
											<td>
												<input type="number" name="phone" value="">
												<p id="phones"></p>
											</td>
										</tr>
										<tr>
											<td>
												Address
											</td>
											<td>
												<textarea name="address"></textarea>
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
													<option>Bug Fixer</option>
														<option>Developer</option>
														 	<option>Freelancer</option>
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
										<tr>
											<td colspan="2">
												<fieldset>
													<legend>Job Experience</legend>
													<input type="radio" name="choose" value="Yes">Yes
														<input type="radio" name="choose" value="No">NO
															
												</fieldset>
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
												<input type="submit" name="submit" value="Confirm">
												<a href="dashboard.php">Back</a>
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

				document.getElementById('users').innerHTML = "Fill the Username";
				return false;
			}
			if (name == "") {

				document.getElementById('names').innerHTML = "Fill the Name";
				return false;
			}
			if (password == "") {

				document.getElementById('passwords').innerHTML = "Fill the Password";
				return false;
			}
			if (cpassword == "") {

				document.getElementById('cpasswords').innerHTML = "Fill the Confirm Password";
				return false;
			}
			if (email == "") {

				document.getElementById('emails').innerHTML = "Fill the Name";
				return false;
			}
			if (phone == "") {

				document.getElementById('phones').innerHTML = "Fill the Phone";
				return false;
			}
			if (address == "") {

				document.getElementById('addresses').innerHTML = "Fill the Address";
				return false;
			}
		}
	</script>

</body>
</html>