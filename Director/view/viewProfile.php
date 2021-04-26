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
		<h1>View Profile</h1>
	</div>
		<table width="100%">
			<tr>
				
				<td>
					<table width="100%">
						<tr>
							<td>
								Name
							</td>
							<td>
								<pre>:	<?php
									echo $_COOKIE['name'];
								?></pre>
							</td>
							<td rowspan="8" align="center">
								<img src="../asset/image/<?php echo $_COOKIE['pic']; ?>" width="150px"> 
							</td>
						</tr>
						<tr>
							<td>
								Email
							</td>
							<td>
								<pre>:	<?php
									echo $_COOKIE['email'];
								?></pre>
							</td>
						</tr>
						<tr>
							<td>
								Phone
							</td>
							<td>
								<pre>:	<?php
									echo $_COOKIE['phone'];
								?></pre>
							</td>
						</tr>
						<tr>
							<td>
								Address
							</td>
							<td>
								<pre>:	<?php
									echo $_COOKIE['address'];
								?></pre>
							</td>
						</tr>
						<tr>
							<td>
								Gender
							</td>
							<td>
								<pre>:	<?php
									echo $_COOKIE['gender'];
								?></pre>
							</td>
						</tr>
						<tr>
							<td>
								Date of Birth
							</td>
							<td>
								<pre>:	<?php
									echo $_COOKIE['dob'];
								?></pre>
							</td>
						</tr>
						<tr>
							<td>
								Department
							</td>
							<td>
								<pre>:	<?php
									echo $_COOKIE['department'];
								?></pre>
							</td>
						</tr>
						<tr>
							<td>
								Blood Group
							</td>
							<td>
								<pre>:	<?php
									echo $_COOKIE['blood'];
								?></pre>
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