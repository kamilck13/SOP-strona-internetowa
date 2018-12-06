<?php
	if(!isset($_SESSION)) {session_start();}
	if(isset($_SESSION["logged_in"])) header("Location: domek.php");

//otwórz połączenie
	require_once "connect.php";
	$connect = new mysqli($host, $db_user, $db_password, $db_name);
	if($connect->connect_errno!=0)
	{
		throw new Exception(mysqli_connect_errno());
	}
	else
	{
	if(isset($_GET["strona"])) include ($_GET["strona"]);
	else
	include 'start.php';
	}


?>

