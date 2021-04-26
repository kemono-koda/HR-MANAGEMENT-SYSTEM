<?php
	
	session_start();
	if (isset($_POST['submit'])) {

		//$ck = 0;

		$username = $_POST['username'];
		$password = $_POST['password'];
		$type = $_POST['type'];

		if ($_POST['username'] == "" && $_POST['password'] == "") {
			//echo "Enter Correct Information";
			echo "<script> alert('Please fill all the Information'); window.location = '../view/signin.php' </script>";
		}
		else
		{
			if ($type == "Admin") {
					
				$conn = mysqli_connect('localhost', 'root', '', 'project_hrms');
				$sql = "select * from admin where userid = '$username' and password = '$password'"; 
				$result = mysqli_query($conn, $sql);

				if($result->num_rows == 1  ){

					$row = mysqli_fetch_assoc($result);
					
					$_SESSION['userId'] = $_POST['username'];
					$_SESSION['password'] = $_POST['password'];
			
          			
					$_SESSION['flag'] = true;
					//setcookie('flag', true, time()+3600, '/');

					header('location: ../Admin/view/dashBoard.php');
			}
			else{
				echo "<script> alert('Invalid Admin'); window.location = '../view/signin.php' </script>";
			}
			}
			elseif ($type == "Manager") {
				
				$conn = mysqli_connect('localhost', 'root', '', 'project_hrms');
				$sql = "select * from registration where username = '$username' and password = '$password'"; 
				$result = mysqli_query($conn, $sql);

				if($result->num_rows == 1  ){

					require_once('../Manager/model/UserModel.php');
                    $data = getUserById($username);
                    $_SESSION['current_user']=$data;
                    $_SESSION['flag'] = true;
					//setcookie('flag', true, time()+3600, '/');

					header('location: ../Manager/view/dashboard.php');
			}
			else{
				echo "<script> alert('Invalid Manager'); window.location = '../view/signin.php' </script>";
			}
		}
			elseif ($type == "Director") {
				
				$conn = mysqli_connect('localhost', 'root', '', 'project_hrms');
				$sql = "select * from bod where username = '$username' and password = '$password'"; 
				$result = mysqli_query($conn, $sql);
				if($result->num_rows == 1  ){

					$value = mysqli_fetch_assoc($result);

					setcookie('name', $value['name'], time()+3600, '/');
					setcookie('username', $value['username'], time()+3600, '/');
					setcookie('email', $value['email'], time()+3600, '/');
					setcookie('phone', $value['phone'], time()+3600, '/');
					setcookie('address', $value['address'], time()+3600, '/');
					setcookie('gender', $value['gender'], time()+3600, '/');
					setcookie('dob', $value['dob'], time()+3600, '/');
					setcookie('department', $value['department'], time()+3600, '/');
					setcookie('blood', $value['blood'], time()+3600, '/');
					setcookie('pic', $value['pic'], time()+3600, '/');

					$_SESSION['flag'] = true;

				setcookie('flag', true, time()+3600, '/');
				header('location: ../Director/view/dashboard.php');
			}
			else{
				echo "<script> alert('Invalid Director'); window.location = '../view/signin.php' </script>";
			}

			}
			elseif ($type == "Employee") {

				$conn = mysqli_connect('localhost', 'root', '', 'project_hrms');
				$sql = "select * from employees where username = '$username' and password = '$password'"; 
				$result = mysqli_query($conn, $sql);

				if($result->num_rows == 1  ){

					$row = mysqli_fetch_assoc($result);

					$_SESSION['name'] = $row['name'];
					$_SESSION['username'] = $row['username'];
					$_SESSION['email'] = $row['email'];
					$_SESSION['phone'] = $row['phone'];
					$_SESSION['address'] = $row['address'];
					$_SESSION['gender'] = $row['gender'];
					$_SESSION['dob'] = $row['dob'];
					$_SESSION['department'] = $row['department'];
					$_SESSION['blood'] = $row['blood'];
					$_SESSION['picture'] = $row['picture'];
					$_SESSION['type'] = $row['type'];

				setcookie('flag', true, time()+3600, '/');
				header('location: ../view/dashboard.php');
			}
			else{
				echo "<script> alert('Invalid Employee'); window.location = '../view/signin.php' </script>";
			}

			}
			elseif ($type == "Select") {
				
				echo "<script> alert('Please select user type'); window.location = '../view/signin.php' </script>";

			}

			
		}


	
}
?>