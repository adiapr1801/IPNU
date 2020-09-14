<?php
include('koneksi.php');

$id=$_GET['id'];
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
mysqli_query($koneksi,"UPDATE anggota SET id_anggota='$id',nama='$nama',tempat_lahir='$tempat',tgl_lahir='$tanggal',alamat='$alamat',rt='$rt',rw='$rw',desa='$desa',kecamatan='$kecamatan',
kabupaten='$kabupaten',telepon='$telepon' WHERE id_anggota=$id");
	echo"<script>alert('Data berhasil disimpan ');document.location='../anggota.php';</script>";

?>
