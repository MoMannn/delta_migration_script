<?php

function conm1()
{
	ob_start();
	
	$host = "ip to database";
	$username = "database username";
	$password = "database password";
	$name = "database name";
	
	$conn = mysqli_connect($host, $username, $password, $name);
	mysqli_set_charset($conn, 'utf8');
	ob_end_flush();
	return $conn;
}

function conm2()
{
	ob_start();
	
	$host = "localhost";
	$username = "database username";
	$password = "database password";
	$name = "database name";
	
	$conn = mysqli_connect($host, $username, $password, $name);
	mysqli_set_charset($conn, 'utf8');
	ob_end_flush();
	return $conn;
}

?>