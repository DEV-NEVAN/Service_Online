<?php  
include('koneksi.php');
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$no=1;
$kode='SK';
$query1 = "SELECT * FROM skomputer WHERE nama='andiysandoro'";

$hasil1 = mysqli_query($koneksi,$query1);

$html = '<h3 style="text_align: center;"><hr>DATA TRANSAKSI SERVICE COMPUTER BEECOM<br><hr></h3><br>';
while ($data = mysqli_fetch_array($hasil1)) {
$html .= "<br>
<form><table>
<tr>	              
			<td><span style='visibility:hidden'>spasiiiiiiiiiii</span></td> 	 
			<td>Nota</td>
			<td>:</td>
			<td>".$kode.$data['no_antrian']."</td>
		
			<td><span style='visibility:hidden'>spasiiiiiiiiiii</span></td>  
			<td>Biaya</td>
			<td>:</td>
			<td>".$data['totalh']."</td>
</tr>
<tr>		
			<td><span style='visibility:hidden'>spasiiiiiiiiiii</span></td> 
			<td>Nama</td>
			<td>:</td>
			<td>".$data['nama']."</td>

			<td><span style='visibility:hidden'>spasiiiiiiiiiii</span></td>  
			<td>Pembayaran</td>
			<td>:</td>
			<td>".$data['pembayaran']."</td>
</tr>
<tr>		
			<td><span style='visibility:hidden'>spasiiiiiiiiiii</span></td> 
			<td>Alamat</td>
			<td>:</td>
			<td>".$data['alamat']."</td>

			<td><span style='visibility:hidden'>spasiiiiiiiiiii</span></td>  
			<td>Status Pembayaran</td>
			<td>:</td>
			<td style='color: blue; font-weight: bold;'>".$data['statusp']."</td>
</tr>
<tr>		
			<td><span style='visibility:hidden'>spasiiiiiiiiiii</span></td> 
			<td>Telpon</td>
			<td>:</td>
			<td>".$data['telpon']."</td>
</tr>
<tr>	
			<td><span style='visibility:hidden'>spasiiiiiiiiiii</span></td> 	
			<td>Kerusakan</td>
			<td>:</td>
			<td>".$data['kerusakan']."</td>
</tr>
<tr>		
			<td><span style='visibility:hidden'>spasiiiiiiiiiii</span></td> 
			<td>Kategori</td>
			<td>:</td>
			<td>".$data['kategori']."</td>
</tr>
<tr>		
			<td><span style='visibility:hidden'>spasiiiiiiiiiii</span></td> 
			<td>Tanggal</td>
			<td>:</td>			
			<td>".$data['tanggal']."</td>
</tr>
<tr>		
			<td><span style='visibility:hidden'>spasiiiiiiiiiii</span></td> 
			<td>Teknisi</td>
			<td>:</td>	
			<td>".$data['teknisi']."</td>
</tr>
<tr>		
			<td><span style='visibility:hidden'>spasiiiiiiiiiii</span></td> 
			<td>Status</td>
			<td>:</td>
			<td>".$data['status']."</td>		
			
			</tr>";
$html .= "<h5 style= 'text_align:center;'><hr>Terimakasih Telah Berkunjung di Becoom, Sampai Jumpa Kembali...<br><hr></h5></html>";
}
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A5', 'landscape');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('DATATRANSASKI.pdf');
?>

