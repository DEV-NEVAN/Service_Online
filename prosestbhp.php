 <?php 	
include_once("koneksi.php");
//if (isset($_POST['namabarang'])) {

// post akan mengirimkan data atau nilai langsung ke action untuk ditampung, tanpa menampilkan pada URL.
$npel=$_POST['nampel'];
$apel=$_POST['alampel'];
$telpel=$_POST['tlpnpel'];
$nabpel=$_POST['nbpel'];
$kerpel=$_POST['krsknpel'];
$tgl_pel= date("Y-m-d");


//}
$query="INSERT INTO sprinter(nama,alamat,telpon,nama_barang,kerusakan,tanggal)
		VALUES ('$npel','$apel','$telpel','$nabpel','$kerpel','$tgl_pel')";

		$hasil=mysqli_query($koneksi,$query);

		if ($hasil) {
			header('location:formstatus.php');
		}else{
			echo "sial";
		}
 ?>