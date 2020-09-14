<?php
include('api/koneksi.php');	
	$halaman = 8;
  $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
  $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
  $result = mysqli_query($koneksi,"SELECT * FROM galeri");
  $total = mysqli_num_rows($result);
  $pages = ceil($total/$halaman);            
  $query = mysqli_query($koneksi,"select * from galeri order by no desc LIMIT $mulai, $halaman")or die(mysql_error);
  $no =$mulai+1;
?>
<div class="container" style="margin-bottom:2px; width:100%">
            <div class="center wow fadeInDown" style="margin-bottom:2px;">
                <h2 style="color:#006600;font-weight:bold; margin-bottom:2px;">Galeri Tebaru</h2>
            </div>

            <div class="row">
<?php
	while($d = mysqli_fetch_array($query)){
?>
                <div class="col-xs-12 col-sm-4 col-md-3" style="float:left" >
                  <div class="recent-work-wrap">
                        <img src="img/imggaleri/<?php echo $d['gambar']; ?>" height="250" id="gambarku" />
					
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#"><?php echo $d['judul']; ?></a> </h3>
                                <p><?php echo $d['keterangan']; ?></p>
                              <a class="preview" href="img/imggaleri/<?php echo $d['gambar']; ?>" rel="prettyPhoto"><i class="fa fa-eye"></i> Lihat</a>
                            </div> 
                        </div>
                  </div>
                </div>   
<?php
	}
?> 
            </div><!--/.row-->
<b>Halaman selanjutnya : </b> 
<?php for ($i=1; $i<=$pages ; $i++){ ?>
  <a href="?halaman=<?php echo $i; ?>#gambarku"><?php echo $i; ?></a>
<?php } ?>
        
		</div>
		<hr style="height:5px;width:85%;margin:auto;">