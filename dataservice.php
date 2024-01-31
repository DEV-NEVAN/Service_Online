<?php 	
include_once("koneksi.php");
$no=1;
$query1 = "SELECT * FROM skomputer WHERE nama='andiysandoro'";

$hasil1 = mysqli_query($koneksi,$query1);
$hasil2 = mysqli_query($koneksi,$query1);

$nama = mysqli_fetch_assoc($hasil2);


$kode='SK';
 ?>

 
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" ng-app="">
<head>
	<meta charset="UTF-8">
	<title>DATA SERVICE</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="style3.css">
	<link rel="stylesheet" href="style4.css">
		
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col col-3 kolom1">
				<div class="row">
					<div class="col col-12 kolom3">
						<!--ini bagian profil-->
						<div class="card" style="width: 20rem; height: 250px; border: 5px solid; border-radius: 10px 10px 0px 0px; border-color:#FF8C00;">
						  <img src="IMG/b1.jpg" class="card-img-top" alt="..." height="125">
						  <div class="card-body">
						  	<img src="IMG/user1.png" width="140" height="100" style=" margin-left: 65px; margin-top: -70px; margin-bottom: 20px; " class="rounded" alt="ini gambar">

						    <h5 class="card-title text-center" style="font-weight: bold;"><?php echo $nama['nama'];  ?></h5>
						  </div>
						</div>
						<!--tutup profil-->
					</div>
					<div class="col kolom4">
				<!--bagian nav-->
				<div class="latar" style="background-color: #FF8C00;">
				<nav class="navbar navbar-dark" style="background-color: #FF8C00;">
				  <a class="navbar-brand sentuh" href="form_profile.php" style="color: #333; font-weight: bold; margin-left: 20px; text-align: center;" ><i class="fa fa-user-circle-o fa-2x" style="margin-left: -100px; position: relative;" aria-hidden="true"></i><p style="margin-left: 60px; margin-top: -30px; margin-bottom: -1px;">My Profile</p></a>
				</nav>

				<nav class="navbar navbar-dark" style="background-color: #FF8C00;">
				  <a class="navbar-brand sentuh" href="datamaster.php" style="color: #333; font-weight: bold; margin-left: 20px; text-align: center; "><i class="fa fa-cog fa-2x" style="margin-left: -130px; position: relative;" aria-hidden="true"></i><p style="margin-left: 60px; margin-top: -30px; margin-bottom: -1px;">Setting Profile</p></a>
				</nav>

				<nav class="navbar navbar-dark" style="background-color: #FF8C00;">
				  <a class="navbar-brand sentuh" href="datatransaksi.php" style="color: #333; font-weight: bold; margin-left: 25px;"><i class="fa fa-print fa-2x fav" style="margin-right: 20px;"></i>Claim Nota</a>
				</nav>
				<nav class="navbar navbar-dark" style="background-color: #FF8C00;">
				  <a class="navbar-brand sentuh" href="formutama.php" style="color: #333; font-weight: bold; margin-left: 25px;"><i class="fa fa-home fa-2x fav" style="margin-right: 20px;"></i>Beranda</a>
				</nav>

				</div>
				<!--tutup nav-->
					</div>
				</div>
			</div>
			
			<div class="col col-9 kolom2">
				<nav aria-label="breadcrumb" style="margin-bottom: -40px; position: relative;" >
	  			<ol class="breadcrumb" style="background-color: #FF8C00; font-weight: bold;" >
	    		<li class="breadcrumb-item" ><a href="form_profile.php" style="color: white;">My Profile</a></li>
	    		<li class="breadcrumb-item active" aria-current="page">Data Service</li>
	  			</ol>
				</nav>
			 <div class="latarinfo" style="background-image: url(IMG/sk.png); margin-top:45px;">
			 	
		<!---->

		<form style="padding: 0px;  " >
				<?php 	while ($data=mysqli_fetch_array($hasil1)) { ?>
				  <fieldset>
				    <table style="margin-top: -110px; margin-left: 10%; margin-bottom: 50px;">
					<div class="form-group row">
				   	<tr>
				      <td scope="row" style="font-weight: bold; color: #333;">Nota</td>
				      <td style="font-weight: bold; color: #333;">:</td>
				      <td><input type="text" class="form-control" name="namap" value="<?php echo $kode.$data['no_antrian'] ?>" style="width: 250px; border-color: #FF8C00;"></td>
				      <td style="width: 100px;"></td>
				      <td style=" font-weight: bold; color: #333;">Status</td>
				    	<td style="font-weight: bold; color: #333;">:</td>
				      <td><input type="text" class="form-control"  style="width: 250px; border-color: #FF8C00;" name="statusp" value="<?php echo $data['status'] ?>"></td>
				  </tr>
				    </div>
				    <tr style="height: 15px;">
				    	<td></td>
				    </tr>
					

				   <div class="form-group row">
				   	<tr>
				      <td style=" font-weight: bold; color: #333;">Nama</td>
				      <td style="font-weight: bold; color: #333;">:</td>
				      <td><input type="text" class="form-control" name="namap" value="<?php echo $data['nama'] ?>" style="border-color: #FF8C00; width: 250px;"></td>
				      <td style="width: 100px;"></td>
				      <td style=" font-weight: bold; color: #333;">Teknisi</td>
				   		<td style="font-weight: bold; color: #333;">:</td>
				      	<td><input type="text" class="form-control"  style="width: 250px; border-bottom-right-radius: 10px; border-color: #FF8C00;" name="datep" value="<?php echo $data['teknisi'] ?>" ></td>
				      	<td style="background-color: #FF8C00; margin-left:-36px; margin-top: 1px; border-radius: 0px 10px 10px 0px; width: 40px; height: 35px; text-align: center;position: absolute; "><i class="fa fa-info-circle fa-2x"  aria-hidden="true" data-toggle="modal" data-target="#exampleModal" style="margin-top: 2px;"></i></td>
				  	</tr>
				    </div>
				    <tr style="height: 15px;">
				    	<td></td>
				    </tr>
					
					<div class="form-group row">
						<tr>
						<td style=" font-weight: bold; color: #333;">Alamat</td>
						<td style="font-weight: bold; color: #333;">:</td>
		      			<td><textarea  class="form-control"  style="border-color: #FF8C00; width: 250px;" id="exampleTextarea" name="alamatp" value="<?php echo $data['alamat'] ?>" rows="2"><?php echo $data['alamat'] ?></textarea></td>	
		      			<td style="width: 100px;"></td>
				      	<td style="margin-right: 20px; font-weight: bold; color: #333;">Total Biaya</td>
				      	<td style="font-weight: bold; color: #333;">:</td>
				      	<td><input type="text" class="form-control" name="namap" value="<?php echo $data['totalh'] ?>" style="width: 250px; border-color: #FF8C00;"></td>
						</tr>
		    		</div>
					<tr style="height: 15px;">
				    	<td></td>
				    </tr>
					

		    		<div class="form-group row">
				    	<tr>
				    		<td style=" font-weight: bold; color: #333;">Telpon</td>
				    		<td style="font-weight: bold; color: #333;">:</td>
				    		<td><input type="text" class="form-control"  style="border-color: #FF8C00; width: 250px;" name="telponp" value="<?php echo $data['telpon'] ?>"></td>
				    		<td style="width: 100px;"></td>

				    	<td style=" font-weight: bold; color: #333;">Pembayaran</td>
			    	 	<td style="font-weight: bold; color: #333;">:</td>
				   		<td><input type="text"  class="form-control" name="pembayaranp" value="<?php echo $data['pembayaran'] ?>" style="border-color: #FF8C00; width: 250px;"></td>

				    	</tr>
				    </div>
				    <tr style="height: 15px;">
				    	<td></td>
				    </tr>

				    <div class="form-group row">
				    	<tr>
				    		<td style=" font-weight: bold; color: #333;">Barang</td>
				    		<td style="font-weight: bold; color: #333;">:</td>
				    		<td> <input type="text" class="form-control"  style="border-color: #FF8C00; width: 250px;" name="telponp" value="<?php echo $data['nama_barang'] ?>"></td>
				    		<td></td>
			      			<td></td>
			      			<td></td>
			      			<td>
			      				<button type="button" class="btn btn-primary" style="width: 320px; height: 40px; margin-left: -74px;" ><a href="pembayaran.php?id=<?php echo $data['no_antrian'] ?>" style="color: white; text-decoration: none;"><i class="fa fa-handshake-o fa-2x" aria-hidden="true" style="margin-left: -60px; position: absolute; margin-top: -3px;"></i><p style="margin-right: -60px; margin-bottom: -5px; margin-top: -2px;"> Pilih Pembayaran</p></a></button>	
		      				</td>
				    	</tr>
		    		</div>
					
					<tr style="height: 15px;">
				    	<td></td>
				    </tr>

				    <div class="form-group row">
				    	<tr>
				    		<td style=" font-weight: bold; color: #333;">Kerusakan</td>
				    		<td style="font-weight: bold; color: #333;">:</td>
				    		<td><textarea  class="form-control"  style="width: 250px; border-color: #FF8C00;" id="exampleTextarea" name="kerusakanp" value="<?php echo $data['alamat'] ?>" rows="2"><?php echo $data['kerusakan'] ?></textarea></td>
				    		<td></td>
			      			<td></td>
			      			<td></td>
			      			<td>
			      				<button type="button" class="btn btn-primary" style="width: 320px; height: 40px; margin-left: -74px;"><a href="datatransaksi.php" style="color: white; text-decoration: none;"><i class="fa fa-print fa-2x fav" style="margin-left: -50px; position: absolute; margin-top: -3px;"></i><p style="margin-right: -30px; margin-bottom: -5px; margin-top: -2px;">Claim Nota</p></a></button>
		      				
			       			</td>
				    	</tr>
		    		</div>
					<tr style="height: 15px;">
				    	<td></td>
				    </tr>
					
					<div class="form-group row">
				    	<tr>
				    		<td style=" font-weight: bold; color: #333;">Tambahan</td>
				    		<td style="font-weight: bold; color: #333;">:</td>
				    		<td><textarea  class="form-control"  style="width: 250px; border-color: #FF8C00;" id="exampleTextarea" name="kerusakanp" value="<?php echo $data['tambahan'] ?>" rows="2"><?php echo $data['tambahan'] ?></textarea></td>
				    	</tr>
		    		</div>
					<tr style="height: 15px;">
				    	<td></td>
				    </tr>
					
				    
				    <div class="form-group row">
				    	<tr>
				    		<td style=" font-weight: bold; color: #333;">Kategori</td>
				    		<td style="font-weight: bold; color: #333;">:</td>
				    		<td><input type="text" class="form-control"  style="width: 250px; border-color: #FF8C00;" name="kategorip" value="<?php echo $data['kategori'] ?>"></td>		
				    	</tr>
				    </div>
					<tr style="height: 15px;">
				    	<td></td>
				    </tr>
					
				   <div class="form-group row">
				   	<tr>
				   		<td style=" font-weight: bold; color: #333;">Date</td>
				   		<td style="font-weight: bold; color: #333;">:</td>
				      	<td><input type="text" class="form-control"  style="width: 250px; border-color: #FF8C00;" name="datep" value="<?php echo $data['tanggal'] ?>"></td>
				   	</tr>
				    </div>
				    <tr style="height: 10px;">
				    	<td></td>
				    </tr>


				</table>
				</fieldset>
			</form>

			

				<?php } ?>
		<!---->
				

		
		<!--bagian notif berhasil modal-->
		<?php if (isset($_SESSION['modal'])) : ?>
		<div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="width: 270px; margin-left: 600px; margin-top: 180px;">
 		 <div class="modal-dialog" role="document">
    		<div class="modal-content">
      		<div class="modal-header" style="background-color: #FF8C00; ">
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
		
		<!--bagian notif gagal modal hapus-->
		
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="  ">
 		 <div class="modal-dialog" role="document">
    		<div class="modal-content">
      		<div class="modal-header" style="background-color:  #FF8C00;">
        		<h5 class="modal-title" id="exampleModalLabel" >
        			<strong>My Teknisi</strong></h5>
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          		<span aria-hidden="true">&times;</span>
       		 </button>
      		</div>
      		<div class="modal-body">
      			<div class="card" style=" background-image: url(IMG/sk.png); height: 450px; margin-bottom: 15px; margin-top: -5px;">
						  <img src="IMG/b1.jpg" class="card-img-top" alt="..." height="240">
						  <div class="card-body" style="text-align: center;">
						  	<img src="IMG/tek1.jpg" width="200" height="200" style="background-color: white; border:8px solid; border-color: white; border-radius: 50% !important; margin-top: -120px; margin-bottom: 20px; " class="rounded" alt="ini gambar">
						    <h5 class="card-title text-center">Nevan Fauzi</h5>
						    <p style="color: grey; m"><i class="fa fa-whatsapp" aria-hidden="true"></i></i><i style="margin-left: 10px;"></i>| Whastap : 0895325086780 </p>
						  </div>
						</div>

			</div>
			<div class="modal-footer" style="margin-top: -20px; height: 50px; background-color: #FF8C00; "></div>
      		
		    </div>
		  </div>
		</div>
		<!-- tutup notif gagal-->			


			</div>
		</div>
	</div>


	<div class="modal fade" id="mymodal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="width: 600px; margin-left: 400px; margin-top: 50px; overflow-y: hidden; margin-top: -20px;">
 		 <div class="modal-dialog" role="document">
    		<div class="modal-content" style="width: 750px;">
      		<div class="modal-header" >
        		<h5 class="modal-title" id="exampleModalLabel" style="margin-left: 0px; ">
        			<strong> Silahkan Pilih Pembyaran Anda</strong></h5>
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          		<span aria-hidden="true">&times;</span>
       		 </button>
      		</div>
      		<div class="modal-body">
    
			</div>
      		
		    </div>
		  </div>
		</div>							
		

	<script src="js/jquery-3.4.1.slim.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/icon.js"></script>
	
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/angular-1.7.5/angular.min.js" type="text/javascript"></script>
	<script src="js/javascript.js" type="text/javascript"></script>

	<script>
		$('#mymodal').modal('show');
	</script>

	<script>
		$(document).ready(function() {
    	$('#example1').DataTable();
    	$('#example2').DataTable();
		} );
	</script>

</body>
</html>