<?php
	if(!isset($_SESSION)) {session_start();}
	if(!isset($_SESSION["logged_in"])) header("Location: index.php");
  	if($_COOKIE["uprawnienia"] == "P") header("Location: pracownik.php");
  	if($_COOKIE["uprawnienia"] == "Z") header("Location: zarzad.php");
?>