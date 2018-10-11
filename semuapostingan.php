<?php
include_once 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>semuapostingan.php</title>
</head>
<body>
	<table border="1" align="center">
		<tr>
			<th>nama</th>
			<th>judul</th>
			<th>cerita</th>
			<th>ID</th>
			<th>foto</th>
		</tr>
		<?php 
		$query = "
				SELECT
				   'nama',
				   'judul',
				   'cerita',
				   'id',
				   'foto'
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
			<td align="center">
				<?php
				echo "<img src='terkirim/".$data['foto']."' width='200'>";
				?>
			</td>
		</tr>
		<?php 
		}
		?>
	</table>
</body>
</html>