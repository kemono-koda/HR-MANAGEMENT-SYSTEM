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
    
    if(isset($_GET['userid']))
    {
    $userid=$_GET['userid'];
    $connection = getConnection();
    $check = deleteManagement($userid); 
    $_SESSION['userid'] = $userid;
    if($check)
    {
        echo "Management removed!";
        //header('location: ../view/displayProduct.php');
    }
    else
    {
        echo "Error occured!";
    }
    }
	//$connection = getConnection();
	//$managementList = getManagement();
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard</title>

	<script type="text/javascript" src="script.js"></script>
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
                
                <h1 id="myh1"></h1>
				<input type="text" name="name" id="name" onkeyup="ajax()" />
				<input type="submit" name="search" value="Search By Name">

				<div id="result">
              
				</div>

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

	}else{
		echo "Please do Registration before login in";
		header('location: ../../view/signup.php');
	}

?>