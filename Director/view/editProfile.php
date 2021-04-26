<?php
	
	include('header.php');
?>

	
	<form method="POST" action="../controller/editProfileCheck.php" onsubmit="return validation()">
		<table width="100%" height="100px">
			<tr height="100px">
				<td>
					<table width="100%">
						<tr>
						<td>
							<a href="dashboard.php"><img src="../asset/4.png" width="20px" height="20px">Back</a>
						</td>
						<td align="right">
							<a href="viewProfile.php"><img src="../asset/image/3.png" width="20px"> 
								<?php
									echo $_COOKIE['name'];
								?>
							</a>
						</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<hr>
		<div>
		<h1>Edit Profile</h1>
	</div>
		<table  width="100%">
			<tr>
				<td width="20%">
				</td>
				<td>
					<table width="100%">
						<h2>
						<tr>
							<td>
								Name
							</td>
							<td>
								<input type="text" name="name" value="<?php
									echo $_COOKIE['name'];
								?>">
								<p id="names"></p>
							</td>
							<td rowspan="8" align="center">
								<img src="../asset/image/3.png" width="150px"> <br>
								<a href="changeProfilePicture.php">Change Profile Picture</a>
							</td>
						</tr>
						<tr>
							<td>
								Email
							</td>
							<td>
								<input type="email" name="email" value="<?php
									echo $_COOKIE['email'];
								?>">
								<p id="emails"></p>
							</td>
						</tr>
						<tr>
							<td>
								Phone
							</td>
							<td>
								<input type="number" name="phone" value="<?php
									echo $_COOKIE['phone'];
								?>">
								<p id="phones"></p>
							</td>
						</tr>
						<tr>
							<td>
								Address
							</td>
							<td>
								<textarea name="address"><?php
									echo $_COOKIE['address'];
									?>
								</textarea>
								<p id="addresses"></p>
							</td>
						</tr>
						<tr>
							<td>
								Gender
							</td>
							<td>
								<input type="radio" name="gender" <?php if (isset($gender) && $gender=="Male") echo "checked";?> value="Male">Male
								<input type="radio" name="gender" <?php if (isset($gender) && $gender=="Female") echo "checked";?> value="Female">Female
								<input type="radio" name="gender" <?php if (isset($gender) && $gender=="Other") echo "checked";?> value="Others">Others
							</td>
						</tr>
						<tr>
							<td>
								Date of Birth
							</td>
							<td>
								<input type="date" name="dob" value="<?php echo $_COOKIE['address']; ?>">
							</td>
						</tr>
						
						<tr>
							<td>
								Blood Group
							</td>
							<td>
								<select name="blood">
								<!--<option value=""><?php echo $_COOKIE['blood']; ?></option>-->
									<option value="A+">A+</option>
									<option value="B+">B+</option>
									<option value="AB+">AB+</option>
									<option value="O+">O+</option>
									<option value="A-">A-</option>
									<option value="B-">B-</option>
									<option value="AB-">AB-</option>
									<option value="O-">O-</option>
								</select>
							</td>
						</tr>
						<tr>
							<td align="right" colspan="2">
								<hr>
								<input type="submit" name="submit" value="Change">
							</td>
						</tr>
						</h2>
					</table>
				</td>
			</tr>
			
		</table>
		<hr>
		<p align="center"> Copyright © 2021</p>
	</form>
	<script type="text/javascript">
		function validation() {
			
			let name = document.getElementById('name').value;
			let email = document.getElementById('email').value;
			let phone = document.getElementById('phone').value;
			let password = document.getElementById('password').value;
			let cpassword = document.getElementById('cpassword').value;
			let address = document.getElementById('address').value;

			
			
			if (name == "") {

				document.getElementById('names').innerHTML = "Fill the Name";
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
			if (password == "") {

				document.getElementById('passwords').innerHTML = "Fill the Password";
				return false;
			}
			if (cpassword == "") {

				document.getElementById('cpasswords').innerHTML = "Fill the Confirm Password";
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