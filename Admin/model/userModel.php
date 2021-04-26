<?php

function insertAdmin($userDetails)
	{
		$conn = getConnection();
		$sql = "insert into admin values('', '{$userDetails['name']}', '{$userDetails['userid']}', '{$userDetails['email']}', '{$userDetails['password']}', '{$userDetails['gender']}', '', '')";
		
		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

function insertManagement($userDetails)
	{
		$conn = getConnection();
		$sql = "insert into management values('', '{$userDetails['name']}', '{$userDetails['userid']}', '{$userDetails['email']}', '{$userDetails['password']}', '{$userDetails['gender']}', '{$userDetails['dob']}', '{$userDetails['address']}',
        '{$userDetails['status']}')";
		
		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

function insertEmployee($userDetails)
	{
		$conn = getConnection();
		$sql = "insert into employee values('', '{$userDetails['name']}', '{$userDetails['userid']}', '{$userDetails['email']}', '{$userDetails['password']}', '{$userDetails['gender']}', '{$userDetails['dob']}', '{$userDetails['address']}',
        '{$userDetails['status']}')";
		
		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

function insertboardofDicretor($userDetails)
	{
		$conn = getConnection();
		$sql = "insert into boardofdirector values('', '{$userDetails['name']}', '{$userDetails['userid']}', '{$userDetails['email']}', '{$userDetails['password']}', '{$userDetails['gender']}', '{$userDetails['dob']}', '{$userDetails['address']}',
        '{$userDetails['status']}')";
		
		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}



function getloginInfo($userid,$password)
	{

		$conn = getConnection();
		$sql = "select * from admin where userid='{$userid}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

function getloginbyId($userid)
	{

		$conn = getConnection();
        
		$sql = "select * from admin where userid='{$userid}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

function getloginbymanagementId($userid)
	{

		$conn = getConnection();
        
		$sql = "select * from management where userid='{$userid}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

function getloginbyemployeeId($userid)
	{

		$conn = getConnection();
        
		$sql = "select * from employee where userid='{$userid}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

function getloginbyboardofdirectorId($userid)
	{

		$conn = getConnection();
        
		$sql = "select * from boardofdirector where userid='{$userid}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}


function getAdmin()
	{
		$conn = getConnection();
		$sql = "select * from admin";
		$result = mysqli_query($conn, $sql);
		$users =[];

		while($row = mysqli_fetch_assoc($result))
		{
			array_push($users, $row); 
		}

		return $users;
	}

function getManagement()
	{
		$conn = getConnection();
		$sql = "select * from management";
		$result = mysqli_query($conn, $sql);
		$users =[];

		while($row = mysqli_fetch_assoc($result))
		{
			array_push($users, $row); 
		}

		return $users;
	}



function updateAdmin($userId, $userDetails)
	{

		$conn = getConnection();
		$sql = "update admin set name='{$userDetails['name']}',userid='{$userDetails['userid']}',email='{$userDetails['email']}',gender='{$userDetails['gender']}',dob='{$userDetails['dob']}',address='{$userDetails['address']}' where userid='{$userId}'";
		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

function updateManagement($userid, $userDetails)
	{

		$conn = getConnection();
		$sql = "update management set name='{$userDetails['name']}',userid='{$userDetails['userid']}',email='{$userDetails['email']}',gender='{$userDetails['gender']}',dob='{$userDetails['dob']}',address='{$userDetails['address']}',status='{$userDetails['status']}' where userid='{$userid}'";
		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

function updateEmployee($userid, $userDetails)
	{

		$conn = getConnection();
		$sql = "update employee set name='{$userDetails['name']}',userid='{$userDetails['userid']}',email='{$userDetails['email']}',gender='{$userDetails['gender']}',dob='{$userDetails['dob']}',address='{$userDetails['address']}',status='{$userDetails['status']}' where userid='{$userid}'";
		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

function updatebofDirector($userid, $userDetails)
	{

		$conn = getConnection();
		$sql = "update boardofdirector set name='{$userDetails['name']}',userid='{$userDetails['userid']}',email='{$userDetails['email']}',gender='{$userDetails['gender']}',dob='{$userDetails['dob']}',address='{$userDetails['address']}',status='{$userDetails['status']}' where userid='{$userid}'";
		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}


function updateadminPass($userId, $password)
	{

		$conn = getConnection();
		$sql = "update admin set password='{$password}' where userid='{$userId}'";
		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

function searchmanagementName($name)
	{
		$conn = getConnection();
		$sql = "select * from management where name='{$name}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}



function deleteManagement($userid)
	{
		$conn = getConnection();
		$sql = "delete from management where userid='{$userid}'";
		
		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

function deleteEmployee($userid)
	{
		$conn = getConnection();
		$sql = "delete from employee where userid='{$userid}'";
		
		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

function deletebofDirector($userid)
	{
		$conn = getConnection();
		$sql = "delete from boardofdirector where userid='{$userid}'";
		
		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

?>