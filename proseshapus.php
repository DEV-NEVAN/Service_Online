<?php 
include_once ("koneksi.php");
session_start();
$id=$_GET['id'];
$query="DELETE FROM skomputer WHERE no_antrian=".$id;

$hasil=mysqli_query($koneksi,$query);

if ($hasil) {

	$_SESSION['modal'] = "<center>data pelanggan berhasil di hapus</center> ";
	header('location:datapelanggan.php');
}else{
	echo "hapus gagal";
}
 ?>
