<?php

	session_start();
	if (isset($_POST['submit'])) {
		$username = $_COOKIE['username'];
			
				$file_info = $_FILES['image'];
		$file = $file_info['name'];
		$filename = $file_info['tmp_name'];
		$destination = '../asset/image/' . $file_info['name'];
		if(move_uploaded_file($filename, $destination)){
			

			$attach = mysqli_connect('localhost', 'root', '', 'project_hrms');
			$db = "update bod set pic = '$file' where username = '$username'";
			$result = mysqli_query($attach, $db);

			if($result == 1){

				$db = "select * from bod where username = '$username'"; 
				$result = mysqli_query($attach, $db);

				$value = mysqli_fetch_assoc($result);

				$_COOKIE['pic'] = $value['pic'];

				header('location: ../view/changeProfilePicture.php');
			}
				}
			}
			
?>