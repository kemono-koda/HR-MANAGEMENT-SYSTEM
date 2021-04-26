<?php
	if (isset($_POST['submit'])) {
		
		$username = $_POST['username'];
		$name = $_POST['name'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$gender = $_POST['gender'];
		$dob = $_POST['dob'];
		$department = $_POST['department'];
		$blood = $_POST['blood'];
		$picture = '3.png';
		$type = $_POST['type'];

		if ($username == "" && $name == "" && $password == "" && $cpassword == "" && $email == "" && $phone == "" && $address == "") {
			echo "Fill all the information";
		}else{
			if ($password == $cpassword) {

				if ($type == "Admin") {
					
					$conn = mysqli_connect('localhost', 'root', '', 'project_hrms');
					$sql = "insert into admin values('', '$name', '$username', '$email', '$password', '$gender', '$dob', '$address', '$type')"; 
					$result = mysqli_query($conn, $sql);
				}
				elseif ($type == "Manager") {
					
					$conn = mysqli_connect('localhost', 'root', '', 'project_hrms');
					$sql = "insert into registration values('','$username', '$name', '$password', '$email', '$phone', '$address', '$gender', '$department', '$blood', '$dob', '$type')"; 
					$result = mysqli_query($conn, $sql);
				}
				elseif ($type == "Director") {
					
					$conn = mysqli_connect('localhost', 'root', '', 'project_hrms');
					$sql = "insert into bod values('$username', '$name', '$password', '$cpassword', '$email', '$phone', '$address', '$gender', '$dob', '$department', '$blood', '$picture', '$type')"; 
					$result = mysqli_query($conn, $sql);
				}
				elseif ($type == "Employee"){

					$conn = mysqli_connect('localhost', 'root', '', 'project_hrms');
					$sql = "insert into employees values('$username', '$name', '$password', '$email', '$phone', '$address', '$gender', '$dob', '$department', '$blood', '$picture', '$type')"; 
					$result = mysqli_query($conn, $sql);
				}
				

				

?>

	<script type="text/javascript">
		
		alert("SignUp Successful");
		
	</script>
<?php

				header('location: ../view/signin.php');

			}
		}

		
		
	}
?>