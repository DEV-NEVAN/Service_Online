<?php 	
include_once("koneksi.php");
$no=1;
$query1 = "SELECT * FROM skomputer WHERE nama='andiysandoro'";

$hasil1 = mysqli_query($koneksi,$query1);
$hasil2 = mysqli_query($koneksi,$query1);

$nama = mysqli_fetch_assoc($hasil2);


$kode='SK';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<title>DATA TRANSAKSI</title>
</head>
<body>
	<center>
	<h3 style="margin-top: 20px; font-weight: bold;">DATA TRANSAKSI SERVICE COMPUTER BEECOM</h3>
	<hr>
	<br>
			<form style=" margin-bottom: 20px; " >
				<?php 	while ($data=mysqli_fetch_array($hasil1)) { ?>
				 
				    <table>
					
				   	<tr>
				      <td scope="row" style="font-weight: bold; color: #333;">Nota</td>
				      <td style="font-weight: bold; color: #333;">:</td>
				      <td><?php echo $kode.$data['no_antrian'] ?></td>
				      <td style="width: 100px;"></td>
				      <td style="margin-right: 20px; font-weight: bold; color: #333;">Total</td>
				      <td style="font-weight: bold; color: #333;">:</td>
				      <td><?php echo $data['totalh'] ?></td>
				  </tr>
				   
				    <tr style="height: 15px;">
				    	<td></td>
				    </tr>
					
				   	<tr>
				      <td style=" font-weight: bold; color: #333;">Nama</td>
				      <td style="font-weight: bold; color: #333;">:</td>
				      <td><?php echo $data['nama'] ?></td>
				      <td style="width: 100px;"></td>

				    <td style=" font-weight: bold; color: #333;">Pembayaran</td>
			     	<td style="font-weight: bold; color: #333;">:</td>
				   	<td><?php echo $data['pembayaran'] ?></td>
				  	</tr>
				    </div>
				    <tr style="height: 15px;">
				    	<td></td>
				    </tr>
						<tr>
						<td style=" font-weight: bold; color: #333;">Alamat</td>
						<td style="font-weight: bold; color: #333;">:</td>
		      			<td><?php echo $data['alamat'] ?></td>	
						<td style="width: 100px;"></td>
				   		<td style=" font-weight: bold; color: #333;">Status Pembayaran</td>
				   		<td style="font-weight: bold; color: #333;">:</td>
			    		<td style="color: blue; font-weight: bold;"><?php echo $data['statusp'] ?></td>
			    	
						</tr>
		    		</div>
					<tr style="height: 15px;">
				    	<td></td>
				    </tr>
				    	<tr>
				    		<td style=" font-weight: bold; color: #333;">Telpon</td>
				    		<td style="font-weight: bold; color: #333;">:</td>
				    		<td><?php echo $data['telpon'] ?></td>
				    	</tr>
				    </div>
				    <tr style="height: 15px;">
				    	<td></td>
				    </tr>
				    	<tr>
				    		<td style=" font-weight: bold; color: #333;">Kerusakan</td>
				    		<td style="font-weight: bold; color: #333;">:</td>
				    		<td><?php echo $data['kerusakan'] ?></td>
				    	</tr>
					<tr style="height: 15px;">
				    	<td></td>
				    </tr>
				    	<tr>
				    		<td style=" font-weight: bold; color: #333;">Kategori</td>
				    		<td style="font-weight: bold; color: #333;">:</td>
				    		<td><?php echo $data['kategori'] ?></td>		
				    	</tr>
					<tr style="height: 15px;">
				    	<td></td>
				    </tr>
				   	<tr>
				   		<td style=" font-weight: bold; color: #333;">Tanggal</td>
				   		<td style="font-weight: bold; color: #333;">:</td>
				      	<td><?php echo $data['tanggal'] ?></td>
				   	</tr>
				
				    <tr style="height: 15px;">
				    	<td></td>
				    </tr>
					
				  
				   	<tr>
				   		<td style=" font-weight: bold; color: #333;">Teknisi</td>
				   		<td style="font-weight: bold; color: #333;">:</td>
				      	<td><?php echo $data['teknisi'] ?></td>
				      	
				   	</tr>
				    
				    <tr style="height: 15px;">
				    	<td></td>
				    </tr>
				   	<tr>
				   		<td style=" font-weight: bold; color: #333;">Status</td>
				   		<td style="font-weight: bold; color: #333;">:</td>
			    		<td><?php echo $data['status'] ?></td>
			    	</tr>
					


				</table>
				</fieldset>
			</form>
			<br>
			<div class="row">
				<div class="col" style="margin-left: 500px;">
					<button type="button" class="btn btn-danger" style="width: 220px; margin-left: -74px;"><a href="dataservice.php" style="color: white; text-decoration: none;"><i class="fa fa-times-circle fa-2x" style="position: relative;margin-left: -50px;" aria-hidden="true"></i><p style="margin-top: -25px; margin-left: 20px; margin-bottom: -2px;">Close</p></a></button>
				</div>
				<div class="col" style="margin-right: 400px;">
					<button type="button" class="btn btn-primary" style="width: 220px; margin-left: -74px;"><a href="cetakdata.php" style="color: white; text-decoration: none;"><i class="fa fa-print fa-2x fav" style="position: relative; margin-left: -80px;"></i><p style="margin-top: -25px; margin-left: 30px; margin-bottom: -2px;">Cetak Nota</p></a></button>
				</div>
			</div>
			
		    
		    
		      				

				<?php } ?>	
	</center>
	
</body>
</html>