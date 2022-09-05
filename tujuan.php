<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Respon</title>
	<style type="text/css">
		body {
			background-image: url(pict/bg.jpg);
			background-size: cover;
			text-align: center;
			font-family: monospace;
			font-size: 15pt;
		}
		h1 {
			text-align: center;
			padding-top: 200px;
		}
	</style>
</head>
<body>
	<h1>Terimakasih</h1>
</body>
</html>
<?php
	$first_name = $_POST['first_name'];
	echo $first_name ." ";
	$last_name = $_POST['last_name'];
	echo $last_name ." ";
	$number = $_POST['number'];
	echo $number ." ";

	session_start();
	$_SESSION['first_name'] = "$first_name";
	$_SESSION['last_name'] = "$last_name";
	$_SESSION['number'] = "$number";
?>