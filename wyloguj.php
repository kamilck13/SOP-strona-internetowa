<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title>Szkoła</title>

<link rel="stylesheet" href="styl.css" type="text/css" />



</head>

<body>

<div id="gora">


<?php

echo "wylogowano<br />";
session_destroy();
header("Location: index.php");


?>
	</div>

</body>
</html>