<?php 
	include '../koneksi.php';
 ?>
 
 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <title>Diet House Semarang</title>
  </head>
  <body style="background-color: #BFBDC1; width: 80%; margin-right: auto; margin-left: auto;" class="text-center">
  

  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <a href="#"><img src="../asset/img/LOGO.png" width="120px;" alt=""></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	    	<li class="nav-item">
	    		<a href="" class="text-dark nav-link">     </a>
	    	</li>
	      <li class="nav-item active">
	        <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <!-- <li class="nav-item dropdown">
		    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Product</a>
		    <div class="dropdown-menu">
		      <a class="dropdown-item" href="#">Ala Carte</a>
		      <a class="dropdown-item" href="#">Muscle Building</a>
		      <a class="dropdown-item" href="#">Pregnancy</a>
		      <a class="dropdown-item" href="#">Snack and Drink</a>
		      <a class="dropdown-item" href="#">Special Needs</a>
		      <a class="dropdown-item" href="#">&nbsp - Cancer</a>
		      <a class="dropdown-item" href="#">&nbsp - Diabetes</a>
		      <a class="dropdown-item" href="#">&nbsp - Jantung</a>
		      <a class="dropdown-item" href="#">&nbsp - Stroke</a>
		      <a class="dropdown-item" href="#">Weight Loss</a>
		    </div>
		  </li>
	      <li class="nav-item dropdown">
		    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Promotion</a>
		    <div class="dropdown-menu">
		      <a class="dropdown-item" href="#">Weekly Deals</a>
		      <a class="dropdown-item" href="#">Event</a>
		    </div>
		  </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Cara Pesan</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#" data-toggle="modal" data-target="#contactUS">Contact US</a>
	      </li> -->
		<li class="nav-item">
	        <a class="nav-link" href="#">Daftar Barang</a>
	      </li>	       
	      <li class="nav-item">
	      	<a class="nav-link" href="laporanPenjualan.php">Laporan Penjualan</a>
	      </li>	
	    </ul>
	  </div>
	</nav>
  <!-- navbar -->

 <!-- tabel item -->
<div class="jumbotron jumbotron-fluid">
	<a href="#" class="btn btn-success" style="float: right;margin-right: 15px;" data-toggle="modal" data-target="#tambah">Tambah Data</a>
  	<table class="table table">
  		<tr>
  			<th>No.</th>
  			<th>Kode Barang</th>
  			<th>Nama Barang</th>
  			<th>Stok</th>
  			<th>Harga</th>
  			<th>Deskripsi</th>
  			<th>Gambar</th>
  			<th colspan="2">Action</th>
  		</tr>
  		<?php 
  			include '../koneksi.php';
  			$query = "SELECT * FROM item";
  			$sql = mysqli_query($koneksi, $query);
  			$nomor = 1;
  			while($data =  mysqli_fetch_array($sql)){
  				?>
  				<tr>
  					<td><?php echo $nomor ?></td>
  					<td><?php echo $data['kdbrg'] ?></td>
  					<td><?php echo $data['nmbrg'] ?></td>
  					<td><?php echo $data['stok'] ?></td>
  					<td><?php echo $data['harga'] ?></td>
  					<td><?php echo $data['deskripsi'] ?></td>
  					<td><img src="../asset/img/food/<?php echo $data['gambar'] ?>" alt="" width="150px"></td>
  					<td><a href="#" data-toggle="modal" data-target="#edit-<?php echo $data['kdbrg']?>" class="btn btn-primary" style="padding-right: 20px; padding-left: 20px;">Edit</a></td>
  					<td><a href="../hapusItem.php?kode=<?php echo $data['kdbrg'] ?>" class="btn btn-danger">Delete</a></td>

  				</tr>
  				<?php
  				$nomor++;
				?>
				<!-- awal modal edit barang -->
					<div class="modal" tabindex="-1" role="dialog" id="edit-<?php echo $data['kdbrg']?>">
					  <div class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title">Edit <?php echo $data['nmbrg'] ?></h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body text-left">
							  	<!-- edit -->
					        <!-- <div class="container text-left" style="background-color: lightgray; width: 550px; height: 800px; border-radius: 10px;"> -->
							  	<form action="../editItem.php?kode=<?php echo $data['kdbrg'] ?>" method="post">
							 	<div class="form-group">
							 		<label for="kdbrg">Kode Barang</label>
							 		<input type="text" name="kdbrg" maxlength="20" class="form-control" disabled value="<?php echo $data['kdbrg'] ?>">
							 	</div>
							 	<div class="form-group">
							 		<label for="kdbrg">Nama Barang</label>
							 		<input type="text" name="nmbrg" maxlength="20" class="form-control" disabled value="<?php echo $data['nmbrg'] ?>">
							 	</div>
							 	<div class="form-group">
							 		<label for="kdbrg">Stok</label>
							 		<input type="text" name="stok" maxlength="20" class="form-control" value="<?php echo $data['stok'] ?>">
							 	</div>
							 	<div class="form-group">
							 		<label for="harga">Harga</label>
							 		<input type="text" name="harga" maxlength="20" class="form-control" value="<?php echo $data['harga'] ?>">
							 	</div>
							 	<div class="form-group">
							 		<label for="deskripsi">Deskripsi</label>
							 		<input type="text" name="deskripsi" maxlength="20" class="form-control" value="<?php echo $data['deskripsi'] ?>">
							 	</div>
							 	<input type="submit" name="edit" value="Edit" class="btn btn-primary">
							 </form>
							  <!-- </div> -->
							  	<!-- edit -->
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					      </div>
					    </div>
					  </div>
					</div>
					<!-- ahir modal edit barang -->
				<?php
  			}
  		 ?>
  	</table>
</div>
<br><br>
 <!-- tabel item -->

 

    <!-- jumbotron footer -->
    <div class="jumbotron jumbotron-fluid bg-dark text-left text-light" style="margin-top: -100px;">
	  <div class="container">
	    <div class="row">
	    	<div class="col-sm-4">
	    		<h4>Product</h4>
	    		<a href="page/alaCarte.php">Ala Carte</a>
	    		<br>
	    		<a href="page/muscleBuilding.php">Muscle Building</a>
	    		<br>
	    		<a href="page/pregnancy.php">Pregnancy</a>
	    		<br>
	    		<a href="page/Snack.php">Snack and Drink</a>
	    		<br>
	    		<a href="page/specialNeeds.php">Special Needs</a>
	    		<br>
	    		<a href="page/weightLoss.php">Weight Loss</a>
	    	</div>
	    	<div class="col-sm-4">
	    		<h4>Help and Informations</h4>
	    		<a href="promotions.php">Promotion</a>
	    		<br>
	    		<a href="articles.php">Article</a>
	    		<br>
	    		<a href="career.php">Career</a>
	    		<br>
	    		<a href="area.php">Coverage Area</a>
	    	</div>
	    	<div class="col-sm-4">
	    		<h4>Diet House Semarang</h4>
	    		<a href="team.php">Our Team</a>
	    		<br>
	    		<a href="contact.php">Contact US!</a>
	    	</div>
	    </div>
	    <br>
		  <h4>CATERING MAKANAN SEHAT MEMBUAT HIDUP ANDA LEBIH MUDAH</h4>
		  <p style="font-size: 15px;">Dengan rutinitas yang padsat, tentu sulit menyemoatkan diri untuk berbelanja bahan-bahan berkualitas dan mengolahnya menjadi makanan sehat dan makanan enak. Untungnya saat ini sudah banyak catering makanan sehat dan bergizi dengan masakan nusantara dan mancanegeara yang isa diandalkan untuk diet sehat dan menjaga berat badan tetap ideal di tengah rutinitas yang padat. DietHouse catering online di kota Semarang adalah contohnya.
		  </p>

		  <p class="text-center">Copyright &copy DietHouseSemarang 2019 </p>

	  </div>
	</div>
    <!-- akhir jumbotron footer -->


	<!-- awal modal tambah barang -->
	<div class="modal" tabindex="-1" role="dialog" id="tambah">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">Contact US!</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body text-left">
			  	<!-- tambah -->
	        <!-- <div class="container text-left" style="background-color: lightgray; width: 550px; height: 800px; border-radius: 10px;"> -->
			  	<form action="../tambahItem.php" method="post" enctype="multipart/form-data">
			 	<div class="form-group">
			 		<label for="kdbrg">Kode Barang</label>
			 		<input type="text" name="kdbrg" maxlength="25" class="form-control">
			 	</div>
			 	<div class="form-group">
			 		<label for="kdbrg">Nama Barang</label>
			 		<input type="text" name="nmbrg" maxlength="25" class="form-control">
			 	</div>
			 	<div class="form-group">
			 		<label for="kdbrg">Stok</label>
			 		<input type="text" name="stok" maxlength="25" class="form-control">
			 	</div>
			 	<div class="form-group">
			 		<label for="harga">Harga</label>
			 		<input type="text" name="harga" maxlength="25" class="form-control">
			 	</div>
			 	<div class="form-group">
			 		<label for="deskripsi">Deskripsi</label>
			 		<input type="text" name="deskripsi" maxlength="25" class="form-control">
			 	</div>
			 	<div class="form-group">
			 		<label for="kdbrg">Gambar</label>
			 		<input type="file" name="foto">
			 	</div>
				
			 	<input type="submit" name="upload" value="Tambah Item" class="btn btn-primary">
			 </form>
			  <!-- </div> -->
			  	<!-- tambah -->
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- ahir modal tambah barang -->

    <!-- <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script> -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>