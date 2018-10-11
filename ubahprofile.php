<?php  
include_once 'koneksi.php';

if (isset($_POST['submit'])) {
	$id = $_POST['id'];
	$query = "SELECT `password` FROM `mahasiswa`";
	$result = mysqli_query($conn,$query);
	$data = mysqli_fetch_array($result);

	$nama 					= $_POST['nama'];
	$username 				= $_POST['username'];
	$password 				= empty($_POST['password']) ? $data['password'] : $_POST['password'];
	$konfirmasi				= $_POST['konfirmasi'];
	$tgl_lahir 				= $_POST['tgl_lahir'];
	$jenis_kelamin 			= $_POST['jenis_kelamin'];
?>