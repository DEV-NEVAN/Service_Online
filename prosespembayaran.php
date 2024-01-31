<?php 
include_once ("koneksi.php");
session_start();

$id=$_POST['id'];
$nam_pel=$_POST['namap'];
$ala_pel=$_POST['alamatp'];
$tel_pel=$_POST['telponp'];
$nbp_pel=$_POST['nbp'];
$ker_pel=$_POST['kerusakanp'];
$tmb_pel=$_POST['tambahanp'];
$kat_pel=$_POST['kategorip'];
$dat_pel=$_POST['datep'];
$sta_pel=$_POST['statusp'];
$tek_pel=$_POST['teknisip'];
$tot_pel=$_POST['totalp'];
$pem_pel=$_POST['pembayaranp'];
$ssp_pel=$_POST['sspp'];


$sta_pel=$_POST['statusp'];

$query="UPDATE skomputer SET nama='$nam_pel',alamat='$ala_pel',telpon='$tel_pel',nama_barang='$nbp_pel',kerusakan='$ker_pel',tambahan='$tmb_pel',kategori='$kat_pel',tanggal='$dat_pel',status='$sta_pel',teknisi='$tek_pel',totalh='$tot_pel',pembayaran='$pem_pel',statusp='$ssp_pel' WHERE no_antrian=$id";

$hasil=mysqli_query($koneksi,$query);

if ($hasil) {
	$_SESSION['modal'] = " <center>Pembyaran Berhasil di Simpan<br></center> ";
	header('location:dataservice.php');
}else{
	$_SESSION['modalg'] = " <center>data produk gagal<br>di update<br></center> ";
	header('location:datamaster.php');
}
 ?>
