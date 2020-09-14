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
									<li class=""><a href="#tab0" data-toggle="tab" class="analistic-03">Dashboard</a></li>
                                    <li class=""><a href="#tab1" data-toggle="tab" class="analistic-01">Tambah Anggota</a></li>
                                    <li class=""><a href="#tab2" data-toggle="tab" class="analistic-02">Tambah Gallery</a></li>
                                    <li class=""><a href="#tab3" data-toggle="tab" class="tehnical">Tambah Berita</a></li>
                                    <li class="active"><a href="#tab4" data-toggle="tab" class="tehnical">Tambah Opini</a></li>
                                    <li class=""><a href="#tab5" data-toggle="tab" class="tehnical">Tambah Do'a</a></li>
									<li class=""><a href="#tab6" data-toggle="tab" class="tehnical">Hikmah Ulama</a></li>
                                </ul>
                            </div>

                            <div class="parrent media-body">
								<div class="tab-content">
									
									<div class="tab-pane fade" id="tab0">
                                        <div class="media">
                                           <div class="media-body">
                                                 <h2>Selamat datang</h2>
                                            </div>
                                        </div>
                                     </div>
									
                                    <div class="tab-pane fade" id="tab1">
                                         <div class="media">
                                           <div class="media-body">
                                                 <div align="center"><b style="text-align:center; padding-bottom:10px;">- Tambah Anggota -<br></b>
</div>
<form action="api/tambah_anggota.php" method="post">
<table width="100%" border="0">
  <tr>
    <th width="20%" scope="row"><div align="right">Id_anggota</div></th>
    <th width="2%" scope="row">&nbsp;</th>
    <td width="78%"><input type="number" name="id" placeholder="" style="width:100px;"></td>
  </tr>
  <tr>
    <th scope="row"><div align="right">Nama Lengkap </div></th>
    <th scope="row">&nbsp;</th>
    <td><input type="text" name="nama" placeholder="" style="width:400px;"></td>
  </tr>
  <tr>
    <th scope="row"><div align="right">Tempat, Tanggal Lahir </div></th>
    <th scope="row">&nbsp;</th>
    <td><input type="text" name="tempat" placeholder="Kota/Kabupaten" style="width:200px;"> <input type="date" name="tanggal"></td>
  </tr>
  <tr>
    <th scope="row"><div align="right">Alamat</div></th>
    <th scope="row">&nbsp;</th>
    <td>
	<input type="text" name="alamat" placeholder="alamat" style="width:200px;">
	<input type="number" name="rt" placeholder="RT" style="width:50px;">
	<input type="number" name="rw" placeholder="RW" style="width:50px;">	</td>
  </tr>
  <tr>
    <th scope="row"><div align="right"></div></th>
    <th scope="row">&nbsp;</th>
    <td><input type="text" name="desa" placeholder="Desa/Kelurahan" style="width:200px;">
		<input type="text" name="kecamatan" placeholder="Kecamatan" style="width:200px;"> 
		<input type="text" name="Kabupaten" placeholder="Kabupaten" style="width:200px;"></td>
  </tr>
  <tr>
    <th scope="row"><div align="right">Telepon</div></th>
    <th scope="row">&nbsp;</th>
    <td><input type="number" name="telepon" placeholder="08xxx" style="width:200px;"></td>
  </tr>
  <tr>
    <th height="86" colspan="3" scope="row"><div align="center"><input type="submit" value="Simpan Data">
    </div></th>
  </tr>
</table>
</form>
<hr>
<?php
	include('api/koneksi.php');	
	$halaman = 3;
  $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
  $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
  $result = mysqli_query($koneksi,"SELECT * FROM anggota");
  $total = mysqli_num_rows($result);
  $pages = ceil($total/$halaman);            
  $query = mysqli_query($koneksi,"select * from anggota order by id_anggota desc LIMIT $mulai, $halaman")or die(mysql_error);
  $no =$mulai+1;
?>
<table width="100%" border="1" bordercolor="#009900">
  <tr>
    <th width="9%" scope="col"><div align="center">ID </div></th>
    <th width="21%" scope="col"><div align="center">Nama Lengkap </div></th>
    <th width="15%" scope="col"><div align="center">TTL </div></th>
    <th width="19%" scope="col"><div align="center">Alamat</div></th>
    <th width="13%" scope="col"><div align="center">Kabupaten</div></th>
    <th width="11%" scope="col"><div align="center">Telepon</div></th>
    <th width="12%" scope="col"><div align="center">Aksi</div></th>
  </tr>
<?php
	while($d = mysqli_fetch_array($query)){
?>
  <tr>
    <td><?php echo $d['id_anggota']; ?></td>
    <td><?php echo $d['nama']; ?></td>
    <td><?php echo $d['tempat_lahir']; ?><br /><?php echo $d['tgl_lahir']; ?></td>
    <td>
	<?php echo $d['alamat']; ?>, RT:<?php echo $d['rt']; ?>, RW:<?php echo $d['rw']; ?><br />
	<?php echo $d['desa']; ?>, 
	<?php echo $d['kecamatan']; ?></td>
    <td><?php echo $d['kabupaten']; ?></td>
    <td><?php echo $d['telepon']; ?></td>
    <td><div align="center">
			<a href="edit_anggota.php?id=<?php echo $d['id_anggota']; ?>">
			<img src="img/75476-2019-02-08-edit-icon-png-small-11563142463qiwrzqx0e1.png" width="25" /></a> | 
			<a href="api/hapus_anggota.php?id=<?php echo $d['id_anggota']; ?>">
			<img src="img/delete-button-clipart-volume-icon-hapus-11563950527luvjbpuej2.png" width="25" /></a></div></td>
  </tr>
<?php
	}
?>
</table>
	<b>Halaman selanjutnya : </b> 
	<?php for ($i=1; $i<=$pages ; $i++){ ?>
	  <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
	<?php } ?>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="tab2">
                                        <div class="media">
                                           <div class="media-body">
                                                 <form action="api/simpan_galeri.php" method="post" enctype="multipart/form-data">
									  	<table width="100%" border="0">
                                          <tr>
                                            <th width="18%" scope="row"><div align="right">Judul Galeri </div></th>
                                            <td width="4%">&nbsp;</td>
                                            <td width="78%"><label>
                                              <input name="judul" type="text" placeholder="Masukkan judul" style="width:600px; padding-left:10px;border-radius:4px" />
                                            </label></td>
                                          </tr>
                                          <tr>
                                            <th scope="row"><div align="right">Keterangan</div></th>
                                            <td>&nbsp;</td>
                                            <td><input name="keterangan" type="text" id="keterangan" style="width:600px; padding-left:10px;border-radius:4px" maxlength="100" placeholder="Maksimal 100 karakter" /></td>
                                          </tr>
                                          
                                          <tr>
                                            <th scope="row"><div align="right">Gambar</div></th>
                                            <td>&nbsp;</td>
                                            <td><input name="gambar" type="file" /></td>
                                          </tr>
                                          
                                          <tr>
                                            <th scope="row"><div align="right"></div></th>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                          </tr>
                                          <tr>
                                            <th scope="row"><div align="right"></div></th>
                                            <td>&nbsp;</td>
                                            <td><p>
                                              <input type="submit" value="Masukkan Galeri" />
                                            </p>
                                              <p>&nbsp; </p></td>
                                          </tr>
                                        </table>
									  </form>
									  
									  
<?php
include('api/koneksi.php');	
	$halaman = 3;
  $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
  $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
  $result = mysqli_query($koneksi,"SELECT * FROM galeri");
  $total = mysqli_num_rows($result);
  $pages = ceil($total/$halaman);            
  $query = mysqli_query($koneksi,"select * from galeri order by no desc LIMIT $mulai, $halaman")or die(mysql_error);
  $no =$mulai+1;
?>
                                      <table width="100%" border="1">
                                        <tr>
                                          <th width="16%" scope="col"><div align="center">Judul</div></th>
                                          <th width="19%" scope="col"><div align="center">Keterangan</div></th>
                                          <th width="9%" scope="col"><div align="center">Gambar</div></th>
                                          <th width="11%" scope="col"><div align="center">Aksi</div></th>
                                        </tr>
<?php
	while($d = mysqli_fetch_array($query)){
?>
                                        <tr>
                                          <td><div align="center"><?php echo $d['judul']; ?></div></td>
                                          <td><div align="center"> <?php echo $d['keterangan']; ?></div></td>
                                          <td><div align="center">
										  <img src="img/imggaleri/<?php echo $d['gambar']; ?>" width='50' height='50'></div></td>
										  </td>
                                          <td><div align="center">
										  	<a href="edit_galeri.php?id=<?php echo $d['no']; ?>">
											<img src="img/75476-2019-02-08-edit-icon-png-small-11563142463qiwrzqx0e1.png" width="25" /></a> | 
											<a href="api/hapus_galeri.php?id=<?php echo $d['no']; ?>">
											<img src="img/delete-button-clipart-volume-icon-hapus-11563950527luvjbpuej2.png" width="25" /></a>
										  </div></td>
                                        </tr>
<?php
	}
?>
                                      </table>

<b>Halaman selanjutnya : </b> 
<?php for ($i=1; $i<=$pages ; $i++){ ?>
  <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
<?php } ?>
                                          </div>
                                        </div>
                                    </div>

                                  	<div class="tab-pane fade" id="tab3">
                                        <form action="api/simpan_berita.php" method="post" enctype="multipart/form-data">
									  	<table width="100%" border="0">
                                          <tr>
                                            <th width="18%" scope="row"><div align="right">Judul Berita </div></th>
                                            <td width="4%">&nbsp;</td>
                                            <td width="78%"><label>
                                              <input name="judul" type="text" placeholder="Masukkan judul" style="width:600px; padding-left:10px;border-radius:4px" />
                                            </label></td>
                                          </tr>
                                          <tr>
                                            <th scope="row"><div align="right">Penulis</div></th>
                                            <td>&nbsp;</td>
                                            <td><input name="penulis" type="text" placeholder="Jika lebih dari 1, pisahkan dengan koma" style="width:600px; padding-left:10px;border-radius:4px" /></td>
                                          </tr>
                                          <tr>
                                            <th scope="row"><div align="right">Kata Kunci </div></th>
                                            <td>&nbsp;</td>
                                            <td><input name="kunci" type="text" placeholder="Jika lebih dari 1, pisahkan dengan koma" style="width:600px; padding-left:10px;border-radius:4px" /></td>
                                          </tr>
                                          <tr>
                                            <th scope="row"><div align="right">Gambar</div></th>
                                            <td>&nbsp;</td>
                                            <td><input name="gambar" type="file" /></td>
                                          </tr>
                                          <tr>
                                            <th scope="row"><div align="right">Artikel</div></th>
                                            <td>&nbsp;</td>
                                            <td><textarea style="width:600px;" name="artikel"></textarea></td>
                                          </tr>
                                          <tr>
                                            <th scope="row"><div align="right"></div></th>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                          </tr>
                                          <tr>
                                            <th scope="row"><div align="right"></div></th>
                                            <td>&nbsp;</td>
                                            <td><p>
                                              <input type="submit" value="Masukkan Berita" />
                                            </p>
                                              <p>&nbsp; </p></td>
                                          </tr>
                                        </table>
									  </form>
									  
									  
<?php
include('api/koneksi.php');	
	$halaman = 3;
  $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
  $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
  $result = mysqli_query($koneksi,"SELECT * FROM berita1");
  $total = mysqli_num_rows($result);
  $pages = ceil($total/$halaman);            
  $query = mysqli_query($koneksi,"select * from berita1 order by no desc LIMIT $mulai, $halaman")or die(mysql_error);
  $no =$mulai+1;
?>
                                      <table width="100%" border="1">
                                        <tr>
                                          <th width="16%" scope="col"><div align="center">Judul</div></th>
                                          <th width="20%" scope="col"><div align="center">Posted By </div></th>
                                          <th width="19%" scope="col"><div align="center">Tagged By </div></th>
                                          <th width="25%" scope="col"><div align="center">Artikel</div></th>
                                          <th width="9%" scope="col"><div align="center">Gambar</div></th>
                                          <th width="11%" scope="col"><div align="center">Aksi</div></th>
                                        </tr>
<?php
	while($d = mysqli_fetch_array($query)){
?>
                                        <tr>
                                          <td><div align="center"><?php echo $d['judul']; ?></div></td>
                                          <td><div align="center"><?php echo $d['penulis']; ?></div></td>
                                          <td><div align="center"> <?php echo $d['katakunci']; ?></div></td>
                                          <td><div align="justify" style="font-size:9px;"><?php echo substr($d['artikel'],0,250); ?><font color="#009900">(.....)</font></div></td>
                                          <td><div align="center"><img src="img/imgberita/<?php echo $d['gambar']; ?>" width="50" /></div></td>
                                          <td><div align="center">
										  	<a href="edit_berita.php?id=<?php echo $d['no']; ?>">
											<img src="img/75476-2019-02-08-edit-icon-png-small-11563142463qiwrzqx0e1.png" width="25" /></a> | 
			<a href="api/hapus_berita.php?id=<?php echo $d['no']; ?>">
			<img src="img/delete-button-clipart-volume-icon-hapus-11563950527luvjbpuej2.png" width="25" /></a>
										  </div></td>
                                        </tr>
<?php
	}
?>
                                      </table>

<b>Halaman selanjutnya : </b> 
<?php for ($i=1; $i<=$pages ; $i++){ ?>
  <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
<?php } ?>

                                     
									</div>
                                     
                                     <div class="tab-pane fade active in" id="tab4">
                                        <form action="api/simpan_opini.php" method="post" enctype="multipart/form-data">
									  	<table width="100%" border="0">
                                          <tr>
                                            <th width="18%" scope="row"><div align="right">Judul Opini </div></th>
                                            <td width="4%">&nbsp;</td>
                                            <td width="78%"><label>
                                              <input name="judul" type="text" placeholder="Masukkan judul" style="width:600px; padding-left:10px;border-radius:4px" />
                                            </label></td>
                                          </tr>
                                          <tr>
                                            <th scope="row"><div align="right">Penulis</div></th>
                                            <td>&nbsp;</td>
                                            <td><input name="penulis" type="text" placeholder="Jika lebih dari 1, pisahkan dengan koma" style="width:600px; padding-left:10px;border-radius:4px" /></td>
                                          </tr>
                                          <tr>
                                            <th scope="row"><div align="right">Gambar</div></th>
                                            <td>&nbsp;</td>
                                            <td><input name="gambar" type="file" /></td>
                                          </tr>
                                          <tr>
                                            <th scope="row"><div align="right">Artikel</div></th>
                                            <td>&nbsp;</td>
                                            <td><textarea style="width:600px;" name="artikel"></textarea></td>
                                          </tr>
                                          <tr>
                                            <th scope="row"><div align="right"></div></th>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                          </tr>
                                          <tr>
                                            <th scope="row"><div align="right"></div></th>
                                            <td>&nbsp;</td>
                                            <td><p>
                                              <input type="submit" value="Masukkan Opini" />
                                            </p>
                                              <p>&nbsp; </p></td>
                                          </tr>
                                        </table>
									  </form>
									  
									  
<?php
include('api/koneksi.php');	
	$halaman = 3;
  $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
  $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
  $result = mysqli_query($koneksi,"SELECT * FROM opini");
  $total = mysqli_num_rows($result);
  $pages = ceil($total/$halaman);            
  $query = mysqli_query($koneksi,"select * from opini order by no desc LIMIT $mulai, $halaman")or die(mysql_error);
  $no =$mulai+1;
?>
                                      <table width="100%" border="1">
                                        <tr>
                                          <th width="16%" scope="col"><div align="center">Judul</div></th>
                                          <th width="20%" scope="col"><div align="center">Posted By </div></th>
                                          <th width="25%" scope="col"><div align="center">Artikel</div></th>
                                          <th width="9%" scope="col"><div align="center">Gambar</div></th>
                                          <th width="11%" scope="col"><div align="center">Aksi</div></th>
                                        </tr>
<?php
	while($d = mysqli_fetch_array($query)){
?>
                                        <tr>
                                          <td><div align="center"><?php echo $d['judul']; ?></div></td>
                                          <td><div align="center"><?php echo $d['penulis']; ?></div></td>
                                          <td><div align="justify" style="font-size:9px;">
										  <?php echo substr($d['artikel'],0,250); ?><font color="#009900">(.....)
										  </font></div></td>
                                          <td><div align="center"><img src="img/imgberita/<?php echo $d['gambar']; ?>" width="50" /></div></td>
                                          <td><div align="center">
										  	<a href="edit_opini.php?id=<?php echo $d['no']; ?>">
											<img src="img/75476-2019-02-08-edit-icon-png-small-11563142463qiwrzqx0e1.png" width="25" /></a> | 
			<a href="api/hapus_opini.php?id=<?php echo $d['no']; ?>">
			<img src="img/delete-button-clipart-volume-icon-hapus-11563950527luvjbpuej2.png" width="25" /></a>
										  </div></td>
                                        </tr>
<?php
	}
?>
                                      </table>

<b>Halaman selanjutnya : </b> 
<?php for ($i=1; $i<=$pages ; $i++){ ?>
  <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
<?php } ?>

                                     
                                     </div>

                                     <div class="tab-pane fade" id="tab5">
                                       <form action="api/simpan_doa.php" method="post" enctype="multipart/form-data">
									  	<table width="100%" border="0">
                                          <tr>
                                            <th width="18%" scope="row"><div align="right">Judul Do'a </div></th>
                                            <td width="4%">&nbsp;</td>
                                            <td width="78%"><label>
                                              <input name="judul" type="text" placeholder="Masukkan judul" style="width:600px; padding-left:10px;border-radius:4px" />
                                            </label></td>
                                          </tr>
                                          <tr>
                                            <th scope="row"><div align="right">Penulis</div></th>
                                            <td>&nbsp;</td>
                                            <td><input name="penulis" type="text" placeholder="Jika lebih dari 1, pisahkan dengan koma" style="width:600px; padding-left:10px;border-radius:4px" /></td>
                                          </tr>
                                          <tr>
                                            <th scope="row"><div align="right">Gambar</div></th>
                                            <td>&nbsp;</td>
                                            <td><input name="gambar" type="file" /></td>
                                          </tr>
                                          <tr>
                                            <th scope="row"><div align="right">Artikel</div></th>
                                            <td>&nbsp;</td>
                                            <td><textarea style="width:600px;" name="artikel"></textarea></td>
                                          </tr>
                                          <tr>
                                            <th scope="row"><div align="right"></div></th>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                          </tr>
                                          <tr>
                                            <th scope="row"><div align="right"></div></th>
                                            <td>&nbsp;</td>
                                            <td><p>
                                              <input type="submit" value="Masukkan Do'a" />
                                            </p>
                                              <p>&nbsp; </p></td>
                                          </tr>
                                        </table>
									  </form>
									  
									  
<?php
include('api/koneksi.php');	
	$halaman = 3;
  $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
  $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
  $result = mysqli_query($koneksi,"SELECT * FROM doa");
  $total = mysqli_num_rows($result);
  $pages = ceil($total/$halaman);            
  $query = mysqli_query($koneksi,"select * from doa order by no desc LIMIT $mulai, $halaman")or die(mysql_error);
  $no =$mulai+1;
?>
                                      <table width="100%" border="1">
                                        <tr>
                                          <th width="16%" scope="col"><div align="center">Judul</div></th>
                                          <th width="20%" scope="col"><div align="center">Posted By </div></th>
                                          <th width="25%" scope="col"><div align="center">Artikel</div></th>
                                          <th width="9%" scope="col"><div align="center">Gambar</div></th>
                                          <th width="11%" scope="col"><div align="center">Aksi</div></th>
                                        </tr>
<?php
	while($d = mysqli_fetch_array($query)){
?>
                                        <tr>
                                          <td><div align="center"><?php echo $d['judul']; ?></div></td>
                                          <td><div align="center"><?php echo $d['penulis']; ?></div></td>
                                          <td><div align="justify" style="font-size:9px;">
										  <?php echo substr($d['artikel'],0,250); ?><font color="#009900">(.....)
										  </font></div></td>
                                          <td><div align="center"><img src="img/imgberita/<?php echo $d['gambar']; ?>" width="50" /></div></td>
                                          <td><div align="center">
										  	<a href="edit_doa.php?id=<?php echo $d['no']; ?>">
											<img src="img/75476-2019-02-08-edit-icon-png-small-11563142463qiwrzqx0e1.png" width="25" /></a> | 
			<a href="api/hapus_doa.php?id=<?php echo $d['no']; ?>">
			<img src="img/delete-button-clipart-volume-icon-hapus-11563950527luvjbpuej2.png" width="25" /></a>
										  </div></td>
                                        </tr>
<?php
	}
?>
                                      </table>

<b>Halaman selanjutnya : </b> 
<?php for ($i=1; $i<=$pages ; $i++){ ?>
  <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
<?php } ?>

                                     
                                     </div>
									 
									 <div class="tab-pane fade" id="tab6">
                                       <form action="api/simpan_hikmah.php" method="post" enctype="multipart/form-data">
									  	<table width="100%" border="0">
                                          <tr>
                                            <th width="18%" scope="row"><div align="right">Judul Hikmah Ulama </div></th>
                                            <td width="4%">&nbsp;</td>
                                            <td width="78%"><label>
                                              <input name="judul" type="text" placeholder="Masukkan judul" style="width:600px; padding-left:10px;border-radius:4px" />
                                            </label></td>
                                          </tr>
                                          <tr>
                                            <th scope="row"><div align="right">Penulis</div></th>
                                            <td>&nbsp;</td>
                                            <td><input name="penulis" type="text" placeholder="Jika lebih dari 1, pisahkan dengan koma" style="width:600px; padding-left:10px;border-radius:4px" /></td>
                                          </tr>
                                          <tr>
                                            <th scope="row"><div align="right">Gambar</div></th>
                                            <td>&nbsp;</td>
                                            <td><input name="gambar" type="file" /></td>
                                          </tr>
                                          <tr>
                                            <th scope="row"><div align="right">Artikel</div></th>
                                            <td>&nbsp;</td>
                                            <td><textarea style="width:600px;" name="artikel"></textarea></td>
                                          </tr>
                                          <tr>
                                            <th scope="row"><div align="right"></div></th>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                          </tr>
                                          <tr>
                                            <th scope="row"><div align="right"></div></th>
                                            <td>&nbsp;</td>
                                            <td><p>
                                              <input type="submit" value="Masukkan Hikmah Ulama" />
                                            </p>
                                              <p>&nbsp; </p></td>
                                          </tr>
                                        </table>
									  </form>
									  
									  
<?php
include('api/koneksi.php');	
	$halaman = 3;
  $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
  $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
  $result = mysqli_query($koneksi,"SELECT * FROM hikmah");
  $total = mysqli_num_rows($result);
  $pages = ceil($total/$halaman);            
  $query = mysqli_query($koneksi,"select * from hikmah order by no desc LIMIT $mulai, $halaman")or die(mysql_error);
  $no =$mulai+1;
?>
                                      <table width="100%" border="1">
                                        <tr>
                                          <th width="16%" scope="col"><div align="center">Judul</div></th>
                                          <th width="20%" scope="col"><div align="center">Posted By </div></th>
                                          <th width="25%" scope="col"><div align="center">Artikel</div></th>
                                          <th width="9%" scope="col"><div align="center">Gambar</div></th>
                                          <th width="11%" scope="col"><div align="center">Aksi</div></th>
                                        </tr>
<?php
	while($d = mysqli_fetch_array($query)){

?>
                                        <tr>
                                          <td><div align="center"><?php echo $d['judul']; ?></div></td>
                                          <td><div align="center"><?php echo $d['penulis']; ?></div></td>
                                          <td><div align="justify" style="font-size:9px;">
										  <?php echo substr($d['artikel'],0,250); ?><font color="#009900">(.....)
										  </font></div></td>
                                          <td><div align="center"><img src="img/imgberita/<?php echo $d['gambar']; ?>" width="50" /></div></td>
                                          <td><div align="center">
										  	<a href="edit_hikmah.php?id=<?php echo $d['no']; ?>">
											<img src="img/75476-2019-02-08-edit-icon-png-small-11563142463qiwrzqx0e1.png" width="25" /></a> | 
			<a href="api/hapus_hkmah.php?id=<?php echo $d['no']; ?>">
			<img src="img/delete-button-clipart-volume-icon-hapus-11563950527luvjbpuej2.png" width="25" /></a>
										  </div></td>
                                        </tr>
<?php
	}
?>
                                      </table>

<b>Halaman selanjutnya : </b> 
<?php for ($i=1; $i<=$pages ; $i++){ ?>
  <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
<?php } ?>

                                     
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