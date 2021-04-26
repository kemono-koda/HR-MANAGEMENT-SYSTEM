<?php
	
	include('header.php');
?>


	<form method="POST" action="../controller/picCheck.php" enctype="multipart/form-data">
		<table width="100%" height="100px">
			<tr height="100px">
				<td>
					<table width="100%">
						<tr>
						<td>
							<a href="editProfile.php"><img src="../asset/4.png" width="20px" height="20px">Back</a>
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
		<h1>Change Profile Picture</h1>
	</div>
		<table  width="100%">
			<tr>
				<td width="20%">
					
					<details>
						<summary>MENU</summary>
						<details>
							<summary>Profile</summary>
								<a href="viewProfile.php">Profile</a><br>
									<a href="editProfile.php">Edit Details</a><br>
										<a href="changePassword.php">Change Password</a>
											</details>
						
												<details>
													<summary>Hiring & Firing</summary>
														<a href=""> Executive Hiring</a></br>
															<a href=""> Executive Firing List</a>
																</details>
																	<details>
																		<summary>Performance Appraisal</summary>
																			<a href="">Performance list of the executives</a>
																				</details>
																					<details>
																						<summary>Salary</summary>
																							<a href="">Salary Based on Attendance</a><br>
																								<a href="">Compensation Based on Attendance & Performance</a>
																									</details>
						<details>
							<summary>Budget</summary>
								<a href="">Annual Budget</a>
									</details>
						
										<details>
											<summary>vacancy</summary>
												<a href="">Job Advertisement</a>
													</details>
						
														<details>
															<summary>Application Checking</summary>
																<a href="">Application</a>
																	</details>
						
																		<details>
																			<summary>Planning</summary>
																				<a href="">Meeting</a>
																					</details>
																						<a href="../../controller/logout.php">Logout</a> 
																							</details>
				
				</td>
				<td>
					<table align="center">
						<tr>
							<td>
								<fieldset>
								<table>
									<tr>
										<td><img src="../asset/image/<?php echo $_COOKIE['picture']; ?>
" width="200px"></td>
									</tr>
									<tr>
										<td>
											<input type="file" name="image" >
										</td>
									</tr>
									<tr>
										<td>
											<input type="submit" name="submit" value="Upload">
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