<?php
    $typ = $_REQUEST["typ"];
    $zalacznik = $_REQUEST["zalacznik"];
    $uwaga = $_REQUEST["uwaga"];
    $id = $_COOKIE["id"];

    require_once "connect.php";
	$connect = new mysqli($host, $db_user, $db_password, $db_name);
	if($connect->connect_errno!=0)
	{
		throw new Exception(mysqli_connect_errno());
	}
	else
	{
		mysqli_query($connect, "SET CHASRSET utf8");
		mysqli_query($connect, "SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
		$wynik = $connect->query("INSERT INTO wnioski (ID_pracownika, Typ_wniosku, Zalacznik, Uwaga) VALUES ('$id', '$typ', '$zalacznik', '$uwaga')");

		echo "zapisałem";

	}
?>