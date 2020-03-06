<?php 
	include 'koneksi.php';
	$namaBarang = $_POST['nmbrg'];
	$jumlahBarang = $_POST['jml'];
	$hargaBarang = $_POST['hrgbrg'];
	$total = $_POST['total'];
	$nonota = $_POST['nonota'];
	$tanggal = date("d/m/Y");
	$querySelect = "SELECT * FROM item where nmbrg='$namaBarang'";
	$sqlSelect = mysqli_query($koneksi, $querySelect);
	$tersedia = null;
	while($data = mysqli_fetch_array($sqlSelect)){
		$tersedia = $data['stok'];
	}
	$stokBaru = ($tersedia - $jumlahBarang);
	$queryUpdate = "UPDATE item set stok=$stokBaru where nmbrg='$namaBarang'";
	$sqlQuery = mysqli_query($koneksi, $queryUpdate);

	// var_dump($_GET);

	$queryNota = "INSERT into nota values('$nonota','$namaBarang','$jumlahBarang','$hargaBarang','$total','$tanggal')";
	$sqlNota = mysqli_query($koneksi,$queryNota);
	header("Location: index.php");
 ?>