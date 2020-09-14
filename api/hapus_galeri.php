<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi,"DELETE FROM berita WHERE no='$id'")or die(mysql_error());
echo"<script>alert('Data berhasil dihapus');document.location='../galeri.php';</script>";
?>