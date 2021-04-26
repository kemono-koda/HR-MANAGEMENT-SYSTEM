<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    
    <script type="text/javascript">
    function validation() {
    let userid=document.getElementById('userId').value;
    let password=document.getElementById('password').value;

    if(userid=="" && password=="")
    {
        document.getElementById('user').innerHTML="User ID missing ";
        document.getElementById('pass').innerHTML="Password is missing ";
        return false;
    }
    if(userid=="")
    {
        document.getElementById('user').innerHTML="User ID missing ";
        
        return false;
    }
    if(password=="")
    {
        document.getElementById('pass').innerHTML="Password is missing ";

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
    
    <table width="100%" cellspacing="40" align="center">
		<tr>
			<td width="33%">
          
			</td>

            <td width="33%">
                <center>
                <form method="POST" action="../controller/userlogCheck.php" onsubmit="return validation()">
                <fieldset style="width: 33%">
                
                <table>
                    <tr>
                        
                        <td colspan="2">
                        <img align="left"height="15px"src="user.png">
                            User Id:
                        </td>
                        <td>
                            <input type="text" name="userId" id="userId" value="">
                            <p id="user"></p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                        <img align="left"height="15px"src="key.jpg">
                            Password:
                        </td>
                        
                        <td>
                            <input type="password" name="password" id="password" value="">
                            <p id="pass"></p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <input type="checkbox" name="rememberMe">Remember Me
                        </td>
                        
                    </tr>
                    <tr>
                        <td colspan="3">
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="login" value="login">
                        </td>
                        <td>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </td>
                        <td>
                            <a href="forgotPassword.php"> Forgot password </a>
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