<?php 
	include 'koneksi.php';
	$kode = $_GET['kode'];
	$stok = $_POST['stok'];
	$harga = $_POST['harga'];
	$deskripsi = $_POST['deskripsi'];
	$query = "UPDATE item set stok='$stok',harga='$harga',deskripsi='$deskripsi' where kdbrg='$kode'";
	$sql = mysqli_query($koneksi, $query);
	if($sql){
		header("Location: page/admin.php");
	}
 ?>