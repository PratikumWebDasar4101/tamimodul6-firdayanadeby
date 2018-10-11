<?php
include_once 'koneksi.php';
session_start();
$id = $_SESSION['id'];
$nama = $_SESSION['nama'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>daftarunggahan.php</title>
</head>
<body>
	<table>
		<tr>
			<th>nama</th>
			<th>judul</th>
			<th>cerita</th>
			<th>id</th>
		</tr>
		<?php 
		$query = "
				SELECT
				    `nama',
				    `judul`,
				    `cerita`,
				   	'id'
				FROM
				    `postingan`
				";
		$result= mysqli_query($conn,$query);
		while($data=mysqli_fetch_array($result)){
		?>
		<tr>
			<td align="center">
				<?php
				echo $data['nama'];
				?>
			</td>
			<td align="center">
				<?php
				echo $data['judul'];
				?>
			</td>
			<td align="center">
				<?php
				echo $data['cerita'];
				?>
			</td>
			<td align="center">
				<?php
				echo $data['id'];
				?>
			</td>
		</tr>
		<?php 
		}
		?>
	</table>
</body>
</html>