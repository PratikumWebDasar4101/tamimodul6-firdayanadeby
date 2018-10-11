<?php

include_once 'koneksi.php';

if (isset($_POST['submit'])) {

	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$konfirmasi = $_POST['konfirmasi'];

	$query = "INSERT INTO `mahasiswa`(
			    `nama`,
			    `username`,
			    `password`
			)
			VALUES('$nama', '$username', '$password', '')";

	$query_success = mysqli_query($conn,$query);

	if ($query_success) {
		header('location: login.php');

	}else {
		echo "gagal registrasi";

	}
}
?>