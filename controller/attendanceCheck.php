<?php

	session_start();

	date_default_timezone_set('Asia/Dhaka');
	$date = date('d-m-y');
	$time = date('h:i:s');
	$enter = "Enter";
	$exit = "Exit";
	$username = $_SESSION['username'];


	$conn = mysqli_connect('localhost', 'root', '', 'project_hrms');
	

if (isset($_POST['enter'])) {

	$sql = "select * from attendance where username = '$username' and date = '$date' and status = '$enter'"; 
	$result = mysqli_query($conn, $sql);

	if ($result->num_rows == 1) {

		echo "you already attendance";

	}
	else{

		$sql = "insert into attendance values(' ', '$username', '$date', '$time', '$enter')"; 
		$result = mysqli_query($conn, $sql);
	
		header('location: ../view/attendance.php');
	}
}
else{

	$sql = "select * from attendance where username = '$username' and date = '$date' and status = '$exit'"; 
	$result = mysqli_query($conn, $sql);

	if ($result->num_rows == 1) {

		echo "you already exit";

	}
	else{

		$sql = "insert into attendance values(' ','$username', '$date', '$time', '$exit')"; 
		$result = mysqli_query($conn, $sql);
	
		header('location: ../view/attendance.php');
	}
	

}


	
?>