<?php

	session_start();
	if (isset($_POST['submit'])) {
		$username = $_COOKIE['username'];

		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$gender = $_POST['gender'];
		$dob = $_POST['dob'];
		$department = $_POST['department'];
		$blood = $_POST['blood'];

		if ($name == "" && $email == "" && $phone == "" && $address == "") {
			echo "Fill all the information";
		}
		else{

			$attach = mysqli_connect('localhost', 'root', '', 'project_hrms');
			$db = "update bod set name = '$name', email = '$email', phone = '$phone', address = '$address', gender = '$gender', dob = '$dob', blood = '$blood' where username = '$username'"; 
			$result = mysqli_query($attach, $db);

			if($result == 1){

				$db = "select * from bod where username = '$username'"; 
				$result1 = mysqli_query($attach, $db);

				$value = mysqli_fetch_assoc($result);

				$_COOKIE['name'] = $value['name'];
				$_COOKIE['email'] = $value['email'];
				$_COOKIE['phone'] = $value['phone'];
				$_COOKIE['address'] = $value['address'];
				$_COOKIE['gender'] = $value['gender'];
				$_COOKIE['dob'] = $value['dob'];
				$_COOKIE['blood'] = $value['blood'];

				header('location: ../view/dashboard.php');
			}

					
				}
			}


			
?>