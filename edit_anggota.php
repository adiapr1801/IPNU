<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Beranda Administrator | IPPNU</title>
    <?php include("section/css.php"); ?>
</head>

<body class="homepage">
<header id="header" style="background:#00CC33;">
        <?php
			include("section/header.php");
		?>		
</header>

<section id="main-slider" class="no-margin" style="width:85%;margin:0 auto;border:#006600 2px solid;padding:5px">


<div class="container">
		<h1 style="color:#006600;text-align:center; font-weight:bold;">Welcome ADMISTRATOR</h1>
            <div class="row">
                <div class="col-xs-12 col-sm-8 wow fadeInDown" style="width:97%;">
                   <div class="tab-wrap"> 
                        <div class="media">
                            <div class="parrent pull-left">
                                <ul class="nav nav-tabs nav-stacked">
                                    <li class="active"><a href="#tab1" data-toggle="tab" class="analistic-01">Edit Anggota</a></li>
                                </ul>
                            </div>

                            <div class="parrent media-body">
								<div class="tab-content">	
                                    <div class="tab-pane fade active in" id="tab1">
                                         <div class="media">
                                           <div class="media-body">
                                                 <div align="center"><b style="text-align:center; padding-bottom:10px;">- Tambah Anggota -<br></b>
</div>

<?php
include('api/koneksi.php');
	$id=$_GET['id'];
	$q = mysqli_query($koneksi,"SELECT * FROM anggota where id_anggota='$id'");
	while($r = mysqli_fetch_array($q)){
?>
<form action="api/update_anggota.php?id=<?php echo "$id"; ?>" method="post">
<table width="100%" border="0">
  <tr>
    <th width="20%" scope="row"><div align="right">Id_anggota</div></th>
    <th width="2%" scope="row">&nbsp;</th>
    <td width="78%"><input type="number" value="<?php echo $r['id_anggota']; ?>" name="id" placeholder="" style="width:100px;"></td>
  </tr>
  <tr>
    <th scope="row"><div align="right">Nama Lengkap </div></th>
    <th scope="row">&nbsp;</th>
    <td><input type="text" name="nama" placeholder="" style="width:400px;" value="<?php echo $r['nama']; ?>"></td>
  </tr>
  <tr>
    <th scope="row"><div align="right">Tempat, Tanggal Lahir </div></th>
    <th scope="row">&nbsp;</th>
    <td><input type="text" name="tempat" value="<?php echo $r['tempat_lahir']; ?>"placeholder="Kota/Kabupaten" style="width:200px;"> <input type="date" name="tanggal" value="<?php echo $r['tgllahir']; ?>"></td>
  </tr>
  <tr>
    <th scope="row"><div align="right">Alamat</div></th>
    <th scope="row">&nbsp;</th>
    <td>
	<input type="text" name="alamat" value="<?php echo $r['alamat']; ?>" placeholder="alamat" style="width:200px;">
	<input type="number" name="rt" placeholder="RT" value="<?php echo $r['rt']; ?>" style="width:50px;">
	<input type="number" name="rw" placeholder="RW" style="width:50px;" value="<?php echo $r['rw']; ?>">	</td>
  </tr>
  <tr>
    <th scope="row"><div align="right"></div></th>
    <th scope="row">&nbsp;</th>
    <td><input type="text" name="desa" placeholder="Desa/Kelurahan" style="width:200px;" value="<?php echo $r['desa']; ?>">
		<input type="text" name="kecamatan" placeholder="Kecamatan" style="width:200px;" value="<?php echo $r['kecamatan']; ?>"> 
		<input type="text" name="Kabupaten" placeholder="Kabupaten" style="width:200px;" value="<?php echo $r['kabupaten']; ?>"></td>
  </tr>
  <tr>
    <th scope="row"><div align="right">Telepon</div></th>
    <th scope="row">&nbsp;</th>
    <td><input type="number" name="telepon" placeholder="08xxx" style="width:200px;" value="<?php echo $r['telepon']; ?>"></td>
  </tr>
  <tr>
    <th height="86" colspan="3" scope="row"><div align="center"><input type="submit" value="Simpan Data">
    </div></th>
  </tr>
</table>
</form>
<?php
	}
?>

                                            </div>
                                        </div>
                                    </div>
                                </div> <!--/.tab-content-->  
                            </div> <!--/.media-body--> 
                        </div> <!--/.media-->     
                    </div><!--/.tab-wrap-->               
                </div><!--/.col-sm-6-->
            </div><!--/.row-->
        </div><!--/.container-->

</section>

	<section id="recent-works">
        <?php
			include("section/berita.php");
		?>
    </section>

    <section id="recent-works" style="background-image:linear-gradient(#CCCCCC,#fff); padding-left:5%;padding-right:5%; padding-top:20px;">
        <?php
			include("section/galeri.php");
		?>
    </section>

    <section id="content" style="background:#CCCCCC;">
        <?php
			include("section/content.php");
		?>
    </section>

    <section id="partner" style="background:#fff; margin:auto; border-top:#006600 solid 2px; border-bottom:#006600 solid 2px;">
        <?php
			include("section/partner.php");
		?>
    </section>

    <section id="conatcat-info">
         <?php
			include("section/contact-info.php");
		?>  
    </section>

    <section id="bottom">
        <?php
			include("section/bottom.php");
		?>  
    </section>

    <footer id="footer" class="midnight-blue" style="background:#006600;">
        <?php
			include("section/footer.php");
		?>
    </footer>
	<?php include("section/javascript.php");?>
</body>
</html>