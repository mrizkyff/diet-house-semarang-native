<?php 
	include 'koneksi.php';
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
  
  <!-- progress -->
  <div class="progress">
  <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
	</div>
  <!-- progress -->

  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <a href="#"><img src="asset/img/LOGO.png" width="120px;" alt=""></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	    	<li class="nav-item">
	    		<a href="" class="text-dark nav-link">     </a>
	    	</li>
	      <li class="nav-item active">
	        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <!-- <li class="nav-item dropdown">
		    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Product</a>
		    <div class="dropdown-menu">
		      <a class="dropdown-item" href="#">Ala Carte</a>
		      <a class="dropdown-item" href="page/muscleBuilding.php">Muscle Building</a>
		      <a class="dropdown-item" href="#">Pregnancy</a>
		      <a class="dropdown-item" href="#">Snack and Drink</a>
		      <a class="dropdown-item" href="#">Special Needs</a>
		      <a class="dropdown-item" href="#">&nbsp - Cancer</a>
		      <a class="dropdown-item" href="#">&nbsp - Diabetes</a>
		      <a class="dropdown-item" href="#">&nbsp - Jantung</a>
		      <a class="dropdown-item" href="#">&nbsp - Stroke</a>
		      <a class="dropdown-item" href="#">Weight Loss</a>
		    </div>
		  </li> -->
	      <!-- <li class="nav-item dropdown">
		    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Promotion</a>
		    <div class="dropdown-menu">
		      <a class="dropdown-item" href="page/weeklyDeals.php">Weekly Deals</a>
		      
		      <a class="dropdown-item" href="page/event.php">Event</a>
		    </div>
		  </li> -->
	      <!-- <li class="nav-item">
	        <a class="nav-link" href="page/caraPesan.php">Cara Pesan</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#" data-toggle="modal" data-target="#contactUS">Contact US</a>
	      </li> -->
		<li class="nav-item">
	        <a class="nav-link" href="page/admin.php">Daftar Barang</a>
	      </li>
	      <li class="nav-item">
	      	<a class="nav-link" href="page/laporanPenjualan.php">Laporan Penjualan</a>
	      </li>	       
	    </ul>
	  </div>
	</nav>
  <!-- navbar -->


  <!-- awal slide gambar -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	    	<a href="page/akun.php">
	      	<img src="asset/img/slide001.png" class="d-block w-100" alt="...">	
	    	</a>
	    </div>
	    <div class="carousel-item">
	      <img src="asset/img/slide002.png" class="d-block w-100" alt="...">
	    </div>
	    <div class="carousel-item">
	      <img src="asset/img/slide003.png" class="d-block w-100" alt="...">
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
  <!-- akhir slide gambar -->
    <!-- Optional JavaScript -->

    <!-- awal jumbotron -->
    <div class="jumbotron bg-dark text-light">
    	<div class="container">
    		
	  <h1 class="display-4">DIET HOUSE SEMARANG</h1>
	  <p class="lead" style="font-size: 17px;">Diet House Semarang menyediakan pilihan menu bagi anda yang ingin memulai hidup sehat dengan beragam kategori produk yang tersedia.</p>
	  <hr class="my-4" style="border-color: white;">
	  <p style="font-size: 17px;">Kami akan membantu anda untuk menyediakan menu makanan yang sehat sesuai kebutuhan anda.
	  Liburan sudah selesai, pastikan kamu kembali sehat dengan memulai catering sehat DietHouseSemarang dan dapatkan Harga Spesial hingga 30%
	  Periode 1-30 Juni 2019
	  Syarat dan ketentuan berlaku.
	  <br>
	  <br>
	  DietHouseSemarang menjadikan beberapa kategori Diet sesuai dengan keperluan pelanggan yaitu: <a href="page/specialNeeds.php">Special Needs</a>, <a href="page/alaCarte.php">AlaCarte</a>,<a href="page/muscleBuilding.php">Muscle Building</a>, <a href="page/pregnancy.php">Pregnancy</a>, <a href="page/snack.php">Snack and Drink</a> dan <a href="page/weightLoss.php">Weight Loss</a>.
		<br>
		<br>
	  Berbagai promosi dan diskon menarik selalu tersedia setiap periode pada setiap bulan. Menu-menu tersebut bisa dipesan secara berlangganan, namun sebagian juga bisa dipesan secara Ala Carte.
	  <br>
	  <br> 
	  <center>
	  	<!-- <button class="btn btn-danger" style="padding: 10px;">LANGGANAN SEKARANG</button> -->
	  	<a href="page/akun.php" class="btn btn-danger" style="padding: 10px;">LANGGANAN SEKARANG</a>
	  </center>
	  <br>
	  </p>
	</div>

    	</div>
    <!-- akhir jumbotron -->

    <!-- awal container -->
   	<div class="jumbotron jumbotron-fluid bg-secondary text-light" style="margin-top: -100px;">
	  <div class="container">
	    <h3>Telah Terbukti</h3>
	    <h3>Membantu Pelanggan Untuk:</h3>
	    <br>
	    <br>
	    <center>
	    	<!-- KEUNGGULAN -->
	    	<div class="container">
	    		
	    	<div class="row">
	    		<div class="col-sm-4">
	    			<img src="asset/img/tambah.png" width="100px" alt="">
	    		</div>
	    		<div class="col-sm-4">
	    			<img src="asset/img/special.png" width="100px" alt="">
	    		</div>
	    		<div class="col-sm-4">
	    			<img src="asset/img/kurang.png" width="100px" alt="">
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-sm-4">
	    			<p class="text-center" style="font-size: 17px;">Menambah berat badan</p>
	    		</div>
	    		<div class="col-sm-4">
	    			<p class="text-center" style="font-size: 17px;">Menangani kasus kebutuhan khusus</p>
	    		</div>
	    		<div class="col-sm-4">
	    			<p class="text-center" style="font-size: 17px;">Mengurangi berat badan</p>
	    	</div>
	    	</div>
		<!-- AKHIR KEUNGGULAN -->


		<br><br>
	  <hr class="my-4" style="border-color: white;">
		<!-- THUMBNAIL -->
			<h3>Health Me UP!</h3>
	  <br><br>
	    	<div class="row">
	    		<?php 
	    			$query = "SELECT * FROM item";
	    			$sql = mysqli_query($koneksi,$query);
	    			while($data = mysqli_fetch_array($sql)){
	    				?>

						<!-- thumbnail -->
						<div class="col-sm-4">
			    			<div class="card" style="width: 18rem; height: 600px;margin-top: 50px;">
							  <img src="asset/img/food/<?php echo $data['gambar'] ?>" class="card-img-top" alt="...">
							  <div class="card-body">
							    <p class="card-text text-dark text-left"><?php echo $data['deskripsi'] ?></p>
							    <p style="font-size: 14px;" class="text-dark text-left">
							    Kode Barang : <?php echo $data['kdbrg']; ?>
							    <br>
							    Nama Barang : <?php echo $data['nmbrg']; ?>
							    <br>
							    Rp. <?php echo $data['harga']; ?>
							    <br>
							    Stok : <?php echo $data['stok']; ?></p>
								<br>
								
							    <div class="card-footer">
							    <!-- <button class="btn btn-warning text-light" style="padding-right: 25px; padding-left: 25px;">Beli</button> -->
							    <!-- <button class="btn btn-warning text-light">Tambah</button> -->
							    <a href="" class="btn btn-warning text-light" style="padding-right: 25px; padding-left: 25px;width: 100%" data-toggle="modal" data-target="#modal-<?php echo $data['kdbrg'] ?>">Beli</a>
							    <!-- <a href="" class="btn btn-warning text-light">Tambah</a> -->

							    <!-- awal modal -->
							    <div class="modal text-dark" tabindex="-1" role="dialog" id="modal-<?php echo $data['kdbrg']?>">
								  <div class="modal-dialog" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								        <h5 class="modal-title">Beli <?php echo $data['nmbrg'] ?></h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body">
								      	<img src="asset/img/food/<?php echo $data['gambar'] ?>" alt="..." class="img-thumbnail">
								        <p><?php echo $data['nmbrg'] ?></p>
								        <div class="form-group row" style="margin-left: 60px;">
								        	<form action="hitungBelanja.php" method="POST">
									        	<label for="jmlBeli">Jumlah Beli : </label>
									        	<!-- <input type="text" name="jmlBeli" maxlength="10" form="form-control"> -->
									        	<input type="text" name="jmlBeli" maxlength="10">
									        	<input type="hidden" name="hargaBarang" value="<?php echo $data['harga'] ?>">
									        	<input type="hidden" name="namaBarang" value="<?php echo $data['nmbrg'] ?>">
									        	<input type="submit" name="beli" value="Beli" class="btn btn-warning text-light">
								        	</form>
								        </div>
								      </div>
								      <div class="modal-footer">
								        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
								      </div>
								    </div>
								  </div>
								</div>
							    <!-- ahir modal -->
							    </div>
							</div>
			    			</div>
			    		</div>

						<!-- ahir thumbnail -->
						
	    				<?php
	    			}
	    		 ?>
	    		<!-- <div class="col-sm-4">
	    			<div class="card" style="width: 18rem; height: 600px">
					  <img src="asset/img/food/macCheese.jpeg" class="card-img-top" alt="...">
					  <div class="card-body">
					    <p class="card-text text-dark text-left">Makaroni dengan saus keju, susu, dan krim yang tinggi protein dan kalsium. Disajikan dengn daging asap, jamur, dan brokoli yang membuat hidangan ini lezat dan sehat
					    <p style="font-size: 14px;" class="text-dark text-left">Rp. 50.000</p>
					    <br>
					     <div class="card-footer">
					    <button class="btn btn-warning text-light" style="padding-right: 25px; padding-left: 25px;">Beli</button>
					    <button class="btn btn-warning text-light" data-toggle="modal" data-target="#tambah">Tambah</button>
					    <div class="modal" tabindex="-1" role="dialog" id="tambah">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title text-dark">Konfirmasi</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div class="modal-body">
							        <p class="text-dark">Apakah anda yakin ingin menambah ke keranjang belanja?</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-primary">Tambah</button>
							        <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
							      </div>
							    </div>
							  </div>
							</div>
					    </div>
						</div>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="card" style="width: 18rem; height: 600px;">
					  <img src="asset/img/food/miAyam.jpg" class="card-img-top" alt="...">
					  <div class="card-body">
					    <p class="card-text text-dark text-left">Kenikmatan mie ayam pangsit dengan mie shirataki yang rendah kalori
					    <p style="font-size: 14px;" class="text-dark text-left">Rp. 50.000</p>
					    <br>
					    <br>
					    <br>
					    <br>
					     <div class="card-footer">
					    <button class="btn btn-warning text-light" style="padding-right: 25px; padding-left: 25px;">Beli</button>
					    <button class="btn btn-warning text-light">Tambah</button>
					    </div>
					</div>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="card" style="width: 18rem; height: 600px;">
					  <img src="asset/img/food/nugget.jpeg" class="card-img-top" alt="...">
					  <div class="card-body">
					    <p class="card-text text-dark text-left">Nugget ayam lezat ala Gorry Gourmet yang menggugah selera, disajikan dengan nasi bawang yang harum dan lezat!
					    <p style="font-size: 14px;" class="text-dark text-left">Rp. 50.000</p>
					    <br>
					    <br>
					    <br>
					    <div class="card-footer">
					    <button class="btn btn-warning text-light" style="padding-right: 25px; padding-left: 25px;">Beli</button>
					    <button class="btn btn-warning text-light">Tambah</button>
					    </div>
					</div>
	    		</div>
	    		</div> -->
	    	</div>
		<!-- AKHIR THUMBNAIL -->


		<br><br><br>
		<div class="row">
			<div class="col-sm-4">
				<img src="asset/img/food/ayam.jpg" alt="" width="300px" class="rounded-circle">
			</div>
			<div class="col-sm-4">
				<img src="asset/img/food/bbq.jpg" alt="" width="300px" class="rounded-circle">
			</div>
			<div class="col-sm-4">
				<img src="asset/img/food/ikan.jpg" alt="" width="300px" class="rounded-circle">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<p class="text-center" style="font-size: 17px;">Almond Chicken Fried Rice</p>
			</div>
			<div class="col-sm-4">
				<p class="text-center" style="font-size: 17px;">BBQ Chicken</p>
			</div>
			<div class="col-sm-4">
				<p class="text-center" style="font-size: 17px;">Ikan Bumbu Rujak</p>
			</div>
		</div>
	    </center>
    <!-- akhir container -->
	</p></div></div></div></p>
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


	<!-- awal modal contact us -->
	<div class="modal" tabindex="-1" role="dialog" id="contactUS">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">Contact US!</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body text-left">
	        <form action="">
	        	<div class="form-group">
	        		<label for="nama">Nama</label>
	        		<input type="text" placeholder="Nama" class="form-control">
	        	</div>
	        	<div class="form-group">
	        		<label for="Email">Email</label>
	        		<input type="text" placeholder="Email" class="form-control">
	        	</div>
	        	<div class="form-group">
	        		<label for="tlp">No. Telp</label>
	        		<input type="text" placeholder="No. Telp" class="form-control">
	        	</div>
	        	<div class="form-group">
	        		<label for="tujuan">Tujuan</label>
	        		<select name="" id="" class="form-control">
	        			<option value="Customer service">Customer Service</option>
	        			<option value="Customer service">Order to Events</option>
	        			<option value="Customer service">Business Partnership</option>
	        			<option value="Customer service">Special Needs</option>
	        		</select>
	        	</div>
	        	<div class="btn btn-primary">Kirim</div>
	        </form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- ahir modal contact us -->

    <!-- <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script> -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>