<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi,"DELETE FROM opini WHERE no='$id'")or die(mysql_error());
echo"<script>alert('Data berhasil dihapus');document.location='../opini.php';</script>";
?>