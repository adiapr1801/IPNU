<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi,"DELETE FROM anggota WHERE id_anggota='$id'")or die(mysql_error());
echo"<script>alert('Data berhasil dihapus');document.location='../anggota.php';</script>";
?>