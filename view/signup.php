<!DOCTYPE html>
<html>
<head>
	<title>Sign UP</title>
	<script type="text/javascript" src="../js/reg.js"></script>
</head>
<body>
	<form method="POST" action="../controller/regCheck.php" onsubmit="return reg()">
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
												<input type="text" name="username" id="username" value=""> <br>
												<span style="color: red" id="user"> </span>
											</td>
										</tr>
										<tr>
											<td>
												Name
											</td>
											<td>
												<input type="text" name="name" id="name" value=""> <br>
												<span id="nam" style="color: red"> </span>
											</td>
										</tr>
										<tr>
											<td>
												Password
											</td>
											<td>
												<input type="password" name="password" id="password" value=""> <br>
												<span style="color: red" id="pass"> </span>
											</td>
										</tr>
										<tr>
											<td>
												Confirm Password
											</td>
											<td>
												<input type="password" name="cpassword" id="cpassword" value=""> <br>
												<span style="color: red" id="cpass"> </span>
											</td>
										</tr>
										<tr>
											<td>
												Email
											</td>
											<td>
												<input type="email" name="email" id="email" value=""> <br>
												<span style="color: red" id="eml"> </span>
											</td>
										</tr>
										<tr>
											<td>
												Phone
											</td>
											<td>
												<input type="number" name="phone" id="phone" value=""> <br>
												<span style="color: red" id="phn"> </span>
											</td>
										</tr>
										<tr>
											<td>
												Address
											</td>
											<td>
												<textarea name="address" id="address"></textarea> <br>
												<span style="color: red" id="adrs"> </span>
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
													<input type="date" name="dob" id="dob" value="">
												</fieldset>
											</td>
										</tr>
										<tr>
											<td>
												Department
											</td>
											<td>
												<select name="department">
													<option>Sofware</option>
													<option>Developer</option>
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
											<td>
												User type
											</td>
											<td>
												<select name="type" id="type">
													<option>Admin</option>
													<option>Manager</option>
													<option>Director</option>
													<option>Employee</option>
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
</body>
</html>