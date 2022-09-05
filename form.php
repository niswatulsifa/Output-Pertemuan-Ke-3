<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form</title>
	<style type="text/css">
		body {
			background-image: url(pict/bg.jpg);
			background-size: cover;
			text-align: center;
			font-family: monospace;
			font-size: 15pt;
			margin: ;
		}
		h2 {
			text-align: center;
			padding-top: 200px;
		}
		table {
			margin: auto;
		}
	</style>
</head>
<body>
	<h2>MY FORM</h2>
	<form action="tujuan.php" method="post">
		<table>
			<tr>
				<td>First Name</td>
				<td>:</td>
				<td><input type="text" name="first_name"\></td>
			</tr>
			<tr>
				<td>Last Name</td>
				<td>:</td>
				<td><input type="text" name="last_name"\></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="number"\></td>
			</tr>
		</table>
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>