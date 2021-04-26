<?php
	
	require_once('../model/dbConnection.php');
	require_once('../model/userModel.php');

	session_start();

	if(isset($_POST['signUp']))
	{	

		$allOk = true;

		if($_POST["name"] === "")
		{
			echo "Name field is empty! \r\n";
			$allOk = false;
		}
		
		elseif($_POST['userId'] === "")
		{
			echo "UserName field is empty! \r\n";
			$allOk = false;
		}
        elseif($_POST['email'] === "")
		{
			echo "Email field is empty! \r\n";
			$allOk = false;
		}
		elseif(strlen($_POST['userId'])<2)
		{
			echo "User Name must contain at least two (2) characters \r\n";
			$allOk = false;
		}
		elseif(strlen($_POST['password'])<8)
		{
			echo "Password must not be less than eight (8) characters \r\n";
			$allOk = false;
		}
		elseif($_POST['password'] !== $_POST['cPassword'])
		{
			echo "Password and Confirm Password do not match! \r\n";
			$allOk = false;
		}
		else
		{

			$check = false;
			for ($i=0; $i < strlen($_POST['password']); $i++) { 
				if($_POST['password'][$i] === '@' || $_POST['password'][$i] === '#' || $_POST['password'][$i] === '$' || $_POST['password'][$i] === '%')
				{
					$check = true;
					break;
				}
			}

			if($check === false)
			{
				echo "Please insert (@ or # or $ or %) special charecter in Password field \r\n";
				$allOk = false;
			}
		}

		if($allOk === true)
		{
			$_SESSION['name'] = $_POST['name'];
            $_SESSION['userId'] = $_POST['userId'];
			$_SESSION['password'] = $_POST['password'];
			$_SESSION['email'] = $_POST['email'];
			$_SESSION['gender'] = $_POST['gender'];

			$_SESSION['flag'] = true;

			$name = $_SESSION['name'];
            $userid = $_SESSION['userId'];
			$password = $_SESSION['password'];
			$email = $_SESSION['email'];
			$gender = $_SESSION['gender'];
			
			$userDetails = array('name' => $name, 'userid' => $userid, 'password' => $password, 'email' => $email, 'gender' => $gender);
			$connection = getConnection();
			$check = insertAdmin($userDetails);
			if($check)
			{
				echo "Success!";
				alert('Registration Successful');
				header('location: ../view/login.php');
			}
			else
			{
				echo "Error occured!";
			}

		}
	} 
?>