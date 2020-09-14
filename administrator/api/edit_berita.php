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
<div class="container">
            <div class="center wow fadeInDown" style="margin-bottom:2px;">
                <h2 style="color:#006600;font-weight:bold;">Berita hari ini</h2>
            </div>

<?php
	while($d = mysqli_fetch_array($query)){
?>
            <div class="row" style="margin-top:5px; padding-bottom:10px; border-bottom:#999999 solid 2px;">
                <div class="beritaatas">
					<h1><?php echo $d['judul']; ?></h1>
					<p><?php echo $d['tanggal']; ?></p>
				</div>
				<div class="beritagambar">
					<img src="img/imgberita/<?php echo $d['gambar']; ?>"/>
					<p><b>Tagged by :</b> <font color="#009900"><?php echo $d['katakunci']; ?></font></p>	
				</div>
				<div class="beritaartikel">
				<p><b>Posted by :</b> <font color="#009900"><?php echo $d['penulis']; ?></font></p>
				<?php echo $d['artikel']; ?>
				</div>
				   <hr />
            </div><!--/.row-->
<?php
	}
?>
        </div>
		<hr style="height:5px;width:85%;margin:auto;">
		
<b>Halaman selanjutnya : </b> 
<?php for ($i=1; $i<=$pages ; $i++){ ?>
  <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
<?php } ?>
