<?php
	
	include('header.php');
?>

	<form method="POST" action="../controller/passwordCheck.php">
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
		<table  width="100%">
			<tr>
				
				<td>
					<table align="center">
						<tr>
							<td>
								<fieldset>
									
									<table>
										<tr>
											<td>Current Password:</td>	
											<td>
												<input type="password" name="cpassword" value="">
											</td>
										</tr>
										<tr>
											<td>New Password:</td>		
											<td>
												<input type="password" name="npassword" value="">
											</td>
										</tr>
										<tr>
											<td>Retype New Password:</td>		
											<td>
												<input type="password" name="rpassword" value="">
												<br>
											</td>
										<tr>
											<td>
												<input type="submit" name="submit" value="Change">
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
		<hr>
		<p align="center"> Copyright © 2021</p>
	</form>
</body>
</html>