<?php 	
include_once("koneksi.php");
//if (isset($_POST['namabarang'])) {

session_start();
$user_regi = $_POST['userreg'];
$ala_regi = $_POST['alareg'];
$email_regi = $_POST['emailreg'];
$pass_regi1 = md5 ($_POST['passreg1']);
$pass_regi2 = md5 ($_POST['passreg2']);

//}
$query="INSERT INTO tb_user1(username,alamat,email,password,repassword)
		VALUES ('$user_regi','$ala_regi','$email_regi','$pass_regi1','$pass_regi2')";

		$hasil=mysqli_query($koneksi,$query);

		if ($hasil) {
			$_SESSION['alert'] = " selamat akun anda sudah terdaftar ";
			header('location:form_login.php');
		}else{
			echo "gagal";
		}
 ?>