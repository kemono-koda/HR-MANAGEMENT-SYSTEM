<?php
	
	session_start();
	if (isset($_POST['submit'])) {

		$cpassword = $_POST['cpassword'];
		$npassword = $_POST['npassword'];
		$rpassword = $_POST['rpassword'];
		$username = $_SESSION['username'];

		if ($cpassword != "" && $npassword != "" && $rpassword != "") {

			if ($cpassword != $npassword && $npassword == $rpassword) {
				
				$conn = mysqli_connect('localhost', 'root', '', 'project_hrms');
				$sql = "update employees set password = '$npassword' where username = '$username'";

				$result = mysqli_query($conn, $sql);

				header('location: logout.php');

			}else{
				echo "Try Again";
			}
		}
		else{

			echo "Fill all the information";
		}
	}
?>