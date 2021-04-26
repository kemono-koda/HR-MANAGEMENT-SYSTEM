<?php
	session_start();
	if(isset($_SESSION['flag']))
	{
	require_once('../model/dbConnection.php');
	require_once('../model/userModel.php');
	

	//$id = $_GET['id'];
	$userid = $_SESSION['userId'];
	$connection = getConnection();
	$selectedUser = getloginbyId($userid);
	//$_SESSION['id'] = $id;
	$gender=$selectedUser['gender'];
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard</title>

	<script type="text/javascript">

    function validation() {
	let name=document.getElementById('name').value;
    let userid=document.getElementById('userId').value;
	let email=document.getElementById('email').value;
    let password=document.getElementById('password').value;
	let cpassword=document.getElementById('cPassword').value;
	let gender=document.getElementById('gender').value;
	let address=document.getElementById('address').value;
	
	if(name=="")
    {
        document.getElementById('user_name').innerHTML="User name missing ";
        return false;
    }
    if(userid=="")
    {
        document.getElementById('user_id').innerHTML="User ID missing ";
        return false;
    }
	if(email=="")
    {
        document.getElementById('user_email').innerHTML="User email missing ";
        return false;
    }
    if(password=="")
    {
        document.getElementById('user_password').innerHTML="Password is missing ";

        return false;
    }
    if(cpassword=="")
    {
        document.getElementById('user_cPassword').innerHTML="Current Password is missing ";
        return false;
    }
	if(address=="")
    {
        document.getElementById('user_address').innerHTML="Address is missing ";
        return false;
    }
	if(gender=="")
    {
        document.getElementById('user_gender').innerHTML="Address is missing ";
        return false;
    }
	
    }
    </script>

</head>

<body>
    <header>

    <table width="100%" cellspacing="0">

		<tr>
			<td align="right">
				<a href="dashBoard.php"> <img width="200px" src="websitelogo.png" align="left"> </a> 
				<a href="dashBoard.php"><?php echo $selectedUser['name']?></a> 
				&nbsp
                <a href="../../controller/logout.php">Logout</a> 
				&nbsp
			</td>
		</tr>

	</table>

    </header>

    <nav>
    
    <table width="100%" cellspacing="0" border="1">
		<tr>
			<td width="33%">
                DashBoard
                <br>
                <br>
                <details>
                    <summary>
                    Profile
                    </summary>
                    <a href="userProfile.php">User Profile</a><br>
                    <a href="editProfile.php">Edit Profile</a><br>
                    <a href="changePassword.php">Change Password</a><br>
                    
                </details>

                <details>
                    <summary>
                    Add Users
                    </summary>
                    <a href="addManagement.php">Management</a><br>
                    <a href="addEmployee.php">Employee</a><br>
                    <a href="addboardofDirector.php">Board of Director</a><br>
                </details>

                <details>
                    <summary>
                    Verify Users
                    </summary>
                    <a href="verifyManagement.php">Management</a><br>
                    <a href="verifyEmployee.php">Employee</a><br>
                    <a href="verifyboardofDirector.php">Board of Director</a><br>
                </details>

                <details>
                    <summary>
                    Manipulate Users
                    </summary>
                    <a href="manipuManagement.php">Management</a><br>
                    <a href="manipuEmployee.php">Employee</a><br>
                    <a href="manipuboardofDirector.php">Board of Director</a><br>
                </details>

                <details>
                    <summary>
                    News
                    </summary>
                    <a href="news.php">News</a><br>
                    
                </details>

                <details>
                    <summary>
                    Notifications
                    </summary>
                    <a href="notification.php">Notification</a><br>
                    <a href="helpseekingNotification.php">Help Seeking Notification</a><br>
                    
                </details>

			</td>

            <td width="67%">
                <center>
                <form method="POST" action="../controller/addmanagementCheck.php" onsubmit="return validation()">
                <fieldset style="width: 33%">
                
                <table width="100%">
				<tr>
					<td colspan="2">
						Name :
					</td>

					<td>
						<input type="name" name="name" id="name" value="">
						<p id="user_name"></p>
					</td>
				</tr>

				<tr>
					<td colspan="2">
						User Id :
					</td>
            
					<td>
						<input type="text" name="userId" id="userId" value="">
						<p id="user_id"></p>
					</td>
				</tr>

				<tr>
					<td colspan="2">
						Email :
					</td>
					<td>
						<input type="email" name="email" id="email" value="">
						<p id="user_email"></p>
					</td>
				</tr>

				<tr>
					<td colspan="2">
						Password :
					</td>
                    
					<td>
						<input type="password" name="password" id="password" value="">
						<p id="user_password"></p>
					</td>
				</tr>

				<tr>
					<td colspan="2">
						Confirm Password :
					</td>
                    
					<td>
						<input type="password" name="cPassword" id="cPassword" value="">
						<p id="user_cPassword"></p>
					</td>
				</tr>
				

				<tr>
					<td>
						Gender :
					</td>
					<td colspan="3">
					<input type="radio" name="gender"/ id="gender" value="Male"> Male
					<input type="radio" name="gender"/ id="gender" value="Female"> Female
					<input type="radio" name="gender"/ id="gender" value="Other"> Other
					<p id="user_gender"></p>
					</td>
				</tr>
                <tr>
					<td colspan="2">
						DOB :
					</td>
					<td colspan="2">
                    <input type="date" name="dob" id="dob" value="">
					<p id="user_dob"></p>
					</td>
				</tr>

                <tr>
					<td colspan="2">
						Address :
					</td>
					<td colspan="2">
                    <input type="text" name="address" id="address" value="">
					<p id="user_address"></p>
					</td>
				</tr>

                <tr>
					<td>
						Status :
					</td>
					<td colspan="3">
					<input type="radio" name="status"/ id="status" value="active"> Active
					<input type="radio" name="status"/ id="status" value="inactive"> Inactive
					<p id="user_status"></p>
					</td>
				</tr>


				<tr>
					<td colspan="3"> <hr> </td>
				</tr>

				<tr>
					<td>
						<input type="submit" name="add" value="add">
                    
                    </td>
					<td>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </td>
                    <td colspan="2">
                   
					</td>
				</tr>

            </table>
                
                </fieldset>
                </form>
                </center>
			</td>

		</tr>

		<tr height = "50px">
			<td colspan="3">
				<center> Copyright &copy 2021 </center>
			</td>
		</tr>
        
	</table>

    </nav>
</body>

</html>

<?php

	}
	else
	{
		echo "Please do Registration before login in";
		header('location: ../../view/signup.php');
	}

?>