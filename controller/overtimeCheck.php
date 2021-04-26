<?php

	session_start();

	date_default_timezone_set('Asia/Dhaka');
	$date = date('d-m-y');
	$time = date('h:i:s');
	$start = "Start";
	$over = "Over";
	$username = $_SESSION['username'];


	$conn = mysqli_connect('localhost', 'root', '', 'project_hrms');


	if (isset($_POST['start'])) {

		$sql = "select * from overtime where username = '$username' and date = '$date' and status = '$start'"; 
		$result = mysqli_query($conn, $sql);

	if ($result->num_rows == 1) {

		echo "you already started";

	}
	else{

		$sql = "insert into overtime values(' ', '$username', '$date', '$time', '$start')"; 
		$result = mysqli_query($conn, $sql);
	
		header('location: ../view/overtime.php');
	}

}
else{

	$sql = "select * from overtime where username = '$username' and date = '$date' and status = '$over'"; 
	$result = mysqli_query($conn, $sql);

	if ($result->num_rows == 1) {

		echo "your duty already Overed";

	}
	else{

		$sql = "insert into overtime values(' ','$username', '$date', '$time', '$over')"; 
		$result = mysqli_query($conn, $sql);
	
		header('location: ../view/overtime.php');
	}

}


	
?>