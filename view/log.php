<?php

	$search = $_REQUEST['search'];

	$con = mysqli_connect('localhost', 'root', '', 'project_hrms');
	$sql = "select * from application where topic like '%{$search}%'";
	$result = mysqli_query($con, $sql);

	$response = "<table border=1>
					<tr>
						<td>Subject</td>
						<td>Application</td>
					</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
		$response .= 	"<tr>
							<td>{$row['subject']}</td>
							<td>{$row['application']}</td>
						</tr>";
	}

	$response .= "</table>";

	echo $response;

/*
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];

	$conn = mysqli_connect('localhost', 'root', '', 'HRMS');
	$sql = "select * from employees where username like '%$username'"; 
	$result = mysqli_query($conn, $sql);

	if ($result->num_rows == 1) {
		
		$sql = "select * from employees where username like '%{$username}' and password like '%{$password}'"; 
		$result = mysqli_query($conn, $sql);

		if($result->num_rows == 1  ){

			echo "Success";
		}else {
			echo "Wrong Username or Password";
		}

	}

	*/


?>