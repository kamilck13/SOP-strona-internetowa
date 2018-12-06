	<?php
	if (isset($_POST['username'])&&isset($_POST['password']))
	{
		$a=$_POST['username'];
		$b=$_POST['password'];
		
		
	//otwórz połączenie
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
		$wynik = $connect->query("SELECT id from pracownicy where Login='$a' and Haslo='$b'");
		$poem = $wynik->fetch_assoc();
		$id = $poem["id"];
		
	if($id > 0) {
		
		setcookie("id","$id");
		$_SESSION["logged_in"] = 1;

		//pobieranie uprawnień
		mysqli_query($connect, "SET CHASRSET utf8");
		mysqli_query($connect, "SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
		$wynik = $connect->query("SELECT Uprawnienia from pracownicy where Login='$a' and Haslo='$b'");
		$poem = $wynik->fetch_assoc();
		$Uprawnienia = $poem["Uprawnienia"];
		setcookie("uprawnienia","$Uprawnienia");

		include 'domek.php';

		
	}
	else
		{
			echo "błędne dane<br />";
			echo '<a href="index.php?strona=start.php">powrót do Logowania</a>';
		}
	}
	}
	else
	{
		echo "<br />nie uzupełniłeś wszystkich danych<br />";
		echo '<a href="index.php?strona=start.php">powrót do Logowania</a>';
	}
	

	?>