<?php
	session_start();

	require_once('../model/UserModel.php');

		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$type = $_REQUEST['type'];

		$status = validateUser($username, $password, $type);

		if($status){

			if(!empty($_REQUEST['remember'])){
				setcookie('username', $username, time()+(86400*30));
				setcookie('password', $password, time()+(86400*30)); // 1 day = 86400
			}else{
				if(isset($_COOKIE['username'])){
					setcookie('username','');
				}
				if(isset($_COOKIE['password'])){
					setcookie('password','');
				}
			}
			
			$_SESSION['flag'] = true;

			$data = getUserById($username);
			$_SESSION['current_user']=$data;
			echo "Success";
			
			header('location: ../view/dashboard.php');

//=====================================================================================
			/*$_SESSION['user_type']=$user; //global declaration database
	
			if($user['user']=="Admin"){
				header('location: ../view/admin_home.php');
			}else{
				header('location: ../view/user_home.php');
			}*/
//=====================================================================================
		}else{
			
			echo "Invalid User";
		}
?>