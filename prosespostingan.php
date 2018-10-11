<?php  
session_start();
include_once 'koneksi.php';

if (isset($_POST['submit'])) {
	$judul 	= $_POST['judul'];
	$cerita = $_POST['cerita'];

	$kata = count(explode(" ", $cerita));
	if($kata <= 30){
		echo "<script>alert(\"Kata Dalam Cerita Harus Lebih Dari 30 Kata\")</script>";
		header('location: postingan.php');
	} else {
		$date_now = date("Y-m-d");

		if ($file_moved) {
			$query = 	"INSERT INTO `postingan`(
							`nama`, 
							`judul`,
							`cerita`,
							`id`
						) 
						VALUES (
							`$nama`, 
							`$judul`,
							`$cerita`,
							`". $_SESSION[`id`] ."`
						)
			$query_success = mysqli_query($conn,$query);
			if ($query_success) {
				header(`location: posting.php`);
			}else{
				echo " postingan gagal : " . mysqli_error($conn);
			}
		}
	}
}
?>