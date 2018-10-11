<?php 
include_once('koneksi.php');
session_start();
$id = $_SESSION['id'];
$nama =$_SESSION['nama'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>HalamanUtama.php</title>
</head>
<body>
	<?php
	$query="SELECT 
				`Id`,
				`nama`,
				`username`,
				`password`
		 	FROM `mahasiswa` WHERE Id='$id'";
 	$result=mysqli_query($conn,$query);
 	$data=mysqli_fetch_array($result);
	?>
	<a href="logout.php">Logout</a><br>
	<a href="profile.php?id=<?php echo $id; ?>">Edit Profil</a><br>
	<a href="postingan.php?id=<?php echo $id; ?>">Edit Profil</a><br>
	<center>
	<h3>Welcome, <?php echo $nama; ?></h3>
	<table>
		<tr>
			<td>Nama</td>
			<td>
				<?php echo $data['nama']; ?>
			</td>
		</tr>
		<tr>
			<td>Username</td>
			<td>
				<?php echo $data['username']; ?>
			</td>
		</tr>
	</table>
</body>
</html>