<?php 	
include_once("koneksi.php");

$id=$_GET['id'];
//get akan menampilkan data/nilai pada URL, kemudian akan ditampung oleh action.
$query="SELECT * FROM skomputer WHERE no_antrian=".$id;

$hasil=mysqli_query($koneksi,$query);
$hasil2 = mysqli_query($koneksi,$query);


$nama = mysqli_fetch_assoc($hasil2);

 ?>

 
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PEMBAYARAN</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="style3.css">
	<link rel="stylesheet" href="style4.css">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 	<link rel="stylesheet" href="https://jqueryui.com/resources/demos/style.css">
 	</script>
  <style>
    h2 {
      margin: 30px 0 0 0;
    }
    fieldset {
      border: 0;
    }
    label {
      display: block;
    }
 	
    /* select with custom icons */

    .ui-selectmenu-menu .ui-menu.customicons .ui-menu-item-wrapper {
      padding: 0.5em 0 0.5em 5em;
    }
    .ui-selectmenu-menu .ui-menu.customicons .ui-menu-item .ui-icon {
      height: 24px;
      width: 60px;
      top: 0.1em;
    }
    .ui-icon.lokasi {
      background: url(IMG/lok.png) 0 0 no-repeat;
      -webkit-background-size: 30px 24px;
      background-size: 30px 24px;
    }
    .ui-icon.bni {
      background: url(IMG/bni.png) 0 0 no-repeat;
      -webkit-background-size: 60px 24px;
      background-size: 60px 24px;
    }
    .ui-icon.bca {
      background: url("IMG/logo-bca.png") 0 0 no-repeat;
      -webkit-background-size: 60px 24px;
      background-size: 60px 24px;
    }
    .ui-icon.bri {
      background: url(IMG/bri.png) 0 0 no-repeat;
      -webkit-background-size: 60px 24px;
      background-size: 60px 24px;
    }
    .ui-icon.bjb {
      background: url(IMG/bjb.png) 0 0 no-repeat;
      -webkit-background-size: 60px 24px;
      background-size: 60px 24px;
    }
    .ui-icon.bdki {
      background: url(IMG/bankdki.png) 0 0 no-repeat;
      -webkit-background-size: 60px 24px;
      background-size: 60px 24px;
    }
    .ui-icon.bbb {
      background: url(IMG/bankbb.png) 0 0 no-repeat;
      -webkit-background-size: 60px 24px;
      background-size: 60px 24px;
    }
    .ui-icon.visa {
      background: url(IMG/visa.png) 0 0 no-repeat;
      -webkit-background-size: 60px 24px;
      background-size: 60px 24px;
    }
    .ui-icon.masterc {
      background: url(IMG/masterc.png) 0 0 no-repeat;
      -webkit-background-size: 60px 24px;
      background-size: 60px 24px;
    }
    .ui-icon.paypal {
      background: url(IMG/paypal.png) 0 0 no-repeat;
      -webkit-background-size: 60px 24px;
      background-size: 60px 24px;
    }
    .ui-icon.alfa {
      background: url(IMG/alfa.jpg) 0 0 no-repeat;
      -webkit-background-size: 60px 24px;
      background-size: 60px 24px;
    }
    .ui-icon.indomaret {
      background: url(IMG/indomaret.png) 0 0 no-repeat;
      -webkit-background-size: 60px 24px;
      background-size: 60px 24px;
    }
    .ui-icon.gopay {
      background: url(IMG/gopay.jpg) 0 0 no-repeat;
      -webkit-background-size: 60px 24px;
      background-size: 60px 24px;
    }
 </style>
  		
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
	    		<li class="breadcrumb-item" ><a href="dataservice.php" style="color: white;">Data Service</a></li>
	    		<li class="breadcrumb-item active" aria-current="page">Pembayaran</li>
	  			</ol>
				</nav>
				 
				<div class="formedit" style="background-image: url(IMG/sk.png); border-radius: 20px; margin-top: 45px; height: 600px;">
					
				<div class="row">
					<div class="col"></div>
					<div class="col">
				<form action="prosespembayaran.php"  method="post" style="width: 500px; margin-top: 100px; margin-left: -70px;">
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
				      
				      <input type="hidden" class="form-control" name="tambahanp" value="<?php echo $data['tambahan'] ?>">
				    </div>

				     <div class="form-group">
				      
				      <input type="hidden" class="form-control" name="kategorip" value="<?php echo $data['kategori'] ?>">
				    </div>
				   <!-- <div class="form-group">
				      <label for="st-p">Kategori :</label>
				      <input type="text" class="form-control" name="kategorip" value="<?php echo $data['kategori'] ?>">
				    </div>-->

				   <div class="form-group">
				      <input type="hidden" class="form-control" name="datep" value="<?php echo $data['tanggal'] ?>">
				    </div>

				   <div class="form-group">
				      
				      <input type="hidden" class="form-control" name="teknisip" value="<?php echo $data['teknisi'] ?>">
				    </div>

				     <div class="form-group">
				    
				      <input type="hidden" class="form-control" name="statusp" value="<?php echo $data['status'] ?>">
				    </div>

				    <div class="form-group">
				      <label for="st-p" style="font-weight: bold; font-size: 22px; margin-left: -10px;">Harga Service (Rp) :</label>
				      <input type="text" class="form-control" name="totalp" value="<?php echo $data['totalh'] ?>" style="width: 220px; margin-left: -10px; font-weight: bold;">
				    </div>
					
					<!--<div class="form-group">
				      <label for="st-p">Pembayaran :</label>
				      <input type="text" class="form-control" name="pembyaranp" value="<?php echo $data['pembayaran'] ?>">
				    </div>-->

				    <div class="form-group">
				      
				      <input type="hidden" class="form-control" name="sspp" value="<?php echo $data['statusp'] ?>">
				    </div>

				  </fieldset>
				  <form class="" action="" method="post">
    
      <div class="form-group" style="margin-top: -87px; margin-left: 240px;">
        <label style="font-weight: bold; font-size: 20px;">Metode Pembayaran :</label>
        
		 

		      <select  class="form-control" name="pembayaranp"  id="filesB" >

				    <option value="Bayar di Tempat" data-class="lokasi" <?php if ($data['status']=='Bayar di Tempat') echo 'selected="selected"'; ?>>Bayar di Tempat</option>
			        <option value="BNI" data-class="bni"<?php if ($data['status']=='BNI') echo 'selected="selected"'; ?>>BNI</option>
			        <option value="BCA" data-class="bca"<?php if ($data['status']=='BCA') echo 'selected="selected"'; ?>>BCA</option>
			        <option value="BRI" data-class="bri"<?php if ($data['status']=='BRI') echo 'selected="selected"'; ?>>BRI</option>
			        <option value="BJB" data-class="bjb" <?php if ($data['status']=='BJB') echo 'selected="selected"'; ?>>BJB</option>
			        <option value="BANKDKI" data-class="bdki" <?php if ($data['status']=='BANKDKI') echo 'selected="selected"'; ?>>BANKDKI</option>
			        <option value="BANKBB" data-class="bbb" <?php if ($data['status']=='BANKBB') echo 'selected="selected"'; ?>>BANKBB</option>
			        <option value="VISA" data-class="visa" <?php if ($data['status']=='VISA') echo 'selected="selected"'; ?>>VISA</option>
			        <option value="MASTERC" data-class="masterc"<?php if ($data['status']=='MASTERC') echo 'selected="selected"'; ?>>MASTERC</option>
			        <option value="PAYPAL" data-class="paypal"<?php if ($data['status']=='PAYPAL') echo 'selected="selected"'; ?>>PAYPAL</option>
			        <option value="ALFA" data-class="alfa"<?php if ($data['status']=='ALFA') echo 'selected="selected"'; ?>>ALFA</option>
			        <option value="INDOMARET" data-class="indomaret" <?php if ($data['status']=='INDOMARET') echo 'selected="selected"'; ?>>INDOMARET</option>
			        <option value="GOPAY" data-class="gopay" <?php if ($data['status']=='GOPAY') echo 'selected="selected"'; ?>>GOPAY</option>
		      </select>
		 </div>
				    

       <!-- <div style="overflow-x: auto;">
        <table border=0 cellpadding="10" class="table">
        	
          <tr class="tr">
            <th class="th"><input type="checkbox"  value=""><img src="img/bni.png" width="60px" height="20px"></th>
            <th class="th"><input type="checkbox"  value=""><img src="img/logo-bca.png" width="60px" height="20px"></th>
            <th class="th"><input type="checkbox"  value=""><img src="img/bri.png" width="60px" height="25px"></th>
            <th class="th"><input type="checkbox"  value=""><img src="img/bjb.png" width="60px" height="30px"></th>
            <th class="th"><input type="checkbox"  value=""><img src="img/bankdki.png" width="60px" height="25px"></th>
            <th class="th"><input type="checkbox"  value=""><img src="img/bankbb.png" width="60px" height="20px"></th>
          </tr>
          <tr class="tr">
            <th class="th"><input type="checkbox"  value=""><img src="img/visa.png" width="60px" height="30px"></th>
            <th class="th"><input type="checkbox"  value=""><img src="img/masterc.png" width="60px" height="30px"></th>
            <th class="th"><input type="checkbox"  value=""><img src="img/paypal.png" width="60px" height="20px"></th>
            <th class="th"><input type="checkbox"  value=""><img src="img/alfa.jpg" width="70px" height="50px"></th>
            <th class="th"><input type="checkbox"  value=""><img src="img/indomaret.png" width="60px" height="20px"></th>
            <th class="th"><input type="checkbox"  value=""><img src="img/gopay.jpg" width="65px" height="40px"></th>
          </tr>
        </table>
      </div>-->
      <button class="btn-form-pay" style="margin-left: 20px; background-color: salmon;"><a href="dataservice.php" style="color: white; text-decoration: none;">Close</a></button>
      	<input type="hidden" name="id" value="<?php echo $data['no_antrian'] ?>">
		<input type="submit" value="Simpan" class="btn btn-secondary" style="margin-top: 17px; color: white; background-color: #1282b2; width: 150px; width: 180PX; height: 52px; font-weight: bold; border-radius: 50px 50px 50px 50px; font-size: 15px; margin-bottom: 20px; margin-left: 40px;  ">
      
    </form>

				
				
			     <?php } ?>
				</form>
					</div>
					<div class="col"></div>
				</div>
				</div>
			</div>
		</div>

	<script src="js/jquery-3.4.1.slim.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/icon.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<script>
  $( function() {
    $.widget( "custom.iconselectmenu", $.ui.selectmenu, {
      _renderItem: function( ul, item ) {
        var li = $( "<li>" ),
          wrapper = $( "<div>", { text: item.label } );
 
        if ( item.disabled ) {
          li.addClass( "ui-state-disabled" );
        }
 
        $( "<span>", {
          style: item.element.attr( "data-style" ),
          "class": "ui-icon " + item.element.attr( "data-class" )
        })
          .appendTo( wrapper );
 
        return li.append( wrapper ).appendTo( ul );
      }
    });
 
    $( "#filesA" )
      .iconselectmenu()
      .iconselectmenu( "menuWidget" )
        .addClass( "ui-menu-icons" );
 
    $( "#filesB" )
      .iconselectmenu()
      .iconselectmenu( "menuWidget" )
        .addClass( "ui-menu-icons customicons" );
 
    $( "#people" )
      .iconselectmenu()
      .iconselectmenu( "menuWidget")
        .addClass( "ui-menu-icons avatar" );
  } );
  </script>



	<script>
		$(document).ready(function() {
    	$('#example1').DataTable();
		} );
	</script>

</body>
</html>