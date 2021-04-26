<?php
	//sleep(3);
	session_start();
	$name = $_REQUEST['name'];

	$con = mysqli_connect('localhost', 'root', '', 'project_hrms');
	$sql = "select * from employee where name like '%{$name}%'";
	$result = mysqli_query($con, $sql);

	$response = "<table border=1>
					<tr>
						
						<td>Name</td>
						<td>User ID</td>
						<td>Email</td>
						<td>Password</td>
						<td>Operation</td>
						
					</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
		$response .= 	"<tr>
							
							<td>{$row['name']}</td>
							<td>{$row['userid']}</td>
							<td>{$row['email']}</td>
							<td>{$row['password']}</td>
							
							<td> <a href='manipuEmployee.php?userid={$row['userid']}'> Edit</a></td>
						</tr>";
	} 

	$response .= "</table>";

	echo $response;

?>