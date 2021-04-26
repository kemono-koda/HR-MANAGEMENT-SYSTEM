<?php
	
	session_start();
	if (isset($_POST['submit'])) {

		$cpassword = $_POST['cpassword'];
		$npassword = $_POST['npassword'];
		$rpassword = $_POST['rpassword'];
		$username = $_COOKIE['username'];

		if ($cpassword != "" && $npassword != "" && $rpassword != "") {

			if ($cpassword != $npassword && $npassword == $rpassword) {
				
				$attach = mysqli_connect('localhost', 'root', '', 'project_hrms');
				$db = "update bod set password = '$npassword', cpassword = $npassword where username = '$username'";

				$result = mysqli_query($attach, $db);

				header('location: logout.php');

			}
		}
		
	}
?>