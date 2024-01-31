<?php 	
include_once("koneksi.php");
$no=1;
$query1 = "SELECT * FROM skomputer WHERE nama='andiysandoro'";

$hasil1 = mysqli_query($koneksi,$query1);
$hasil2 = mysqli_query($koneksi,$query1);
$hasil3 = mysqli_query($koneksi,$query1);

//error
$nama = mysqli_fetch_assoc($hasil2);
$telpon = mysqli_fetch_assoc($hasil3);


$kode='SK';
 ?>

 
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MY PROFILE</title>
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
						<div class="card" style="width: 20rem; height: 250px; border: 5px solid; border-radius: 10px 10px 0px 0px; border-color:#FF8C00;">
						  <img src="IMG/b1.jpg" class="card-img-top" alt="..." height="125">
						  <div class="card-body">
						  	<img src="IMG/tek1.jpg" width="100" height="100" style="background-color: white; border:8px solid; border-color: white; border-radius: 50% !important; margin-left: 85px; margin-top: -70px; margin-bottom: 20px; " class="rounded" alt="ini gambar">

						    <h5 class="card-title text-center" style="font-weight: bold;">Jaya Setiawan</h5>
						  </div>
						</div>
						<!--tutup profil-->
					</div>
					<div class="col kolom4">
				<!--bagian nav-->
		
				<div class="latar" style="background-color: #FF8C00;">
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
			
			<div class="col col-9 kolom2">
				<nav aria-label="breadcrumb" style="" >
	  			<ol class="breadcrumb" style="background-color: #FF8C00; font-weight: bold;" >
	    		<li class="breadcrumb-item" style="color: white;">My Profile</a></li>
	  			</ol>
				</nav>
			 <div class="latarinfo" style="background-image: url(IMG/sk.png); position: absolute; border-radius: 10px 10px 10px 10px; ">
			 	
		<!---->
			<!--ini bagian profil-->
						<div class="card" style="width: 980px; height: 620px; margin-top: -10px; padding: 10px; background-image: url(IMG/sk.png);">
						  <img src="IMG/b1.jpg" class="card-img-top" alt="..." height="265">
						  <div class="card-body" style="text-align: center;">
						  	<img src="IMG/tek1.jpg" width="200" height="200" style="background-color: white; border:8px solid; border-color: white; border-radius: 50% !important; margin-top: -120px; margin-bottom: 20px; " class="rounded" alt="ini gambar">
						    <h5 class="card-title text-center">Jaya Setiwan</h5>
						    <p style="color: grey; m"><i class="fa fa-whatsapp" aria-hidden="true"></i></i><i style="margin-left: 10px;"></i>| Whastap : 0895325086780 </p>
						    <button type="button" class="btn btn-primary" style="width: 300px;"><a href="datapelanggan.php" style="color: white; text-decoration: none;">Data Pelanggan</a></button>
						  </div>
						</div>
			<!--tutup profil-->

		<!---->
				
      	

		
		<!--bagian modal tambah-->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 		 <div class="modal-dialog" role="document" style="width: 400px;">
    		<div class="modal-content" style="border-color: #FF8C00;">
      		<div class="modal-header" style="background-color: #FF8C00; >
      			<i class="fa fa-plus-circle fa-3x" style="margin-right: 20px; color: #00FF7F;"></i>
        		<h5 class="modal-title" id="exampleModalLabel" style="margin-top: 7px; color: #333; font-weight: bold;">My Teknisi</h5>
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          		<span aria-hidden="true">&times;</span>
       		 </button>
      		</div>
      		<div class="modal-body">
				
			
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