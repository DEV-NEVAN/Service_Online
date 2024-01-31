<?php 	
include_once("koneksi.php");
$no1=1;
$no2=1;
$no3=1;
$no4=1;
$query1 = "SELECT * FROM skomputer";
$query2 = "SELECT * FROM slaptop";
$query3 = "SELECT * FROM sgadget";
$query4 = "SELECT * FROM sprinter";


$hasil1 = mysqli_query($koneksi,$query1);
$hasil2 = mysqli_query($koneksi,$query2);
$hasil3 = mysqli_query($koneksi,$query3);
$hasil4 = mysqli_query($koneksi,$query4);

$kode1='SK';
$kode2='SL';
$kode3='SG';
$kode4='SP';
 ?>

 
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>STATUS PELANGGAN</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/jquery.dataTables.min.css">

	<style>
		
		.col1
		{
			width: 100%;
			height: 150px;

		}
		.header
		{
			height: 100px;
			background-color: #333;

		}
		.header a
		{
			margin: 30px;
		}
		.col2
		{
			width: 100%;
			height: 580px;
		}
		.col3
		{
			width: 100%;
			height: 1060px;
		}
		.col4
		{
			width: 100%;
			height: 300px;
		}
		.col
		{
			border: 0px solid;
			
		}
		.about
		{
			margin-left: 250px;
			margin-top: 50px;
			margin-right: 250px;
			position: relative;
			display: flex;
			justify-content: space-between;
		}

		.about .box
		{
			position: relative;
		}
		.about .box .face
		{
			width: 300px;
			height: 200px;
			transition: 0.5s;
		}
		.about .box .face.face1
		{
			position: relative;
			background: #333;
			display: flex;
			justify-content: center;
			align-items: center;
			z-index: 1;
			transform: translateY(100px);
		}
		.about .box:hover .face.face1
		{
			transform: translateY(0px);
			background: #FF8C00;
		}
		.about .box .face.face1 .isi-about
		{
			opacity: 0.2;
			transition: 0.5s;
		}
		.about .box:hover .face.face1 .isi-about
		{
			opacity: 1;
		}
		.about .box .face.face1 .isi-about img
		{
			max-width: 100px;

		}
		.about .box .face.face1 .isi-about h3
		{
			margin: 10px 0 0;
			padding: 0;
			color: #fff;
			text-align: center;
			font-size: 1.5em;
		}
		.about .box .face.face2
		{
			position: relative;
			background: #fff;
			display: flex;
			justify-content: center;
			padding: 20px;
			box-sizing: border-box;
			box-shadow: 0 20px 50px rgba(0,0,0,0.8);
			transform: translateY(-100px);
		}
		.about .box:hover .face.face2
		{
			transform: translateY(0px);
		}
		.about .box .face.face2 .isi-about p
		{
			margin: 0;
			padding: 0;
		}
		.about .box .face.face2 .isi-about a
		{
			margin: 15px 0 0;
			display: inline-block;
			text-decoration: none;
			font-weight: 900;
			color: #333;
			padding: 5px;
			border: 1px solid #333;
		}
		.about .box .face.face2 .isi-about a:hover
		{
			background: #FF8C00;
			
		}
	</style>
</head>
<body>

	<div class="container-fluid">
		<div class="row">
			<div class="col col1">
			<!-- BAGIAN NAVBAR-->
				<nav class="navbar navbar-expand-lg" style="height: 50px; background-color: #FF8C00 ;">
				  <img src="IMG/beecom.png" width="150" height="70" style="margin-top: 5px;" alt="">
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>
				  <div class="collapse navbar-collapse nav justify-content-end" id="navbarNavDropdown">
				    <ul class="navbar-nav">
				      <li class="nav-item active">
				        <a class="nav-link " href="#" style="color: #333; font-weight: bold; margin-top: 5px;"><i class="fa fa-question-circle fa-2x" aria-hidden="true" data-toggle="tooltip" title="Bantuan"></i> <span class="sr-only">(current)</span></a>
				      </li>
				      <li style="font-size: 20px;margin-top: 8px;">|</li>
				      <li class="nav-item">
				        <a class="nav-link" href="#" style="color: #333; font-weight: bold; margin-top: 5px;"><i class="fa fa-phone-square fa-2x" aria-hidden="true" data-toggle="tooltip" title="08951111011"></i></a>
				      </li>
				      <li style="font-size: 20px;margin-top: 8px;">|</li>
				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #333;">
				          <img src="IMG/user1.png" width="50" height="35" style=" position: relative; margin-top: -2px; " class="rounded" alt="ini gambar">
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="margin-left: -100px;">
				          <a class="dropdown-item" href="form_profile.php?id=<?php echo $data['no_antrian'] ?>" style="color: #333;">My Profile</a>
				          <a class="dropdown-item" href="#" style="color: #333;">Setting Profile</a>
				          <a class="dropdown-item" href="fom_teknisi.php" style="color: #333;">teknisi</a>
				        </div>
				      </li>
				    </ul>
				  </div>
				</nav>
		<!-- TUTUP NAVBAR-->	

				<div class="header">
		<!-- BAGIAN NAV-->
					<ul class="nav justify-content-center ">
					  <li class="nav-item" >
					    <a class="nav-link" href="formutama.php" style="color: white; font-weight: bold;">HOME</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="profile.php" style="color: white; font-weight: bold;">TENTANG KAMI</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="formstatus.php" style="color: white; font-weight: bold;">STATUS</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="belanja.php" style="color: white; font-weight: bold;">BELANJA</a>
					  </li>
					</ul>
				</div>
		<!-- TUTUP NAV-->

			</div>
		</div>
		<div class="row">
			<div class="col col2">
				<ul class="nav nav-tabs mt-3">
				   <li class="nav-item">
				    <a class="nav-link " href="formstatus.php">Data Komputer</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="formstatus1.php">Data Laptop</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link active" href="formstatus2.php" style="font-weight: bold; color:#FF8C00; ">Data Android</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="formstatus3.php">Data Printer</a>
				  </li>
				</ul>
		

	
<!--bagian table gadget-->
		<div class="latar" style="padding: 10px; border: 5px solid; margin-top: 50px;">
			<h4 style="background-color: orange; border-radius: 15px 15px 15px 15px; margin-top: -37px; font-weight: bold;margin-bottom: 20px; width: 200px; padding: 10px;">Gadget Service</h4>
			<div class="ltable" style=" font-weight: bold; ">
		  	
		       <table id="example3" class="table" style="width:100%; background-color: #1282b2; text-align: center; margin-bottom: 20px;">
		        <thead style="border: 2px solid; border-color: #1282b2;">
		            <tr style="color: white;">
		            	<th>No</th>
		            	<th >No Antrian</th>
		                <th>Nama</th>
		                <th>Kerusakan</th>
		                <th>Kategori</th>
		                <th>Date</th>
		                <th>Status</th>
		                <th>Teknisi</th>
		                
		            </tr>
		        </thead>
		        <tbody>
		        	<?php while ($data = mysqli_fetch_array($hasil3)) { ?>
					<tr>
						<td scope="row"><?php echo $no3++; ?></td>
						<td><?php 	echo $kode3.$data['no_antrian']; ?></td>
						<td><?php 	echo $data['nama']; ?></td>
						<td><?php 	echo $data['kerusakan']; ?></td>
						<td><?php 	echo $data['kategori']; ?></td>
						<td><?php 	echo $data['tanggal']; ?></td>
						<td><p><?php 	echo $data['status']; ?></p></td>
						<td><?php 	echo $data['teknisi']; ?></td>
						
						
					</tr>
						<?php 	} ?>
		            
		           

		        </tbody>
		        <tfoot style="color: white;">
		        	<th>No</th>
	            	<th >No Antrian</th>
	                <th>Nama</th>
	                <th>Kerusakan</th>
	                <th>Kategori</th>
	                <th>Date</th>
	                <th>Status</th>
	                <th>Teknisi</th>
	                
		        </tfoot>

		    </table>
		</div>

		</div>		
	<!-- tutup table-->

	

			</div>
		</div>
		
		<div class="row">
			<div class="col col4">
		<!-- BAGIAN CONTENT-->
				<div class="content" style="height: 450px; background-color: #333;">
					
					<div class="row" style="padding: 60px;">
						<div class="col" ><h4 style="text-align: center;color: white; font-weight: bold;margin-top: 120px;">Solusi Tekno</h4> 
						<hr style="margin-top: -20px; background-color: #fff; width: 50px; margin-left: 95px;">
						<hr style="margin-top: -17px; background-color: #fff; width: 50px; margin-right: 95px;">
							<p style="text-align: justify; color: grey;">Solusi Tekno merupakan Solusi Teknologi Informasi yang melayani dengan Solid, Andal dan Professional dalam bidang jasa & produk Teknologi Informasi (TI) yang berlokasi di Depok. Kami terus berkembang mengikuti perkembangan dan tuntutan bisnis global. Komitmen kami adalah menyediakan jasa layanan teknologi informasi terbaik untuk klien kami dengan ditunjang oleh tenaga ahli yang profesional dan berpengalaman dibidangnya</p>
						<hr style="background-color: #fff; width: 100px;">
						</div>
						<div class="col col-3" ><h4 style="text-align: center;color: white; font-weight: bold;margin-top: 120px;">Layanan kami</h4>
						<hr style="margin-top: -20px; background-color: #fff; width: 50px; margin-left: 15px;">
						<hr style="margin-top: -17px; background-color: #fff; width: 50px; margin-right: 15px;">
							<p><ul style="margin-left: 50px; color: grey;">
									<li><p>Service Komputer</p></li>
									<li><p>Service laptop</p></li>
									<li><p>Service gadget</p></li>
									<li><p>Service printer</p></li>	
							</ul></p>
						<hr style="background-color: #fff; width: 100px;">
						</div>
						<div class="col" ><h4 style="text-align: center;color: white; font-weight: bold;margin-top: 120px;">Hubungi kami</h4>
						<hr style="margin-top: -20px; background-color: #fff; width: 50px; margin-left: 95px;">
						<hr style="margin-top: -17px; background-color: #fff; width: 50px; margin-right: 95px;">
						<p style="color: grey;"><i class="fa fa-map-marker" aria-hidden="true"></i><i style="margin-left: 12px;"></i>| Jalan : Jl. Maulana Hasanudin Rt02/02 Cipondoh Makmur</p>
						<p style="color: grey;"><i class="fa fa-phone-square" aria-hidden="true"></i><i style="margin-left: 10px;"></i>| Phone : - 0895325086780</p>
						<p style="color: grey;"><i class="fa fa-whatsapp" aria-hidden="true"></i></i><i style="margin-left: 10px;"></i>| Whastap : - 0895325086780</p>
						<p style="color: grey;"><i class="fa fa-envelope-o" aria-hidden="true"></i><i style="margin-left: 10px;"></i>| Email : Beecom@gmial.com</p>
						<hr style="background-color: #fff; width: 100px;">
						</div>
					</div>
				</div>
		<!-- TUTUP CONTENT-->
		<!-- BAGIAN FOOTER-->
				<div class="footer" style="background-color: grey; height: 50px; text-align: center; padding: 15PX;"><p>@copyright-kokoroyo</p></div>
		<!-- TUTUP FOOTER-->
				<div class="statis" style="width: 800px; height: 90px; background-color: #FF8C00; text-align: center; border-radius: 50px; margin-top: -470px; margin-left: 20%; ">					<div class="row" >
						<div class="col" style="margin-top: 10px; color: #333; font-weight: bold;"><p>pengunjung hari ini</p>
							<div class="isi" style=" width: 150px; height: 40px; background-color: white; margin-top: -10px; border-radius: 50px; margin-left: 50px;text-align: center; font-weight: bold; font-size: 27px;">
								<p style="color: #FF8C00;">100</p>
							</div>
						</div>
						<div class="col" style="margin-top: 10px; color: #333; font-weight: bold;"><p>pengunjung kemarin</p>
						<div class="isi" style=" width: 150px; height: 40px; background-color: white; margin-top: -10px; border-radius: 50px; margin-left: 50px; text-align: center; font-weight: bold; font-size: 27px;">
							<p style="color: #FF8C00;">100</p></div>
						</div>
						<div class="col" style="margin-top: 10px; color: #333; font-weight: bold;"><p>total pengunjung</p>
						<div class="isi" style=" width: 150px; height: 40px; background-color: white; margin-top: -10px; border-radius: 50px; margin-left: 50px; text-align: center; font-weight: bold; font-size: 27px;">
							<p style="color: #FF8C00;">100</p>
						</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		
		<!--bagian modal serivice-->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 		 <div class="modal-dialog" role="document">
    		<div class="modal-content" style="border-radius: 15px;">
      		<div class="modal-header" style="background-color: #FF8C00; border: 3px solid; border-color: #333; border-radius: 15px 15px 0px 0px; ">
      			<i class="fa fa-plus-circle fa-3x" style="margin-right: 20px; color: #00FF7F;"></i>
        		<h5 class="modal-title" id="exampleModalLabel" style="margin-top: 7px; font-weight: bold; color: #333; margin-right: 270px; ">Service Barang</h5>
      		</div>
      		<div class="modal-body">
			<form action="prosestbh.php" method="POST">
				  <fieldset>
				    <legend>  
				    	<h5>silahkan isi form dibawah ini </h5>
				    </legend>
				    <div class="form-group">
				      <label for="exampleInputtambah1">Nama Produk :</label>
				      <input type="text" class="form-control" name="naproduk" id="exampleInputtamabah1" aria-describedby="tambahHelp" placeholder="Masukan Nama Produk">
				      <small id="tambahHelp" class="form-text text-muted">nama produk tidak boleh kosong.</small>
				    </div>

					<div class="form-group">
				      <label for="exampleInputtambah1">Merk Produk :</label>
				      <input type="text" class="form-control" name="meproduk" id="exampleInputtambah1" aria-describedby="tambahHelp" placeholder="Masukan merk Produk">
				      <small id="tambahHelp" class="form-text text-muted">merk produk tidak boleh kosong.</small>
				    </div>
				    

				    <div class="form-group">
				      <label for="exampleInputPassword1">Harga Produk :</label>
				      <input type="text" class="form-control" name="haproduk" id="exampleInputPassword1" placeholder="Masukan Harga Produk">
				      <small id="tambahHelp" class="form-text text-muted">harga produk tidak boleh kosong.</small>
				    </div>
				    <div class="form-group">
				      <label for="exampleSelect1">Stok Produk :</label>
				       <input type="text" class="form-control" name="seproduk" id="exampleInputtambah1" aria-describedby="tambahHelp" placeholder="Masukan Stok Produk">
				    </div>
				    
				  </fieldset>
				</div>
				<div class="modal-footer" style="background-color: #FF8C00; border: 3px solid; border-color: #333; border-radius: 0px 0px 15px 15px; ">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal" style="border-radius: 10px;">Close</button>
        			<!--<input type="submit" value="Simpan" class="btn btn-secondary"style=" border-radius:10px; color: white;">-->
        			<button type="button" class="btn btn-secondary"><a href="form_profile.php">simpan</a></button>

		      	</div>
		      </form>
				
		    </div>
		  </div>
		</div>
		

				
	</div>
	
	<script src="js/jquery-3.4.1.slim.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	
	<script>
		$('#mymodal').modal('show')
	</script>

	<script>
		$(document).ready(function() {
    	$('#example1').DataTable({
    		"lengthMenu": [[5, 20, 20, -1], [5, 10, 20]]
    	});
    	$('#example2').DataTable({
    		"lengthMenu": [[5, 10, 20, -1], [5, 10, 20]]
    	});
    	$('#example3').DataTable({
    		"lengthMenu": [[5, 10, 20, -1], [5, 10, 20]]
    	});
    	$('#example4').DataTable({
    		"lengthMenu": [[5, 10, 20, -1], [5, 10, 20]]
    	});
    	
		} );
	</script>
	
</body>
</html>