<?php

	$host = 'localhost';
	$dbUser = 'root';
	$dbPass = '';
	$dbName = 'project_hrms';

	function getConnection()
	{
		global $host, $dbUser, $dbPass, $dbName; 
		$connection = mysqli_connect($host, $dbUser, $dbPass, $dbName);
		return $connection;
	}
?>