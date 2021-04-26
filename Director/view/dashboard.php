<?php
	
	include('header.php');
?>

	<form method="POST" action="">
		<table width="100%" height="100px">
		<tr height="100px">
			<td>
				<table width="100%">
					<tr>
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
		<table  width="50%">
			<tr>
				<td width="20%">
					
					<details align="left">
						<summary><h1> MENU </h1></summary>

						<h3>
						<details>
							<summary>Profile</summary>
							<a href="viewProfile.php">Profile</a><br>
							<a href="editProfile.php">Edit Details</a><br>
							<a href="changePassword.php">Change Password</a>
						</details>
							
							<details>
								<summary>Hiring & Firing</summary>
								<a href="hire.php"> Executive Hiring</a></br>
								<a href="fire.php"> Executive Firing List</a>
							</details>
							
								<details>
									<summary>Performance Appraisal</summary>
									<a href="performance.php">Performance list of the executives</a>
								</details>
									
									<details>
										<summary>Salary</summary>
										<a href="">Salary Based on Attendance</a><br>
										<a href="performance.php">Compensation Based on Attendance & Performance</a>
									</details>
										
										<details>
											<summary>Budget</summary>
											<a href="budget.php">Annual Budget</a>
										</details>
											
											<details>
												<summary>Advertisement</summary>
												<a href="advertisement.php">Job Advertisement</a>
											</details>
												
												<details>
													<summary>Application Checking</summary>
													<a href="applicationCheck.php">Application</a>
												</details>
													
													<details>
														<summary>Planning</summary>
														<a href="meeting.php">Meeting</a>
													</details>
					</h3>
						
					</details>
					<a  href="../../controller/logout.php" >Logout </a> 
				
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
