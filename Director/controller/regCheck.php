<?php
	if (isset($_POST['submit'])) {
		
		$username = $_POST['username'];
		 $name = $_POST['name'];
		  $password = $_POST['password'];
		   $cpassword = $_POST['cpassword'];
		    $email = $_POST['email'];
	       	 $phone = $_POST['phone'];
		  	  $address = $_POST['address'];
			   $gender = $_POST['gender'];
				$dob = $_POST['dob'];
		         $department = $_POST['department'];
				  $blood = $_POST['blood'];
				   $pic = "";
		if ($username == "" && $name == "" && $password == "" && $cpassword == "" && $email == "" && $phone == "" && $address == "") {
			echo "Fill all the information";
		}

		else{

			  
			    $attach = mysqli_connect('localhost', 'root', '', 'project_hrms');
			
				$db = "insert into bod values('$username', '$name', '$password', '$cpassword', '$email', '$phone','$address','$gender','$dob','$department','$blood','$pic')"; 
				
				$result = mysqli_query($attach, $db);
			    


               	header('location: ../view/signin.php');
			}
		}

		
		
	
?>