<!DOCTYPE html>		
<html>
<head>
	<title>registrasi.php</title>
</head>
<body>
	<table>
		<form action="prosesregistrasi.php" method="POST">
			<tr>
				<td> nama </td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td> username </td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td> password </td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td> konfirmasi </td>
				<td><input type="password" name="konfirmasi"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="submit"></td>
			</tr>
		</form>
	</table>
</body>
</html>