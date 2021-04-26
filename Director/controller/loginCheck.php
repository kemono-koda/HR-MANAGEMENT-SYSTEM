<?php
	
	session_start();
	if (isset($_POST['submit'])) {

		$username = $_POST['username'];
			$password = $_POST['password'];
		if ($_POST['username'] == "" && $_POST['password'] == "") {
			echo "Enter Correct Information";
		}
		else
		{
			    $attach = mysqli_connect('localhost', 'root', '', 'project_hrms');
				
				$db = "select*from bod where username = '$username' and password = '$password'"; 
			
				$result = mysqli_query($attach, $db);
			  
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
						header('location: ../view/dashboard.php');
				}
				
			}
		


	
?>