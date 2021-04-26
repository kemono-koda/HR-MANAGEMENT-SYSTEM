
<?php

	require_once('../model/dbConnection.php');
	require_once('../model/userModel.php');

	session_start();

	if(isset($_POST['login']))
	{
	
		$allOk = true;

		if($_POST['userId'] === "")
		{
			echo "UserName field is empty! \r\n";
			$allOk = false;
		}
		elseif($_POST['password'] === "")
		{
			echo "Password field is empty! \r\n";
			$allOk = false;
		}
		elseif(strlen($_POST["userId"])<2)
		{
			echo "User Name must contain at least two (2) characters \r\n";
			$allOk = false;
		}
		elseif(strlen($_POST['password'])<8)
		{
			echo "Password must not be less than eight (8) characters \r\n";
			$allOk = false;
		}

		if($allOk === true)
		{
			
            $_SESSION['userId'] = $_POST['userId'];
			$_SESSION['password'] = $_POST['password'];
			
            $userid = $_SESSION['userId'];
			$password = $_SESSION['password'];

			$_SESSION['flag'] = true;
			
			$userDetails = array('userid' => $userid, 'password' => $password);
			$connection = getConnection();


			$check = getloginInfo($userid,$password);
			if($check)
			{
				echo "Success!";
				header('location: ../view/dashBoard.php');
				
				//header('location: ../view/dashBoard.php');
			}
			else
			{
				echo "Error occured!";
			}

		}
	} 

        
	
?>