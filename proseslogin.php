<?php

include_once 'koneksi.php';

session_start();

if (isset($_POST['submit'])) {

	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$query = "SELECT `Id`, `nama`, `username`, `password`, `upload foto` FROM `mahasiswa` WHERE `username` = '$username' AND `password`='$password'";
			
	$query_success = mysqli_query($conn,$query) or die(mysqli_error($conn));
	$result = mysqli_num_rows($query_success);
	if ($result>0) {
		while ($data = mysqli_fetch_array($query_success)) {
			$_SESSION ['id']=$data['Id'];
			$_SESSION ['nama']=$data['nama'];
			header('location: halamanutama.php');
		}
	}else {
		echo "string";
		$_SESSION['prosesregistrasi'] = "username atau password anda belum terdaftar atau salah";
		// header('location: login.php');
	}
}
?>