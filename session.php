<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bukti</title>
	<style type="text/css">
		body {
			background-image: url(pict/bg.jpg);
			background-size: cover;
			text-align: center;
			font-family: monospace;
			font-size: 15pt;
		}
	</style>
</head>
<body>

</body>
</html>
<?php
	session_start();
	echo $_SESSION['first_name'] ." ";
	echo $_SESSION['last_name'] ." ";
	echo $_SESSION['number'] ." ";
?>