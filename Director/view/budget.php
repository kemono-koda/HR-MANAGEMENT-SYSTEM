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
		<h1>Annual Budget</h1>
	</div>
		<table  width="100%">
			<tr>
				<td width="20%">
				</td>
				<td>
					<table width="100%">
						<h2>
						<h1>Our Annual Budget(2021) is 400k</h1>
						</h2>
					</table>
				</td>
			</tr>
			
		</table>
		<hr>
		<p align="center"> Copyright © 2021</p>
	</form>
</body>
</html>