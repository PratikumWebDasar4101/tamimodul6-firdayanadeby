<?php
include_once('koneksi.php');
session_start();
$id = $_SESSION['id'];
$nama = $_SESSION['nama'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>postingan.php</title>
</head>
<body>
	<a href="unggahan.php"> semua unggahan </a>
	<a href="daftarunggahan.php">daftar unggahan </a>

	<table>
		<form>
			<tr>
				<td>Judul</td>
				<td><input type="text" name="judul"></td>
			</tr>
			<tr>
				<td>cerita</td>
				<td><textarea name="cerita" rows="20" cols="80"></textarea></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="submit"></td>
			</tr>
		</form>
	</table>
</body>
</html>