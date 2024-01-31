<?php 	
include_once("koneksi.php");
$no=1;
$query1 = "SELECT * FROM skomputer";
$query2 = "SELECT * FROM skomputer";

$hasil1 = mysqli_query($koneksi,$query1);
$hasil2 = mysqli_query($koneksi,$query2);

$kode='SK';
 ?>

 
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DATA PELANGGAN</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="style3.css">
		
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col col-3 kolom1">
				<div class="row">
					<div class="col col-12 kolom3">
						<!--ini bagian profil-->
						<div class="card" style="width: 280px; height: 250px; border: 5px solid; text-align: center; border-radius: 10px 10px 0px 0px; border-color:#FF8C00">
						  <img src="IMG/b1.jpg" class="card-img-top" alt="..." height="125">
						  <div class="card-body">
						  	<img src="IMG/tek1.jpg" width="100" height="100" style="background-color: white; border:8px solid; border-color: white; border-radius: 50% !important; margin-top: -70px; margin-bottom: 20px; " class="rounded" alt="ini gambar">
						    <h5 class="card-title text-center" style="font-weight: bold;">Jaya setiawan</h5>
						  </div>
						</div>
						<!--tutup profil-->
					</div>
					<div class="col kolom4">
				<!--bagian nav-->
				<div class="latar" style="background-color: #FF8C00; width: 280px; height: 700px;">
				
				<nav class="navbar navbar-dark" style="background-color: #FF8C00;">
				  <a class="navbar-brand sentuh" href="teknisi.php" style="color: #333; font-weight: bold; margin-left: 20px; text-align: center;" ><i class="fa fa-user-circle-o fa-2x" style="margin-left: -100px; position: relative;" aria-hidden="true"></i><p style="margin-left: 60px; margin-top: -30px; margin-bottom: -1px;">My Profile</p></a>
				</nav>

				<nav class="navbar navbar-dark" style="background-color: #FF8C00;">
				  <a class="navbar-brand sentuh" href="#" style="color: #333; font-weight: bold; margin-left: 20px; text-align: center; "><i class="fa fa-cog fa-2x" style="margin-left: -130px; position: relative;" aria-hidden="true"></i><p style="margin-left: 60px; margin-top: -30px; margin-bottom: -1px;">Setting Profile</p></a>
				</nav>

				<nav class="navbar navbar-dark" style="background-color: #FF8C00;">
				  <a class="navbar-brand sentuh" href="#" style="color: #333; font-weight: bold; margin-left: 25px;"><i class="fa fa-print fa-2x fav" style="margin-right: 20px;"></i>Claim Nota</a>
				</nav>
				<nav class="navbar navbar-dark" style="background-color: #FF8C00;">
				  <a class="navbar-brand sentuh" href="formutama.php" style="color: #333; font-weight: bold; margin-left: 25px;"><i class="fa fa-home fa-2x fav" style="margin-right: 20px;"></i>Beranda</a>
				</nav>

				
				</div>
				<!--tutup nav-->
					</div>
				</div>
			</div>
			
			<div class="col col-9 kolom2" style="margin-left: -15px;">
				 <div class="latarinfo" style="margin-left: -30px; margin-right: -15px; background-color: white; border-radius: 15px 15px 15px 15px; border: 5px solid; border-color: #FF8C00;" >
		      	<div class="info" style="margin-top: -2px; background-color: #FF8C00; border-radius: 10px 10px 0px 0px;">
		      		<div class="tulis" >
		      			<h4 style="font-weight: bold; color: #333;">INFORMASI DATA PELANGGAN</h4>
		      		</div>
		      	</div>

				
      	<!--bagian tambah table-->
		<div class="ltable" style=" font-weight: bold; padding: 5px;">
		  	

		       <table id="example1" class="table" style="width:100%; background-color: #1282b2; text-align: center; margin-bottom: 20px;">
		        <thead style="border: 2px solid; border-color: #1282b2;">
		            <tr style="color: white;">
		            	
		            	<th >Nota</th>
		                <th>Nama</th>
		                <th>Alamat</th>
		                <th>Telpon</th>
		                <th>Tanggal</th>
		                <th>Status</th>
		                <th>Teknisi</th>
		                <th>Aksi</th>
		 
		            </tr>
		        </thead>
		        <tbody>
		        	<?php while ($data = mysqli_fetch_array($hasil1)) { ?>
					<tr>
						<!--<td scope="row"><?php echo $no++; ?></td>-->
						<td scope="row"> <?php 	echo $kode.$data['no_antrian']; ?></td>
						<td><?php 	echo $data['nama']; ?></td>
						<td><?php 	echo $data['alamat']; ?></td>
						<td><?php 	echo $data['telpon']; ?></td>
						<td><?php 	echo $data['tanggal']; ?></td>
						<td ><?php 	echo $data['status']; ?></td>
						<td><?php 	echo $data['teknisi']; ?></td>
						
						<td>
							<div class="submit">
								<a href="formedit.php?id=<?php echo $data['no_antrian'] ?>" ><i class="fa fa-pencil-square" style="background-color: orange; width: 30px; height: 30px; text-align: center; color: white;padding: 7px; border-radius: 10px; " ></i></a>
								|
							<a href="proseshapus.php?id=<?php echo $data['no_antrian'] ?>"><i class="fa fa-trash " style="background-color: red; width: 30px; height: 30px; text-align: center; color: white;padding: 7px; border-radius: 10px;"></i></a>


							</div>
						</td>
					</tr>
						<?php 	} ?>
		            
		           

		        </tbody>
		        <tfoot style="color: white;">
		        	
		            	<th >Nota</th>
		                <th>Nama</th>
		                <th>Alamat</th>
		                <th>Telpon</th>
		                <th>Kategori</th>
		                <th>Status</th>
		                <th>Teknisi</th>
		                <th>Aksi</th>
		                

		        </tfoot>

		    </table>
		</div>			


	<!-- tutup table-->
		

		<div class="info" style="background-color:#FF8C00; border-radius: 0px 0px 0px 0px; ">
		      		<div class="tulis">
		      			<h4 style="font-weight: bold; color: #333;">DATA TERANSAKSI PELANGGAN</h4>
		      		</div>
		      	</div>
	<!--bagian tambah table-->
		<div class="ltable" style=" font-weight: bold; padding: 5px;">
		  	

		       <table id="example2" class="table" style="width:100%; background-color: #1282b2; text-align: center; margin-bottom: 20px;">
		        <thead style="border: 2px solid; border-color: #1282b2;">
		            <tr style="color: white;">
		            	
		            	<th >Nota</th>
		                <th>Nama Barang</th>
		                <th>Kerusakan</th>
		                <th>Tambahan</th>
		                <th>Kategori</th>
		                <th>Total Biaya</th>
		                <th>Pembayaran</th>
		                <th>Status Pembayaran</th>
		                <th>Aksi</th>
		                
		 
		            </tr>
		        </thead>
		        <tbody>
		        	<?php while ($data = mysqli_fetch_array($hasil2)) { ?>
					<tr>
						<!--<td scope="row"><?php echo $no++; ?></td>-->
						<td scope="row"> <?php 	echo $kode.$data['no_antrian']; ?></td>
						<td><?php 	echo $data['nama_barang']; ?></td>
						<td><?php 	echo $data['kerusakan']; ?></td>
						<td><?php 	echo $data['tambahan']; ?></td>
						<td><?php 	echo $data['kategori']; ?></td>
						<td><?php 	echo $data['totalh']; ?></td>
						<td><?php 	echo $data['pembayaran']; ?></td>
						<td><?php 	echo $data['statusp']; ?></td>

						
						<td>
							<div class="submit">
								<a href="formedit.php?id=<?php echo $data['no_antrian'] ?>" ><i class="fa fa-pencil-square" style="background-color: orange; width: 30px; height: 30px; text-align: center; color: white;padding: 7px; border-radius: 10px; " ></i></a>
								|
							<a href="proseshapus.php?id=<?php echo $data['no_antrian'] ?>"><i class="fa fa-trash " style="background-color: red; width: 30px; height: 30px; text-align: center; color: white;padding: 7px; border-radius: 10px;"></i></a>


							</div>
						</td>
					</tr>
						<?php 	} ?>
		            
		           

		        </tbody>
		        <tfoot style="color: white;">
		        	
		            	
		            	<th >Nota</th>
		                <th>Nama Barang</th>
		                <th>Kerusakan</th>
		                <th>Tambahan</th>
		                <th>Kategori</th>
		                <th>Total Biaya</th>
		                <th>Pembayaran</th>
		                <th>Status Pembayaran</th>
		                <th>Aksi</th>
		                

		        </tfoot>

		    </table>
		</div>			


	<!-- tutup table-->

		<!--bagian modal tambah-->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 		 <div class="modal-dialog" role="document">
    		<div class="modal-content">
      		<div class="modal-header">
      			<i class="fa fa-plus-circle fa-3x" style="margin-right: 20px; color: #00FF7F;"></i>
        		<h5 class="modal-title" id="exampleModalLabel" style="margin-top: 7px;">Tambah Barang</h5>
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          		<span aria-hidden="true">&times;</span>
       		 </button>
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
				<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal" style="border-radius: 10px;">Close</button>
        			<input type="submit" value="Simpan" style="background-color: #1282b2; height: 35px; border-radius:10px; color: white; font-size: 15px;">

		      	</div>
		      </form>
				
		    </div>
		  </div>
		</div>
							
		
		
		<!--bagian notif berhasil modal-->
		<?php if (isset($_SESSION['modal'])) : ?>
		<div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="width: 270px; margin-left: 600px; margin-top: 180px;">
 		 <div class="modal-dialog" role="document">
    		<div class="modal-content">
      		<div class="modal-header" style="background-color: #FF8C00;">
        		<h5 class="modal-title" id="exampleModalLabel" style="margin-left: 30px; ">
        			<strong><?php echo $_SESSION['modal']; ?></strong></h5>
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          		<span aria-hidden="true">&times;</span>
       		 </button>
      		</div>
      		<div class="modal-body">

      			
      			<center><i class="fa fa-check-circle fa-4x" style="color: green;"></i></center>
			</div>
      		
		    </div>
		  </div>
		</div>
		<?php 
		unset($_SESSION['modal']);
		endif
		 ?>
		 <!--tutup notif berhasil-->

		<!--bagian notif gagal modal hapus-->
		<?php if (isset($_SESSION['modalg'])) : ?>
		<div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="width: 270px; margin-left: 600px; margin-top: 180px;">
 		 <div class="modal-dialog" role="document">
    		<div class="modal-content">
      		<div class="modal-header">
        		<h5 class="modal-title" id="exampleModalLabel" style="margin-left: 30px; ">
        			<strong><?php echo $_SESSION['modalg']; ?></strong></h5>
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          		<span aria-hidden="true">&times;</span>
       		 </button>
      		</div>
      		<div class="modal-body">
      			<center><i class="fa fa-times-circle fa-4x" style="color: red;"></i></center>
			</div>
      		
		    </div>
		  </div>
		</div>
		<?php 
		unset($_SESSION['modalg']);
		endif
		 ?>
		<!-- tutup notif gagal-->			


			</div>
		</div>
	</div>

	<script src="js/jquery-3.4.1.slim.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/icon.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>

	<script>
		$('#mymodal').modal('show')
	</script>

	<script>
		$(document).ready(function() {
    	$('#example1').DataTable();
    	$('#example2').DataTable();
		} );
	</script>

</body>
</html>