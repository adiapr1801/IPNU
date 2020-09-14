<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi,"DELETE FROM hikmah WHERE no='$id'")or die(mysql_error());
echo"<script>alert('Data berhasil dihapus');document.location='../hikmah.php';</script>";
?>