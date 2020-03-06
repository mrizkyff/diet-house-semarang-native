<?php 
	include 'koneksi.php';
	$kdbrg = $_POST['kdbrg'];
	$nmbrg = $_POST['nmbrg'];
	$stok = $_POST['stok'];
	$harga = $_POST['harga'];
	$deskripsi = $_POST['deskripsi'];

	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];
	$fotobaru = date('dmYHis').$foto;
	$path = "asset/img/food/".$fotobaru;

	if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
	  // Proses simpan ke Database
	  $query = "INSERT INTO item VALUES('','$kdbrg','$nmbrg','$stok','$harga','$deskripsi','$fotobaru')";
	  $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
	  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
	    // Jika Sukses, Lakukan :
	    header("location: page/admin.php"); // Redirect ke halaman index.php
	  }else{
	    // Jika Gagal, Lakukan :
	    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
	    echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
	  }
	}else{
	  // Jika gambar gagal diupload, Lakukan :
	  echo "Maaf, Gambar gagal untuk diupload.";
	  echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
	}
 ?>