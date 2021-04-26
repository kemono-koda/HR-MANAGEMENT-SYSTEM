
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

	<script type="text/javascript">
        function validation() {
	let name=document.getElementById('name').value;
    let userid=document.getElementById('userId').value;
	let email=document.getElementById('email').value;
    let password=document.getElementById('password').value;
	let cpassword=document.getElementById('cPassword').value;
	let gender=document.getElementById('gender').value;
	//let userid=document.getElementById('userId').value;
	//let userid=document.getElementById('userId').value;
	//let userid=document.getElementById('userId').value;
	
    
	if(name=="")
    {
        document.getElementById('user_name').innerHTML="User name missing ";
        //document.getElementById('pass').innerHTML="Password is missing ";
        return false;
    }
    if(userid=="")
    {
        document.getElementById('user_id').innerHTML="User ID missing ";
        //document.getElementById('pass').innerHTML="Password is missing ";
        return false;
    }
	if(email=="")
    {
        document.getElementById('user_email').innerHTML="User email missing ";
        //document.getElementById('pass').innerHTML="Password is missing ";
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
	if(gender=="")
    {
        document.getElementById('user_gender').innerHTML="gender is missing ";

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
			<a href="login.php"> <img width="200px" src="websitelogo.png" align="left"> </a>
				<a href="login.php"> Login </a> 
				&nbsp
				<a href="registration.php"> Registration </a>
				&nbsp
			</td>
		</tr>

	</table>

    </header>

    <nav>
    <table width="100%" cellspacing="40">
		<tr>
			<td width="33%">
			</td>

            <td width="33%">
			<center>
            <form method="POST" action="../controller/userregCheck.php" onsubmit="return validation()">
		    <fieldset style="width: 15%">
			
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
					<input type="radio" name="gender"id="gender"/ value="Male"> Male
					<input type="radio" name="gender"id="gender"/ value="Female"> Female
					<input type="radio" name="gender"id="gender"/ value="Other"> Other
					<p id="user_gender"></p>
					</td>
				</tr>

				<tr>
					<td colspan="3"> <hr> </td>
				</tr>

				<tr>
					<td>
						<input type="submit" name="signUp" value="singUp">
                    </td>
					<td>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </td>
                    <td colspan="2">
						<a href="login.php"> Sign In </a>
					</td>
				</tr>

            </table>
            </fieldset>
            </form>
            </center>   
			</td>

            <td width="33%">
                
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