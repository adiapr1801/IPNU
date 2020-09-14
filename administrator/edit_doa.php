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
                                    <li class="active"><a href="#tab4" data-toggle="tab" class="tehnical">Edit Do'a </a></li>
                                </ul>
                            </div>

                            <div class="parrent media-body">
								<div class="tab-content">
									
                                     <div class="tab-pane fade active in" id="tab4">
                                        <?php
	include("api/koneksi.php");
	$id=$_GET['id'];
	$q = mysqli_query($koneksi,"SELECT * FROM doa where no='$id'");
	while($r = mysqli_fetch_array($q)){
											?>
                                       <form action="api/update_doa.php?id=<?php echo "$id"; ?>" method="post" enctype="multipart/form-data">
									  	<table width="100%" border="0">
                                          <tr>
                                            <th width="18%" scope="row"><div align="right">Judul Opini </div></th>
                                            <td width="4%">&nbsp;</td>
                                            <td width="78%"><label>
                                              <input name="judul" type="text" placeholder="Masukkan judul" 
											  value="<?php echo $r['judul']; ?>" style="width:600px; padding-left:10px;border-radius:4px" />
                                            </label></td>
                                          </tr>
                                          <tr>
                                            <th scope="row"><div align="right">Penulis</div></th>
                                            <td>&nbsp;</td>
                                            <td><input name="penulis" type="text" placeholder="Masukkan judul" 
											  value="<?php echo $r['penulis']; ?>" style="width:600px; padding-left:10px;border-radius:4px" /></td>
                                          </tr>
                                          <tr>
                                            <th scope="row"><div align="right">Artikel</div></th>
                                            <td>&nbsp;</td>
                                            <td><input name="artikel" type="text" id="keterangan" 
											value="<?php echo $r['artikel']; ?>" style="width:600px; padding-left:10px;border-radius:4px"
											 maxlength="100" placeholder="Maksimal 100 karakter" /></td>
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
                                              <input type="submit" value="Update Do'a" />
                                            </p>
                                              <p>&nbsp; </p></td>
                                          </tr>
                                        </table>
									  </form>
									  
									  
<?php
}
?>
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