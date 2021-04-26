<?php
	
	include('header.php');
	$username = $_COOKIE['username'];
?>

	<script type="text/javascript" src="../js/list.js"></script>
	<div>
		<h1>Executive Remove List</h1>
	</div>

	<div id='nav_bar'>
		<a href="dashboard.php"> Back</a> |
		<a href="../../controller/logout.php"> logout</a>	
	</div>

	<div id="main_content">
		SEARCH: 
					<input type="text" name="search" id="search" onkeyup="ajax()">
		<table>
			<tr>
				<td>
				<div id="result">
			        <?php 

			        	
			         		$conn = mysqli_connect('localhost', 'root', '', 'project_hrms');
							
							$sql = "select * from hire"; 
							
							$result = mysqli_query($conn, $sql);

							echo "<table border=2>
								<tr>
								  <td>Username</td>
								  <td>Email</td>
								  <td>Phone</td>
								  <td>Gender</td>
								  <td>Department</td>
								</tr>";

							while ($row = mysqli_fetch_assoc($result))
							{
								echo "<tr>
								  <td>{$row['username']}</td>
								   <td>{$row['email']}</td>
								   <td>{$row['phone']}</td>
								   <td>{$row['gender']}</td>
								   <td>{$row['department']}</td>
								</tr>";
							}
							echo "</table>";
			    ?>
			    </div>


			</td>
			</tr>
		</table>
	</div>

		<p>copyright@2021</p>
</body>
</html>