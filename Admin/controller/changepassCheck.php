<?php
	require_once('../model/dbConnection.php');
	require_once('../model/userModel.php');

	session_start();

	if(isset($_POST['change']))
	{
		$allOk = true;

		if($_POST['nPassword'] === $_POST['cPassword'])
		{
			echo "New Password and Current Password should not match! \r\n";
			$allOk = false;
		}
		elseif(strlen($_POST['nPassword'])<8)
		{
			echo "Password must not be less than eight (8) characters \r\n";
			$allOk = false;
		}
		else
		{

			$check = false;
			for ($i=0; $i < strlen($_POST['nPassword']); $i++) { 
				if($_POST['nPassword'][$i] === '@' || $_POST['nPassword'][$i] === '#' || $_POST['nPassword'][$i] === '$' || $_POST['nPassword'][$i] === '%')
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

		if($_POST['nPassword'] !== $_POST['rnPassword'])
		{
			echo "New Password and Re-typed New Password do not match! \r\n";
			$allOk = false;
		}

		if($allOk === true)
		{
			$userId=$_SESSION['userId'];
			
			$password = $_POST['nPassword'];
			
			$userDetails = array('password' => $password);
			$connection = getConnection();
			$check = updateadminPass($userId,$password);
			if($check)
			{
				$_SESSION['flag'] = true;
				header('location: ../view/userProfile.php');
            	echo "Successful \r\n";
			}
			else
			{
				echo "Error occured!";
			}

		}
	} 
?>