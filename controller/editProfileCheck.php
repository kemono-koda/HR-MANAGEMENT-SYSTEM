<?php

	session_start();
	if (isset($_POST['submit'])) {
		
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$gender = $_POST['gender'];
		$dob = $_POST['dob'];
		$blood = $_POST['blood'];
		$username = $_SESSION['username'];
		//echo $username;

		if ($name == "" && $email == "" && $phone == "" && $address == "") {
			echo "Fill all the information";
		}
		else{

			$conn = mysqli_connect('localhost', 'root', '', 'project_hrms');
			$sql = "update employees set name = '$name', email = '$email', phone = '$phone', address = '$address', gender = '$gender', dob = '$dob', blood = '$blood' where username = '$username'"; 
			$result = mysqli_query($conn, $sql);

			//print_r($result);

			if($result == 1){

				$sql1 = "select * from employees where username = '$username'"; 
				$result1 = mysqli_query($conn, $sql1);

				$row = mysqli_fetch_assoc($result1);

				$_SESSION['name'] = $row['name'];
				$_SESSION['email'] = $row['email'];
				$_SESSION['phone'] = $row['phone'];
				$_SESSION['address'] = $row['address'];
				$_SESSION['gender'] = $row['gender'];
				$_SESSION['dob'] = $row['dob'];
				$_SESSION['blood'] = $row['blood'];

				header('location: ../view/dashboard.php');
			}
			else
			{

				echo "Failed to Update";
			}

		}
	}
?>