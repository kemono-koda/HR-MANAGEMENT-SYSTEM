<!DOCTYPE html>
<html>
<head>
	<title>Signin </title>
</head>
<body>
 	
	<form method="POST" action="../controller/loginCheck.php "onsubmit="return validation()">
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
												<h2 align="center">Sign In</h2>
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
										<tr align="center">
											<td colspan="2">
												<br>
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
										<tr align="center">
											<td colspan="2">
												<br>
												<hr>
											</td>
										</tr>
										<tr align="center">
											<td colspan="2">
												<input type="submit" name="submit" value="Sign In">
											</td>
										</tr>
										<tr>
											<td>
												<a href="signup.php">Create an Account? </a>
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
			
			let password = document.getElementById('password').value;
			

			if (username == "") {

				document.getElementById('users').innerHTML = "Fill the Username";
				return false;
			}
			if (password == "") {

				document.getElementById('passwords').innerHTML = "Fill the Password";
				return false;
			}
			
			
		}
		</script>
</body>
</html>