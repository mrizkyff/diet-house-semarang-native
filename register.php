<?php 
	include 'koneksi.php';
	
	if(isset($_POST['register'])){
		$nama = $_POST['name'];
		$username = $_POST['username'];
		$password = $_POST['pw'];
		$email = $_POST['email'];
		$hp = $_POST['telp'];
		$level = 'User';
		$query = "INSERT INTO user values('','$nama','$username','$password','$email','$telp','$level')";
		$sql = mysqli_query($koneksi, $query);
		if($sql){
			header("Location: page/akun.php?pesan=sukses");
		}	
	}
 ?>