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

    <section id="recent-works" style="background-image:linear-gradient(#CCCCCC,#fff); padding-left:5%;padding-right:5%; padding-top:20px;">
        <?php
	include('api/koneksi.php');	
	$halaman = 10;
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
    </tr>
<?php
	}
?>
</table>
	<b>Halaman selanjutnya : </b> 
	<?php for ($i=1; $i<=$pages ; $i++){ ?>
	  <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
	<?php } ?>

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