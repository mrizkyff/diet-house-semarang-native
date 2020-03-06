<?php 
	$koneksi = mysqli_connect("localhost","root","","diethousesemarang");
	$username = $_POST['username'];
	$password =$_POST['pw'];

	$query = "SELECT * FROM user where username='$username' and password='$password'";
	$sql = mysqli_query($koneksi,$query);
	$num = mysqli_num_rows($sql);
	$human = null;
	$human = mysqli_fetch_array($sql);
		$level = $human['level'];
	if($num>0){

		if($level = 'Admin'){
			header("Location: page/inputbarang.php");
		}
		else{
			header("Location: index.php");
		}
	}
	else{
		echo "login gagal";
	}
 ?>