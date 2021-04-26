<?php
	
	session_start();

	require_once('../model/dbConnection.php');
	require_once('../model/userModel.php'); 

	if(isset($_POST['edit']))
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
        elseif($_POST['gender'] === "")
		{
			echo "Gender is empty! \r\n";
			$allOk = false;
		}
        elseif($_POST['dob'] === "")
		{
			echo "DOB field is empty! \r\n";
			$allOk = false;
		}
        elseif($_POST['address'] === "")
		{
			echo "Address field is empty! \r\n";
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
			
			//$userId=$_SESSION['userId'];
			$name = $_POST['name'];
            $userid = $_POST['userId'];
			$password = $_POST['password'];
			$email = $_POST['email'];
			$gender = $_POST['gender'];
            $dob = $_POST['dob'];
            $address = $_POST['address'];
            $status = $_POST['status'];


			$_SESSION['flag'] = true;
			
			$userDetails = array('name' => $name, 'userid' => $userid, 'password' => $password, 'email' => $email, 'gender' => $gender, 'dob' => $dob, 'address' => $address,'status' => $status);
			$connection = getConnection();
			$check = updateManagement($userid,$userDetails);
			if($check)
			{
				header('location: ../view/verifyManagement.php');
            	echo "Successful";
			}
			else
			{
				echo "Error occured!";
			}
		}
	} 
?>