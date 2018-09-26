<?php
	session_start();

	$dsn = 'mysql:host=localhost; dbname=finalproject';
	$user = 'root';
	$pass = '';
	
	try
	{
		$db = new PDO($dsn, $user, $pass);
	}
	catch (PDOException$e)
	{
		$error_message = $e->getMessage();
		include('database_error.php');
		exit();
	}
?>