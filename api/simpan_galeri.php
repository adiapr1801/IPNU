<?php
include('koneksi.php');


$judul=$_POST['judul'];
$keterangan=$_POST['keterangan'];

$nama_file = $_FILES['gambar']['name'];
$ukuran_file = $_FILES['gambar']['size'];
$tipe_file = $_FILES['gambar']['type'];
$tmp_file = $_FILES['gambar']['tmp_name'];

$path = "../img/imggaleri/".$nama_file;
if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){
  if($ukuran_file <= 1000000){ 
    if(move_uploaded_file($tmp_file, $path)){ 
	$query = ("INSERT INTO galeri(no,judul,keterangan,gambar) VALUES('','$judul','$keterangan','$nama_file')");
      $sql = mysqli_query($koneksi, $query); 
      
      if($sql){ 
        header("location: ../galeri.php"); // Redirectke halaman index.php
      }else{
        // Jika Gagal, Lakukan :
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
        echo "<br><a href='../galeri.php'>Kembali Ke Form</a>";
      }
    }else{
      // Jika gambar gagal diupload, Lakukan :
      echo "Maaf, Gambar gagal untuk diupload.";
      echo "<br><a href='../galeri.php'>Kembali Ke Form</a>";
    }
  }else{
    // Jika ukuran file lebih dari 1MB, lakukan :
    echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB";
    echo "<br><a href='../galeri.php'>Kembali Ke Form</a>";
  }
}else{
  // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
  echo "Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.";
  echo "<br><a href='../galeri.php'>Kembali Ke Form</a>";
}


?>
