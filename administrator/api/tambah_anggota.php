<?php
include('koneksi.php');

$id=$_POST['id'];
$nama=$_POST['nama'];
$tempat=$_POST['tempat'];
$tanggal=$_POST['tanggal'];
$alamat=$_POST['alamat'];
$rt=$_POST['rt'];
$rw=$_POST['rw'];
$desa=$_POST['desa'];
$kecamatan=$_POST['kecamatan'];
$kabupaten=$_POST['Kabupaten'];
$telepon=$_POST['telepon'];
mysqli_query($koneksi,"INSERT INTO anggota VALUE ('$id','$nama','$tempat','$tanggal','$alamat','$rt','$rw','$desa','$kecamatan','$kabupaten','$telepon')");
	echo"<script>alert('Data berhasil disimpan ');document.location='../anggota.php';</script>";

?>
