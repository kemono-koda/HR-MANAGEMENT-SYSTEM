<?php
	
	include('header.php');
?>

	
	<form method="POST" action="">
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
		<h1>Job Advertisement</h1>
	</div>
		<table  width="100%">
			<tr>
				<td width="20%">
				</td>
				<td>
					<table width="100%">
			<tr>
				<td>ENGINEER</td>
				<td>QUALIFICATION</td>
				<td>EXPERIENCE</td>
				<td>CFO</td>
				<td>QUALIFICATION</td>
				<td>EXPERIENCE</td>
				
			</tr>
			<tr>
				<td>Vacancy-2</td>
				<td>B.Sc. must</td>
				<td>N/A</td>
				<td>Vacancy-1</td>
				<td>MBA must</td>
				<td>Yes</td>
				
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