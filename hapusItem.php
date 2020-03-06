<?php 
	include 'koneksi.php';
	$kode = $_GET['kode'];

	$query = "DELETE from item where kdbrg='$kode'";
	$sql = mysqli_query($koneksi, $query);
	if($sql){
		header("Location: page/admin.php");
	}
 ?>