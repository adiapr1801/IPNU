<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi,"DELETE FROM berita1 WHERE no='$id'")or die(mysql_error());
echo"<script>alert('Data berhasil dihapus');document.location='../berita.php';</script>";
?>