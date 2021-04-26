<?php 
	
	session_start();
	$username = $_SESSION['username'];
	$subject = $_POST['subject'];
	$msg = $_POST['msg'];

	$conn = mysqli_connect('localhost', 'root', '', 'project_hrms');

	if (isset($_POST['vacation'])) {

		$sql = "insert into application values(' ', '$username', '$subject', '$msg', 'vacation')"; 
		$result = mysqli_query($conn, $sql);
			
		}
		elseif (isset($_POST['transfer'])) {

			$sql = "insert into application values(' ', '$username', '$subject', '$msg', 'transfer')"; 
			$result = mysqli_query($conn, $sql);

		}
		elseif (isset($_POST['resignation'])) {
			
			$sql = "insert into application values(' ', '$username', '$subject', '$msg', 'resignation')"; 
			$result = mysqli_query($conn, $sql);

		}
		elseif (isset($_POST['reference'])) {
			
			$sql = "insert into application values(' ', '$username', '$subject', '$msg', 'reference')"; 
			$result = mysqli_query($conn, $sql);

		}
		elseif (isset($_POST['promotion'])) {
			
			$sql = "insert into application values(' ', '$username', '$subject', '$msg', 'promotion')"; 
			$result = mysqli_query($conn, $sql);

		}
		elseif (isset($_POST['loan'])) {
			
			$sql = "insert into application values(' ', '$username', '$subject', '$msg', 'loan')"; 
			$result = mysqli_query($conn, $sql);

		}
		else {
			echo "Failed to Update";
		}

		header('location: ../view/dashboard.php');	
?>