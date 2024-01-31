<?php 	
include_once("koneksi.php");

$id=$_GET['id'];
//get akan menampilkan data/nilai pada URL, kemudian akan ditampung oleh action.
$query="SELECT * FROM skomputer WHERE no_antrian=".$id;

$hasil=mysqli_query($koneksi,$query);


 ?>

 
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>UPDATE DATA PELANGGAN</title>
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
						  	<img src="IMG/p1.png" width="100" height="100" style="background-color: white; border:8px solid; border-color: white; border-radius: 50% !important; margin-left: 85px; margin-top: -70px; margin-bottom: 20px; " class="rounded" alt="ini gambar">
						    <h5 class="card-title text-center">Nevan Fauzi</h5>
						  </div>
						</div>
						<!--tutup profil-->
					</div>
					<div class="col kolom4">
				<!--bagian nav-->
				<div class="latar">
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
				<div class="formedit" style="background-image: url(IMG/sk.png); border-radius: 20px; margin-top: -20px;">
				 <div class="latarinfo" >
		      	<div class="info" style="border-radius: 20px 20px 0px 0px">
		      		<div class="tulis">
		      			<h4 style="font-weight: bold;">UPDATE DATA BARANG</h4>
		      		</div>
		      	</div>

			 
				</div>
				<div class="row">
					<div class="col"></div>
					<div class="col">
				<form action="prosesedit.php" method="post">
				<?php 	while ($data=mysqli_fetch_array($hasil)) { ?>
				  <fieldset>
				   <div class="form-group">
				      <input type="hidden"  class="form-control" name="namap" value="<?php echo $data['nama'] ?>">
				    </div>

					<div class="form-group">
				      <input type="hidden" class="form-control" name="alamatp" value="<?php echo $data['alamat'] ?>" >
				    </div>
				    

				    <div class="form-group">
				      <input type="hidden" class="form-control" name="telponp" value="<?php echo $data['telpon'] ?>">
				    </div>

					<div class="form-group">
				      <input type="hidden" class="form-control" name="nbp" value="<?php echo $data['nama_barang'] ?>">
				    </div>

				    <div class="form-group">
				      
				      <input type="hidden" class="form-control" name="kerusakanp" value="<?php echo $data['kerusakan'] ?>">
				    </div>

				    <div class="form-group">
				      <label for="st-p">Kerusakan Tambahan :</label>
				      <input type="text" class="form-control" name="tambahanp" value="<?php echo $data['tambahan'] ?>">
				    </div>

				     <div class="form-group">
				      <label for="exampleSelect2">Kategori :</label>
				      <select  class="form-control" name="kategorip" id="exampleSelect2">
				        <option value="Ringan" <?php if ($data['kategori']=='Ringan') echo 'selected="selected"'; ?>>Ringan</option>
				        <option value="Berat" <?php if ($data['kategori']=='Berat') echo 'selected="selected"'; ?>>Berat</option>
				      </select>
				    </div>
				   <!-- <div class="form-group">
				      <label for="st-p">Kategori :</label>
				      <input type="text" class="form-control" name="kategorip" value="<?php echo $data['kategori'] ?>">
				    </div>-->

				   <div class="form-group">
				      <input type="hidden" class="form-control" name="datep" value="<?php echo $data['tanggal'] ?>">
				    </div>

				   <div class="form-group">
				      <label for="st-p">Teknisi :</label>
				      <input type="text" class="form-control" name="teknisip" value="<?php echo $data['teknisi'] ?>">
				    </div>

				     <div class="form-group">
				      <label for="exampleSelect2">Status :</label>
				      <select  class="form-control" name="statusp" id="exampleSelect2">
				        <option value="Pemeriksaan" <?php if ($data['status']=='Pemeriksaan') echo 'selected="selected"'; ?>>Pemeriksaan</option>
				        <option value="Proses" <?php if ($data['status']=='Proses') echo 'selected="selected"'; ?>>Proses</option>
				        <option value="Selesai" <?php if ($data['status']=='Selesai') echo 'selected="selected"'; ?>>Selesai</option>
				      </select>
				    </div>

				    <div class="form-group">
				      <label for="st-p">Harga Service :</label>
				      <input type="text" class="form-control" name="totalp" value="<?php echo $data['totalh'] ?>">
				    </div>

				    <div class="form-group">
				      
				      <input type="hidden" class="form-control" name="pembyaranp" value="<?php echo $data['pembayaran'] ?>">
				    </div>

				    <div class="form-group">
				      <label for="st-p">Status Pembayaran :</label>
				      <input type="text" class="form-control" name="sspp" value="<?php echo $data['statusp'] ?>">
				    </div>

				  </fieldset>
				
				<div class="tombol" style=" text-align: center;">
					<input type="hidden" name="id" value="<?php echo $data['no_antrian'] ?>">
			        <input type="submit" value="Simpan" style="color: white; background-color: #1282b2; width: 200px; height: 40px; border-radius: 20px 20px 20px 20px; font-size: 20px; margin-bottom: 20px; ">
				</div>
			     <?php } ?>
				</form>
					</div>
					<div class="col"></div>
				</div>
				<div class="tutuform" style="background-color: #FF8C00; border-radius: 0px 0px 20px 20px; height: 50px; margin-top: 20px;"></div>
			</div>
		</div>

	<script src="js/jquery-3.4.1.slim.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>


	<script>
		$(document).ready(function() {
    	$('#example1').DataTable();
		} );
	</script>

</body>
</html>