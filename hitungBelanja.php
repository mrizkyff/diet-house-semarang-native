<?php 
	$jumlahBeli = $_POST['jmlBeli'];
	$hargaBarang = $_POST['hargaBarang'];
	$namaBarang = $_POST['namaBarang'];
	$total = ($jumlahBeli * $hargaBarang);

	echo $jumlahBeli;
	echo $hargaBarang;
	echo $total;
	echo $namaBarang;
	header("Location: page/checkOut.php?jumlah=$jumlahBeli&harga=$hargaBarang&total=$total&nama=$namaBarang");
 ?>