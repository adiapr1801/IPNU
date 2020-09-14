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
			
            

<?php
	while($d = mysqli_fetch_array($query)){
?>
            <div class="row" style="margin-top:5px; padding-bottom:10px; border-bottom:#999999 solid 2px; width:100%">
                <div class="beritaatas">
					<h2><?php echo $d['judul']; ?></h1>
				</div>
				<div class="tanggal" style="width:10%; background:#FFFFFF; border:#666666 solid 2px; color:#006600; height:30px; float:left; margin-right:3px; border-radius:5px;
				text-align:center; box-shadow:-4px -4px;
				">
					<p><?php echo $d['tanggal']; ?></p>
				</div>
				<div class="beritagambar">
					<img src="img/imgberita/<?php echo $d['gambar']; ?>"/>
					<p><b>Tagged by :</b> <font color="#009900"><?php echo $d['katakunci']; ?></font></p>	
				</div>
				<div class="beritaartikel" style="width:56%; margin-left:10px; background:#FFFFFF;">
				<p><b>Posted by :</b> <font color="#009900"><?php echo $d['penulis']; ?></font></p>
				<?php echo substr($d['artikel'],0,1000); ?><br />
				
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
